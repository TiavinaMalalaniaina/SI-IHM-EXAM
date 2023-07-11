<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo site_url('assets/css/themify-icons.css') ?>" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <?php include("Header.php")?>

    
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Validation Code</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Code</th>
                                    	<th>Valeur</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($codes as $code) { ?>
                                            <tr>
                                                <td><?= $code->code->id ?></td>
                                                <td><?= $code->user->nom ?></td>
                                                <td><?= $code->code->code ?></td>
                                                <td><?= formatMoney($code->code->valeur) ?> Ariary</td>
                                                <td><a href="<?= site_url('code/validateCode/'.$code->id) ?>"><button style="width:100px ;
                                            color:aliceblue;
                                            background:rgb(234,92,33);border: none;padding :5px;">Valider</button></a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <?php if(count($codes)==0) ?><center>Aucun code n'a été entré</center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

    <script src="<?php echo site_url('assets/js/jquery-1.10.2.js') ?>" type="text/javascript"></script>
	<script src="<?php echo site_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo site_url('assets/js/bootstrap-checkbox-radio.js') ?>"></script>
	<script src="<?php echo site_url('assets/js/chartist.min.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap-notify.js') ?>"></script>
	<script src="<?php echo site_url('assets/js/paper-dashboard.js') ?>"></script>
	<script src="<?php echo site_url('assets/js/demo.js') ?>"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>


</html>
