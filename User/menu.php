<?php
include("includes/config.php");

$config = new Config();
$db = $config->getConnection();



include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAlluser();
$stmt4 = $pro1->readAllmt();
$stmt3 = $pro1->readAllmb();
$stmt6 = $pro1->readAllsc();
$stmt7 = $pro1->readAllnc();
$stmt8 = $pro1->readAllteh();

include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();

include_once 'includes/bobot.inc.php';
$pro5 = new Bobot($db);
$stmt5 = $pro5->readAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Segmen Coffee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Segmen<small>Coffee</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
<!--
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.html">Shop</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="room.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li>
-->
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
<!--	          <li class="nav-item cart"><a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>-->
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>+62 812-9386-3511</h3>
	    						<p>In coffee we trust.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Jl. Sadar Raya No.65,</h3>
	    						<p>RT.1/RW.2, Ciganjur, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Sunday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="book p-4">
	    			<h3>Book a Table</h3>
	    			<form action="insert_reservation.php" class="appointment-form" method="POST">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name" name="fname">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name" name="lname">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<input type="date" class="form-control" placeholder="Date" name="tanggal">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control" placeholder="Time" name="waktu">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone" name="telepon">
		    				</div>
                		<div class="form-group ml-md-4">
                  		<input type="hidden" class="form-control"  name="status" value="Aktif">
                		</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="keterangan" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <button class="btn btn-white py-3 px-4" name="booking" type="submit">Appointment</button>
		            </div>
	    				</div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
        <div class="row">
