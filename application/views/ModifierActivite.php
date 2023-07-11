<!DOCTYPE html>
<?php include('Header.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-2 col-md-2"></div>
                    
<style>
    table input{
        width: 100px;
    }
</style>
                                <table class="table table-striped">
                                    <thead>
                                        <th></th>
                                        <th>Activite</th>
                                        <th>Duree</th>
                                        <th>Quantite</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($activite); $i++) { ?>
                                         
                                        <tr>
                                            <td><input type="hidden" name="id" id="id" value="<?php echo $activite[$i]->id;?>"></td>
                                            <td>
                                                <select name = "idactivite">
                                                    <?php for($k=0; $k<count($type); $k++){?>
                                                        <option value="<?php echo $type[$k]->id?>"> <?php echo $type[$k]->libelle?></option>
                                                    <?php }?>
                                                </select></td>
                                                <td><input type="time" id="duree" name="duree" value="<?php echo isset($_POST['duree']) ? $_POST['duree'] :  $activite[$i]->duree ?>"></td>    
                                            <td><input type="number" id="quantite" name="quantite" value="<?php echo isset($_POST['quantite']) ? $_POST['quantite'] :  $activite[$i]->quantite ?>"></td>                                            

                                            <td><a onclick="upQuantite(this)" data-quantite="<?php echo $activite[$i]->quantite ?>"  ><i class="ti-pencil"></i></a>
</td>
                                            
                                           
                                        </tr> 
                                        
                                    <?php } ?>
                                                                      
                                                
                                            
                                    </tbody>
                                </table>                               
                                        <!-- </form>      -->
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>
</div>


</body>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    //tsy metyyyy
   function upQuantite(element) {
    var quantite = element.parentNode.parentNode.querySelector("input[name='quantite']").value;
    var duree = element.parentNode.parentNode.querySelector("input[name='duree']").value;
    var id = element.parentNode.parentNode.querySelector("input[name='id']").value;
    var idactivite = element.parentNode.parentNode.querySelector("select[name='idactivite']").value;
    console.log(idactivite);
    $.ajax({
        url: "<?php echo site_url('Activite/DoModificationComposant'); ?>",
        type: "POST",
        data: { quantite: quantite, id: id , duree: duree, idactivite: idactivite},
        success: function(response) {
            // Traitez la réponse du contrôleur ici si nécessaire
            console.log("tay b");

        },
        error: function(xhr, status, error) {
            console.log("tay");
        }
    });
}


</script>
    <!--   Core JS Files   -->
    <script src="<?php echo site()."assets/js/jquery-1.10.2.js"?>" type="text/javascript"></script>
	<script src="<?php echo site()."assets/js/bootstrap.min.js"?>" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo site()."assets/js/bootstrap-checkbox-radio.js"?>"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo site()."assets/js/chartist.min.js"?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo site()."assets/js/bootstrap-notify.js"?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo site()."assets/js/paper-dashboard.js"?>"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo site()."assets/js/demo.js"?>"></script>

</html>
