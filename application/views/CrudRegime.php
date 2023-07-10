 <?php
    if(null != $this->session->userdata('idregime')){
        $id = $this->session->userdata('idregime');
       
    }else{ 
    }
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <meta http-­‐equiv="Content-­‐Type" content="text/html; charset=UTF-­‐8" />
    <title>mvc</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.css')?> ">
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/fonts/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/fonts/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Footer-Basic.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Navigation-with-Search.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/styles.css')?>">
</head>

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
                            <form action="<?php echo site_url('Regime/insertionComposant') ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" class="form-control border-input" name ="Regime" placeholder="Nom du Regime" value="Nom du Regime">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Duree en jours</label>
                                                <input type="number" class="form-control border-input" name ="Duree" placeholder="30">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Poids</label>
                                                <input type="number" class="form-control border-input" name="Poids" placeholder="Poids">
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
                                        <?php foreach($day as $item){?>
                                            <th><?php echo $item->libelle?></th>
                                        <?php }?> 
                                        <th>Aliment</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($nourriture as $item) { ?>
                                        <tr>
                                                                                        <td></td>
                                            <td><input type="number" name="matin[]" placeholder=" Matin" value = "11"></td>
                                            <td><input type="number" name="midi[]" placeholder=" Midi"value = "11"></td>
                                            <td><input type="number" name="soir[]" placeholder=" Soir"value = "11"></td>
                                            <td><input type="hidden" name="nom[]" value="<?php echo $item->id_type_nourriture;?>"><?php echo $item->nom; ?></td>
                                        </tr> 
                                    <?php } ?>
                                                                      
                                                
                                            
                                    </tbody>
                                </table>
                                <div class="text-c">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Creer un nouveau Regime</button>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    </form>
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

    <!--   Core JS Files   -->
    <script src="<?php echo site_url()."assets/js/jquery-1.10.2.js"?>" type="text/javascript"></script>
	<script src="<?php echo site_url()."assets/js/bootstrap.min.js"?>" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo site_url()."assets/js/bootstrap-checkbox-radio.js"?>"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo site_url()."assets/js/chartist.min.js"?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo site_url()."assets/js/bootstrap-notify.js"?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo site_url()."assets/js/paper-dashboard.js"?>"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo site_url()."assets/js/demo.js"?>"></script>

</html>