<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Manual Brew</h3>
						</div>
						<div class="panel-body">
							<ol>
								<?php while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) : ?>
									<li><h5><span><?php echo $row3['nama'] ?> - Rp.<?php echo $row3['Harga'] ?></span></h5></li>
								<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Speciality Coffee</h3>
						</div>
						<div class="panel-body">
							<ol>
								<?php while ($row2 = $stmt6->fetch(PDO::FETCH_ASSOC)) : ?>
									<li><h5><span><?php echo $row2['nama'] ?> - Rp.<?php echo $row2['Harga'] ?></span></h5></li>
								<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Non-Coffee</h3>
						</div>
						<div class="panel-body">
							<ol>
								<?php while ($row5 = $stmt7->fetch(PDO::FETCH_ASSOC)) : ?>
									<li><h5><span><?php echo $row5['nama'] ?> - Rp.<?php echo $row5['Harga'] ?></span></h5></li>
								<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<br>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Teh</h3>
						</div>
						<div class="panel-body">
							<ol>
								<?php while ($row6 = $stmt8->fetch(PDO::FETCH_ASSOC)) : ?>
									<li><h5><span><?php echo $row6['nama'] ?> - Rp.<?php echo $row6['Harga'] ?></span></h5></li>
								<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<br>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Menu Best Seller</h3>
						</div>
						<div class="panel-body">
							<ol>
							<?php while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) : ?>
								<li><h5><span><?php echo $row4['nama'] ?> - Rp.<?php echo $row4['Harga'] ?></span></h5></li>
							<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
				<br>
        		<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Signature Coffee</h3>
						</div>
						<div class="panel-body">
							<ol>
							<?php while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) :?>
								<li><h5><span><?php echo $row1['nama'] ?> - Rp.<?php echo $row1['Harga'] ?></span></h5></li>
							<?php endwhile; ?>
							</ol>
						</div>
					</div>
				</div>
        </div>
    	</div>
    </section>

    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Bad day with coffee is better than a good day without it.</p>
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Coffee</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Tea</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Others</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dish1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Kopi Oreo Segmen</a></h3>
		              					<p>Perpaduan dari Espresso, Susu, dan Oreo yang dikocok secara bersamaan membuat rasanya lebih cruncy.</p>
		              					<p class="price"><span>Rp. 20.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dish2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Kopi Susu Segmen With Regal</a></h3>
		              					<p>Kopi susu segmen yang di berikan topping Regal membuat rasanya menjadi lebih mantap dan legit.</p>
		              					<p class="price"><span>Rp. 20.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dish3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Kopi Susu Original</a></h3>
		              					<p>Kopi Susu yang di diberikan sedikit pemanis cair yang memanjakan lidah. Cocok untuk di nikmati di siang yang terik.</p>
		              					<p class="price"><span>Rp. 18.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dish4.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Kopi Susu Segmen</a></h3>
		              					<p>Kopi Susu andalan Kopi Segmen, merupakan campuran kopi susu krimmer dan gula aren yang berfungsi untuk meminimalisir diabetes.</p>
		              					<p class="price"><span>Rp. 20.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dish5.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Kopi Hitam Segmen</a></h3>
		              					<p>Kopi Hitam Segmen merupakan andalan kedai kopi segmen untuk menyediakan customer yang ingin merasakan kopi yang segar.</p>
		              					<p class="price"><span>Rp. 20.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dish6.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Kopi Susu Cokelat</a></h3>
		              					<p>Perpaduan dari kopi susu yang di campur dengan dark cokelat, memberikan efek creamy pada lidah penikmatnya.</p>
		              					<p class="price"><span>Rp. 22.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drinks1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Es Teh Manis</a></h3>
		              					<p>Cocok untuk di minum bersamaan dengan camilan yang ada di kopi segmen seperti keripik depas.</p>
		              					<p class="price"><span>Rp. 15.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Teh Tarik</a></h3>
		              					<p>Perpaduan teh dan susu kental yang di kocok dengan di Tarik-tarik untuk mencampur keduanya.</p>
		              					<p class="price"><span>Rp. 14.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink3.jpeg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Es Teh Susu</a></h3>
		              					<p>Campuran Teh dan susu segar serta sedikit pemanis cair untuk memberikan perasa yang cocok untuk lidah.</p>
		              					<p class="price"><span>Rp. 15.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink4.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lemon Tea</a></h3>
		              					<p>Es lemon tea sangat cocok untuk kamu yang sedang ingin the yang agak sedikit asam karena efek dari buah lemon yang terdapat di dalamnya.</p>
		              					<p class="price"><span>Rp. 12.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink5.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Teh Kayu Manis</a></h3>
		              					<p>Cocok untuk kamu yang sedang manjalni diet, dan juga memperlancar sirkulasi pencernaan.</p>
		              					<p class="price"><span>Rp. 15.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink6.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Peach Tea</a></h3>
		              					<p>Cocok untuk kamu yang ingin memanjakan lidah dengan rasa buah persik yang lembut dan manis.</p>
		              					<p class="price"><span>Rp. 16.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Matcha</a></h3>
		              					<p>Greentea yang memanjakan lidah kamu dengan rasa creamy, legit dan manis di lidah.</p>
		              					<p class="price"><span>Rp. 20.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Red Velvet</a></h3>
		              					<p>Sangat cocok untuk kamu yang ingin merasakan Ubi yang manis dan legit.</p>
		              					<p class="price"><span>Rp. 20.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert3.jpeg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Cokelat</a></h3>
		              					<p>Perpaduan dark cokelat dengan susu dan gula yang membuat rasa pahit yang syahduh.</p>
		              					<p class="price"><span>Rp. 20.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert4.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Vanilla Latte</a></h3>
		              					<p>Perpaduan Vanilla dengan Espresso dan Susu yang menggemaskan.</p>
		              					<p class="price"><span>Rp 22.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert5.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Peach Latte</a></h3>
		              					<p>Perpaduan Buah dan rasa peach pada Espresso yang di campur dengan susu.</p>
		              					<p class="price"><span>Rp. 22.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert6.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Caramel Latte</a></h3>
		              					<p>Campuran dari rasa caramel yang di padukan dengan Espresso dan Susu.</p>
		              					<p class="price"><span>Rp 22.000</span></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Kami adalah Kedai Kopi yang berdiri sejak 2019, Menggambarkan setiap segmen dari film memiliki cerita masing-masing dan memiliki rasa yang sangat variatif. Dengan harapan yang besar kami membuat kedai kopi ini dengan nama Kopi Segmen.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://api.whatsapp.com/send?phone=6281293863511"><span class="icon-whatsapp"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/kopisegmen-107651450734094/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/kopi.segmen/?hl=id"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">MENU BARU</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/dessert2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Red Velvet</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/dessert1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Matcha</a></h3>
                  <div class="meta">
					  <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Online Services</h2>
             <ul class="list-unstyled">
                <li><a href="https://gofood.co.id/bahasa/jakarta/restaurant/kopi-segmen-jagakarsa-a0105f6c-eeca-4184-8d89-cf8f98ac2e97" class="py-2 d-block">GoFood</a></li>
                <li><a href="https://food.grab.com/id/id/restaurant/kopi-segmen-ciganjur-delivery/6-CZDCLAXYTYV3CE" class="py-2 d-block">GrabFood</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=6281293863511" class="py-2 d-block">WhatsApp Order</a></li>
                <li><a href="https://www.instagram.com/kopi.segmen/" class="py-2 d-block">Instagram DM's</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Sadar Raya No.65, RT.1/RW.2, Ciganjur, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 812-9386-3511</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@segmencoffee.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kopi Segmen
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>