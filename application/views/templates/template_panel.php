<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>f-Pod Publisher</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div ng-app="myApp" ng-controller="myCtrl">

	<div class="wrapper">
		<div class="sidebar" data-color="blue" data-image="http://clubofmozambique.com/wp-content/uploads/2017/05/CDs.jpg">

		<!--

			Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
			Tip 2: you can also add an image using data-image tag

		-->

			<div class="sidebar-wrapper">
				<div class="logo">
					<a href="" class="simple-text">
						f-Pod Publisher
					</a>
				</div>

				<ul class="nav">
					<?php if (isset($board_my_albums)) : ?>
						<li class="active">
					<?php else : ?>
						<li>
					<?php endif; ?>
						<a href="my_albums">
							<i class="pe-7s-album"></i>
							<p>Moje albumy</p>
						</a>
					</li>
					<?php if (isset($board_publish_album)) : ?>
						<li class="active">
					<?php else : ?>
						<li>
					<?php endif; ?>
						<a href="publish_album">
							<i class="pe-7s-next-2"></i>
							<p>Nowy album</p>
						</a>
					</li>
					<?php if (isset($board_statistics)) : ?>
						<li class="active">
					<?php else : ?>
						<li>
					<?php endif; ?>
						<a href="statistics">
							<i class="pe-7s-id"></i>
							<p>Statystyki sprzedaży</p>
						</a>
					</li>
					<?php if (isset($board_account_data)) : ?>
						<li class="active">
					<?php else : ?>
						<li>
					<?php endif; ?>
						<a href="account_data">
							<i class="pe-7s-graph3"></i>
							<p>Dane konta</p>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Panel administracyjny</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
							   <a href="logout">
								   Wyloguj
							   </a>
							</li>
						</ul>
					</div>
				</div>
			</nav>


			<div class="content">
				<div class="container-fluid">

						<?php echo $content; ?>

				</div>
			</div>


			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									Przejdź do naszego sklepu
								</a>
							</li>
							<li>
								<a href="#">
									Regulamin
								</a>
							</li>
						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; 2017 <a href="http://www.nonstech.pl">NoN-S Tech</a>, made with love for a better web
					</p>
				</div>
			</footer>

		</div>
	</div>

</div>

</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="<?php echo base_url(); ?>text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url(); ?>assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
	
</html>
