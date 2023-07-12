<!doctype html>
<?php include("Header.php")?>

        <div class="content">
            <div class="container-fluid">
               
        <form action="<?php echo site_url('Activite/ModifierComposant') ?>" method="post">
                <div class="row">
                <?php foreach($activite as $act){?>
                    
                    <div class="col-md-3">
                        <div class="card" style="height: 140px;">
                            <div class="header">
                                <input type="hidden" name="id<?php echo $act->id?>" value="<?php echo $act->id?>">
                                <h4 class="title"><?php echo $act->poids ?> kilos</h4>
                                <p class="category"><?php echo $act->duree ?> jours</p>
                            </div>
                            <div class="content">
                                
                                <div class="footer">
                                    <a href="<?php echo site_url('Activite/ModifierComposant/'.$act->id) ?>" class="btn" style="width: 100%;bottom: 0px;">Modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
               <?php } ?>
               <div class="col-md-3">
                    <div class="card" style="height: 140px; display: flex; align-items: center; justify-content: center;">
                        <a href="CreerActivite" class="add-button">
                        <i class="ti-plus fa-3x"></i>
                        </a>
                    </div>
                </div>


                        
                    

                </div>
                </form>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>
<style>
.add-button {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-color: #e6e6e6;
  color: #333;
  text-decoration: none;
}

.add-button:hover {
  background-color: #ccc;
}

</style>

</body>

    <!--   Core JS Files   -->
    <script src="<?php echo site_url()."assets/js/jquery-1.10.2.js"?>"   type="text/javascript"></script>
	<script src="<?php echo site_url()."assets/js/bootstrap.min.js"?>"   type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo site_url()."assets/js/bootstrap-checkbox-radio.js"?>"   ></script>

	<!--  Charts Plugin -->
	<script src="<?php echo site_url()."assets/js/chartist.min.js"?>"   ></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo site_url()."assets/js/bootstrap-notify.js"?>"   ></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"?>"     ></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo site_url()."assets/js/paper-dashboard.js"?>"    ></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo site_url()."assets/js/demo.js"?>"   ></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
