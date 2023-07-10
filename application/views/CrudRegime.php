<!-- <!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">User Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-2 col-md-2"></div>
                    
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form action="InsertActivite.html">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" class="form-control border-input" placeholder="Regime" value="Nom du Regime">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Durree en jour</label>
                                                <input type="text" class="form-control border-input" placeholder="Durree" value="30">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Poids</label>
                                                <input type="email" class="form-control border-input" placeholder="Poids">
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
                                        <th>Matin</th>
                                        <th>Midi</th>
                                        <th>Soir</th>
                                        <th>Aliment</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td><input type="text" name="matin1" placeholder=" Matin"></td>
                                            <td><input type="text" name="midi1" placeholder=" Midi"></td>
                                            <td><input type="text" name="soir1" placeholder=" Soir"></td>
                                            <td>Viande</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="text" name="matin2" placeholder=" Matin"></td>
                                            <td><input type="text" name="midi2" placeholder=" Midi"></td>
                                            <td><input type="text" name="soir2" placeholder=" Soir"></td>
                                            <td>Haricot</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="text" name="matin3" placeholder=" Matin"></td>
                                            <td><input type="text" name="midi3" placeholder=" Midi"></td>
                                            <td><input type="text" name="soir3" placeholder=" Soir"></td>
                                            <td>Angivy</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="text" name="matin4" placeholder=" Matin"></td>
                                            <td><input type="text" name="midi4" placeholder=" Midi"></td>
                                            <td><input type="text" name="soir4" placeholder=" Soir"></td>
                                            <td>Viande</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="text" name="matin5" placeholder=" Matin"></td>
                                            <td><input type="text" name="midi5" placeholder=" Midi"></td>
                                            <td><input type="text" name="soir5" placeholder=" Soir"></td>
                                            <td>Vary</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="text" name="matin5" placeholder=" Matin"></td>
                                            <td><input type="text" name="midi5" placeholder=" Midi"></td>
                                            <td><input type="text" name="soir5" placeholder=" Soir"></td>
                                            <td>Vary</td>
                                        </tr>
                                    </tbody>
                                </table>

                         
                                
                                    <div class="text-c">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
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

    <!--   Core JS Files   -->
    <script src="<?php echo site_url()assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo site_url()assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo site_url()assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo site_url()assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo site_url()assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo site_url()assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo site_url()assets/js/demo.js"></script>

</html> -->
