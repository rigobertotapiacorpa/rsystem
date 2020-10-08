<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="M_Adnan">
	<title>BENSYS S.R.L</title>
	<!-- Favicon -->
	<link href="images/favicon.ico" rel="icon" sizes="16x16" type="image/png" /><!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" /><!-- Custom CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/ionicons.min.css" rel="stylesheet" />
	<link href="css/main.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/responsive.css" rel="stylesheet" /><!-- Online Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,800,200,500" rel="stylesheet" type="text/css" />
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:400,600italic,400italic,300,300italic,600,700,700italic,800,800italic"
		rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400italic,400,700" rel="stylesheet"
		type="text/css" /><!-- COLORS -->
	<link href="css/colors/default.css" id="color" rel="stylesheet" /><!-- JavaScripts -->
	<script src="js/modernizr.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<!-- Wrap -->
	<div id="wrap">
		<!-- header -->
		<header>
			<!-- Navigation -->
			<nav class="navbar">
				<div class="sticky">
					<div class="container">
						<!-- LOGO -->
						<div class="logo"><a href="index.html"><img alt="" class="img-responsive"
									src="images/log.png" /></a></div>
						<!-- MENU NAVEGACION -->

						<ul class="nav ownmenu">
							<li><a href="index.php">Inicio </a></li>
							<li><a href="about.php">Nosotros </a></li>
							<li><a href="index.php">Servicios </a></li>
							<li><a href="index.php">Proyectos </a></li>
							<li class="active"><a href="contact.php">Contacto</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- Content -->

		<div id="content">
			<section class="padding-bottom-70">
				<div class="contact-info padding-top-100 padding-bottom-100" data-stellar-background-ratio="0.5">
					<div class="container">
						<!-- Heading -->
						<!-- australia -->
						<ul>
							<li class="col-sm-17">
								<article>
									<h5>Santa Cruz - Bolivia</h5>

									<p>10 anillo, Av. El Retoño. Santa Cruz
										&ndash; Bolivia.</p>

									<p>76681436</p>

									<p>proyecto@R-SYSTEM.com.bo</p>
								</article>
							</li>
						</ul>
					</div>
				</div>

				<div class="container">
					<!-- Heading -->
					<div class="heading text-left margin-top-70 margin-bottom-30">
						<h4>Cont&aacute;ctenos</h4>
					</div>

					<div class="row">
						<div class="col-md-6">
							<!-- CONTACT FORM -->
							<div class="contact-form">
								<!-- Success Msg -->
								<div class="success-msg" id="contact_message">Gracias, su mensaje ha sido enviado</div>
								<!-- FORM -->

								<form class="contact-form" id="contact_form" method="post" onsubmit="return false"
									role="form">
									<ul class="row">
										<li class="col-sm-12"><label><input class="form-control" id="name" name="name"
													placeholder="Nombre" type="text" /> </label></li>
										<li class="col-sm-12"><label><input class="form-control" id="email" name="email"
													placeholder="Email" type="text" /> </label></li>
										<li class="col-sm-12"><label><input class="form-control" id="company"
													name="company" placeholder="Asunto" type="text" /> </label></li>
										<li class="col-sm-12"><label><textarea class="form-control" id="message"
													name="message" placeholder="Mensaje" rows="5"></textarea> </label>
										</li>
										<li class="col-sm-12"><button class="btn btn-1" id="btn_submit"
												onclick="proceed();" type="submit" value="submit">Enviar
												Mensaje</button></li>
									</ul>
								</form>
							</div>
						</div>
						<!-- MAP -->

						<div class="col-md-6">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- FOOTER -->

		<footer>
			<div class="container">
				<div class="row">
					<!-- ABOUT -->
					<div class="col-md-12"><img alt="" src="images/log.png" /></div>
					<!-- RIGHTS -->

					<div class="row">
						<div class="col-md-7">
							<p>&copy; Todos los Derechos Reservados 2019 <span class="primary-color">R-SYSTEM
								</span></p>
						</div>
					</div>
				</div>
				<script src="js/jquery-1.11.0.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/own-menu.js"></script>
				<script src="js/jquery.isotope.min.js"></script>
				<script src="js/jquery.flexslider-min.js"></script>
				<script src="js/jquery.countTo.js"></script>
				<script src="js/owl.carousel.min.js"></script>
				<script src="js/jquery.cubeportfolio.min.js"></script>
				<script src="js/jquery.colio.min.js"></script>
				<script src="js/main.js"></script><!-- Begin Map Script-->
				<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
				<script type="text/javascript">
					/*==========  Map  ==========*/
					var map;
					function initialize_map() {
						if ($('#map').length) {
							var myLatLng = new google.maps.LatLng(-17.756769, -63.156062);
							var mapOptions = {
								zoom: 17,
								center: myLatLng,
								scrollwheel: false,
								panControl: false,
								zoomControl: true,
								scaleControl: false,
								mapTypeControl: false,
								streetViewControl: false
							};
							map = new google.maps.Map(document.getElementById('map'), mapOptions);
							var marker = new google.maps.Marker({
								position: myLatLng,
								map: map,
								tittle: 'Envato',
								icon: './images/map-locator.png'
							});
						} else {
							return false;
						}
					}
					google.maps.event.addDomListener(window, 'load', initialize_map);
				</script>
			</div>
		</footer>
	</div>
</body>

</html>