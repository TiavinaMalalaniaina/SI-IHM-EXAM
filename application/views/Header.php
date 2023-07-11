 
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url()."assets/assets/img/apple-icon.png"?>">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

 
    <link href="<?php echo site_url()."assets/assets/css/bootstrap.min.css"?>" rel="stylesheet" />
 
    <link href="<?php echo site_url()."assets/assets/css/animate.min.css"?>" rel="stylesheet"/>
 
    <link href="<?php echo site_url()."assets/assets/css/paper-dashboard.css"?>" rel="stylesheet"/>
 
    <link href="<?php echo site_url()."assets/assets/css/demo.css"?>" rel="stylesheet" />
 
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo site_url()."assets/assets/css/themify-icons.css"?>" rel="stylesheet">

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
                    <a href="<?php echo site_url()."Admin/StatistiqueArgent "?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo site_url()."Regime/ModifierRegime"?>">
                        <i class="ti-list"></i>
                        <p>Liste des Regimes</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url()."Regime/"?>">
                        <i class="ti-plus"></i>
                        <p>Nouveau Regime</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url()."Activite/"?>">
                        <i class="ti-list"></i>
                        <p>Liste des Activites</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url()."code/validationform"?>">
                        <i class="ti-pencil-alt2"></i>
                        <p>Validation de code</p>
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

