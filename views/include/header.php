<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the Compatible of your site -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" src="">
	<!-- set the page title -->
	<title>Sobre ruedas</title>
	<!-- include the site Google Fonts stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:300,400,500,700,900&display=swap" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/bootstrap.css">
	<!-- include the site fontawesome stylesheet -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/fontawesome.css">
	<!-- include the site stylesheet -->
	<!-- include theme plugins setting stylesheet -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/plugins.css">
	<!-- include theme color setting stylesheet -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/color.css">
	<!-- include theme responsive setting stylesheet -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/responsive.css">
	
	<link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/style.css">
	
	<link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/styles.css">

	<!-- <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
    <script>
      const base_url='<?php echo BASE_URL;?>';
	</script>
</head>

<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- pageHeader -->
		<header id="header" class="pt-lg-5 pt-md-3 pt-2 position-absolute w-100">
			<div class="container-fluid px-xl-17 px-lg-5 px-md-3 px-0 d-flex flex-wrap">
				<div class="col-6 col-sm-3 col-lg-2 order-sm-2 order-md-0 dis-none">
					<!-- langList -->
					<ul class="nav nav-tabs langList pt-xl-6 pt-lg-4 pt-3 border-bottom-0">
						<li>
							<a class="icon-menu" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false"></a>
							<div class="dropdown-menu pl-4 pr-4">
								<a class="dropdown-item" href="javascript:void(0);">Login</a>
								<a class="dropdown-item" href="<?php echo BASE_URL;?>adminlogin">Login admin</a>
								<a class="dropdown-item" href="javascript:void(0);">cerrar seción</a>
							</div>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle text-uppercase" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">ES</a>
							<div class="dropdown-menu pl-4 pr-4">
								<a class="dropdown-item" href="javascript:void(0);">Español</a>
								<a class="dropdown-item" href="javascript:void(0);">Ingles</a>
								<a class="dropdown-item" href="javascript:void(0);">Frances</a>
							</div>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle text-uppercase" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">PEN</a>
							<div class="dropdown-menu text-uppercase pl-4 pr-4 border-0">
								<a class="dropdown-item" href="javascript:void(0);">PEN</a>
								<a class="dropdown-item" href="javascript:void(0);">USD</a>
								<a class="dropdown-item" href="javascript:void(0);">euro</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-12 col-sm-6 col-lg-8 static-block">
					<!-- mainHolder -->
					<div class="mainHolder justify-content-center">
						<!-- pageNav1 -->
						<nav class="navbar navbar-expand-lg navbar-light p-0 pageNav1 position-static">
							<button type="button" class="navbar-toggle collapsed position-relative mt-md-2" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav mx-auto text-uppercase d-inline-block">
									<li class="nav-item active dropdown">
									<a class="d-block" href="<?php echo BASE_URL;?>inicio">Inicio</a> 
									</li>
									<li class="nav-item dropdown">
									<a class="d-block" href="<?php echo BASE_URL;?>about-us.html">productos</a>
									</li>
									<li class="nav-item">
										<a class="d-block" href="<?php echo BASE_URL;?>about-us.html">acerca de</a>
									</li>
									<li class="nav-item">
										<a class="nLogo" href="<?php echo BASE_URL;?>home.html"><img src="<?php echo BASE_URL;?>assets/img/logo.png" alt="Sobre ruedas" class="img-fluid"></a>
									</li>
									<li class="nav-item dropdown">
										<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
										<ul class="list-unstyled text-capitalize border-right border-bottom border-left dropdown-menu mt-0 py-0">
											<li class="d-block mx-0"><a href="blog.html">Blog Left Sidebar</a></li>
											<li class="d-block mx-0"><a href="blog-detail.html">Blog Detail</a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
										<ul class="list-unstyled text-capitalize border-right border-bottom border-left dropdown-menu mt-0 py-0">
											<li class="d-block mx-0"><a href="cart-page.html">Cart Page</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="d-block" href="contact-us.html">contacto</a>
									</li>
								</ul>
							</div>
						</nav>
						<div class="logo">
							<a href="#"><img src="images/logo.png" alt="Sobre ruedas" class="img-fluid"></a>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-3 col-lg-2 order-sm-3 order-md-0 dis-none">
					<!-- wishList -->
					<ul class="nav nav-tabs wishList pt-xl-5 pt-lg-4 pt-3 mr-xl-3 mr-0 justify-content-end border-bottom-0">
						<li class="nav-item"><a class="nav-link icon-search" href="javascript:void(0);"></a></li>
						<li class="nav-item"><a class="nav-link position-relative icon-heart" href="javascript:void(0);"><span class="num rounded d-block">1</span></a></li>
						<li class="nav-item"><a class="nav-link position-relative icon-cart" href="javascript:void(0);"><span class="num rounded d-block">2</span></a></li>
					</ul>
				</div>
			</div>
		</header>
		<!-- main -->