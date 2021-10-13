
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop </title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="view/home/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="view/home/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="view/home/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="view/home/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="view/home/css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="view/home/css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="view/home/css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="view/home/css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="view/home/css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="view/home/css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="view/home/css/reset.css">
	<link rel="stylesheet" href="view/home/style.css">
    <link rel="stylesheet" href="view/home/css/responsive.css">
	

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
    <header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <li><i class="ti-headphone-alt"></i> +216 74 000 000 </li>
                            <li><i class="ti-email"></i> Eshop@gmail.com</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
                            <li><i class="ti-user"></i>    <button  id="b1" type="submit">
							 <?php if((isset($_SESSION["pseudo"]))&&
                            (isset($_SESSION["email"]))){

                       echo  $_SESSION['email'];}?></button></li></button></li>
							
                            <li>
							<i class="ti-power-off"></i><a href="index.php?action=getlogin&controller=Client">
							Login</a></li>
							<i class="ti-power-off"></i><a href="index.php?action=logout&controller=Home">
							Log out</a></li>
						
							
					
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href=""><img src="view/home/images/logo.png" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                  
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        <div class="sinlge-bar">
                            <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="sinlge-bar">
                            <a href="" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="sinlge-bar shopping">
                            <a href="index.php?action=showpanier&controller=Panier" class="single-icon">
			<i class="ti-bag"></i> <span class="total-count"><?php if(isset($_SESSION['panier'])){
								echo (array_sum($_SESSION['panier']));}?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
											        <li><a href="#"><i class="fa fa-bars" aria-hidden="true"></i><i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
														    
															<li><a href="index.php?action=getAllNews&controller=New">New Arrivals</a></li>
															<li><a href="index.php?action=getAllSales&controller=Sale">sales</a></li>
														</ul>
													</li>	
													<li class="active"><a href="index.php">Home</a></li>
													
													<li><a href="#">women</a>
													   <ul class="dropdown">
														<li class="single-menu">
												           <a href="#" class="title-link">Shop Women's</a>
																<div class="image">
																	<img src="view/home/images/collection/femme/femme.png" alt="#">
																</div>
																<div class="inner-link">
																	<a href="index.php?action=getAlldress&&designation='Dress'&controller=ProdFemme">dress</a>
																	<a href="index.php?action=getAllskirt&&designation='skirt'&controller=ProdFemme">skirt</a>
																	<a href="index.php?action=getAllTshirt&&designation='T-shirt'&controller=ProdFemme">T-shirt</a>
																	<a href="index.php?action=getAllshirt&&designation='shirt'&controller=ProdFemme">shirt</a>
																	<a href="index.php?action=getAlljeans&&designation='jeans'&controller=ProdFemme">jeans</a>
																	
																</div>
														</li>
													   </ul >
													</li>	
													<li><a href="#">men</a>
													   <ul class="dropdown">
														<li class="single-menu">
												           <a href="#" class="title-link">Shop Men's</a>
																<div class="image">
																	<img src="view/home/images/collection/homme/homme1.png" alt="#">
																</div>
							<div class="inner-link">
		<a href="index.php?action=getAllCostume&&designation='costume'&controller=ProdHomme">suits</a>
		<a href="index.php?action=getAllshirt&&designation='T-shirt'&controller=ProdHomme">T-shirt</a>
	   <a href="index.php?action=getAlljeans&&designation='jeans'&controller=ProdHomme">jeans</a>
	   <a href="index.php?action=getAllpant&&designation='pantallon'&controller=ProdHomme">Formal Pant</a>
				</div>
														</li>
													   </ul >
													</li>			
													<li><a href="#">kids</a>
													   <ul class="dropdown">
														<li class="single-menu">
												           <a href="#" class="title-link">Shop Kid's</a>
												             <div class="image">
													           <img src="view/home/images/collection/kids/kid.png" alt="#">
												             </div>
	                                                       <div class="inner-link">
                    
			<a href="index.php?action=getAllgirls&&designation='girlbaby'&controller=ProdBabies">girls</a>
				<a href="index.php?action=getAllboys&&designation='boybaby'&controller=ProdBabies">boys</a>
										
									
												         	
			                                            </div>
														 </ul >
													</li>												
													<li><a href="#">accessories</a>
														<ul class="dropdown">
						<li><a href="index.php?action=getAllbags&&designation='bags'&controller=Accesoires">bags</a></li>
						<li><a href="index.php?action=getAllShoes&&designation='shoes'&controller=Accesoires">shoes</a></li>
														</ul>
													</li>								
													<li></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
    <!--/ End Header Inner -->
</header>
<script src="view/home/js/jquery.min.js"></script>
    <script src="view/home/js/jquery-migrate-3.0.0.js"></script>
	<script src="view/home/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="view/home/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="view/home/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="view/home/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="view/home/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="view/home/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="view/home/js/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="view/home/js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="view/home/js/waypoints.min.js"></script>
	<!-- Jquery Counterup JS -->
	<script src="view/home/js/jquery-counterup.min.js"></script>
	<!-- Countdown JS -->
	<script src="view/home/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="view/home/js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="view/home/js/ytplayer.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="view/home/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="view/home/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="view/home/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="view/home/js/easing.js"></script>
	<!-- Google Map JS -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>	
	<script src="view/home/js/gmap.min.js"></script>
	<script src="view/home/js/map-script.js"></script>
	<!-- Active JS -->
	<script src="jview/home/s/active.js"></script>

