<?php
ob_end_clean();
require('fpdf/fpdf.php');

// Données de votre régime alimentaire
$regime = [
    ['Date', 'Matin', 'Midi', 'Soir'],
    ['Jour 1', 'Flocons d\'avoine', 'Salade de poulet', 'Saumon grillé'],
    ['Jour 2', 'Yaourt grec', 'Riz aux légumes', 'Tofu sauté'],
    ['Jour 3', 'Smoothie aux fruits', 'Poulet rôti', 'Légumes sautés'],
    // Ajoutez les autres jours ici...
];

// Convertir les caractères en UTF-8
foreach ($regime as &$row) {
    foreach ($row as &$cell) {
        $cell = utf8_decode($cell);
    }
}

// Instantiate and use the FPDF class
class PDF extends FPDF
{
    // En-tête de page
      function Header()
    {
        // Logo
        $this->Image('logo.png', $this->GetPageWidth() - 50, 5, 40, 25);
    }
}

$pdf = new PDF();

// Add a new page
$pdf->AddPage();

// Set the font for the title
$pdf->SetFont('Arial', 'B', 18);

// Title
$pdf->Cell(80, 20, utf8_decode('Votre Régime Alimentaire :'), 0, 1, 'C');
$pdf->Ln(10);

// Set the font for the table headers
$pdf->SetFont('Arial', 'B', 12);

// Table headers
$pdf->SetFillColor(255, 165, 0); // Couleur orangered
foreach ($regime[0] as $header) {
    $pdf->Cell(48, 10, $header, 1, 0, 'C', true); // Utilisation de la couleur de fond
}

$pdf->Ln();

// Set the font for the table rows
$pdf->SetFont('Arial', '', 12);

// Table rows
$fill = false;
foreach ($regime as $row) {
    $pdf->SetFillColor($fill ? 255 : 240); // Couleur blanc et gris
    $fill = !$fill;
    foreach ($row as $cell) {
        $pdf->Cell(48, 10, $cell, 1, 0, 'C', true); // Utilisation de la couleur de fond
    }
    $pdf->Ln();
}

// Définir la marge de gauche
$pdf->SetLeftMargin(20); // 2 cm (20 mm) de marge de gauche

// Generate a unique filename for the PDF
$filename = 'regime_alimentaire_' . uniqid() . '.pdf';

// Save the PDF file
$pdf->Output('D', $filename);
?>

<script>
  // Function to trigger the PDF download
  function downloadPDF() {
    var file = '<?php echo $filename; ?>';
    // Check if the file exists
    if (file !== '') {
      // Create a hidden link element
      var link = document.createElement('a');
      link.href = file;
      link.download = file;

      // Append the link to the document
      document.body.appendChild(link);

      // Trigger the click event
      link.click();

      // Remove the link from the document
      document.body.removeChild(link);
    }
  }
</script>
