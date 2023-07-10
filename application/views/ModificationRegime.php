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
                    
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Nouveau Regime</h4>
                            </div>
                            <div class="content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" class="form-control border-input" name ="Regime" placeholder="<?php echo $regime[0]->nom?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Duree en jours</label>
                                                <input type="number" class="form-control border-input" name ="Duree" placeholder="<?php echo $regime[0]->duree?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Poids</label>
                                                <input type="number" class="form-control border-input" name="Poids" placeholder="<?php echo $regime[0]->poids?>">
                                            </div>
                                        </div>
                                    </div>
                                    

<style>
    table input{
        width: 100px;
    }
</style>
                                <table class="table table-striped">
                                    <thead>
                                        <th></th>
                                        <th>Partie de la journee</th>
                                        <th>Aliment</th>
                                        <th>Quantite</th>

                                    </thead>
                                    <tbody>
                                    <?php for($i=0; $i<count($matin); $i++) { ?>
                                        <?php 
                                            $jour = 'matin';
                                            if($matin[$i]->id_day ==12){
                                                $jour= 'midi';
                                            }else if($matin[$i]->id_day ==13){
                                                $jour = 'soir';
                                            }?>
                                        <tr>
                                            <td><input type="hidden" name="id" id="id" value="<?php echo $matin[$i]->id;?>"></td>
                                            <td><?php echo $jour?></td>
                                            <td><input type="hidden" id="type" value="<?php echo $matin[$i]->id_type_nourriture?>"><?php echo $matin[$i]->id_type_nourriture?></td>
                                            
                                            <td><input type="number" id="quant" name="quant" value="<?php echo isset($_POST['quantite']) ? $_POST['quantite'] :  $matin[$i]->quantite ?>"></td>                                            
                                            <td><a onclick="upQuantite(this)" data-quantite="<?php echo $matin[$i]->quantite ?>"  ><i class="ti-pencil"></i></a>
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
    var quantite = element.parentNode.parentNode.querySelector("input[name='quant']").value;
    var id = element.parentNode.parentNode.querySelector("input[name='id']").value;
 
    $.ajax({
        url: "<?php echo site_url('Regime/DoModificationComposant'); ?>",
        type: "POST",
        data: { quantite: quantite, id: id },
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
