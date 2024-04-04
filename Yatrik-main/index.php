<?php
	session_start();
	$loggedIn = isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true;

	if (isset($_POST['loginn'])) {
		$storedUsername = 'admin@gmail.com';
		$storedPassword = '123';

		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username === $storedUsername && $password === $storedPassword) {
			$_SESSION['loggedIn'] = true;
			$loggedIn = true;
			header('Location: index.php');

		} else {
			$_SESSION['loggedIn'] = false;
			$loggedIn = false;
			header('Location: index.php');
			// sleep(2);
			echo "<script> alert('Invalid credentials. Please try again.');</script>";
			// echo '';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Yatrik.com</title>
	<!-- CSS only -->
	<?php require('inc/links.php'); ?>
	<link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

	<link rel="icon" type="image/x-icon" href="images/top.ico">

<style type="text/css">
	.body{
		background-color: #ffff;
    scroll-behavior: smooth;
	}
	
	.availability-form{
		margin-top: -50px;
		z-index: 2;
		position: relative;
	}

	@media screen and (max-width: 575px) {
	.availability-form{
		margin-top: 25px;
		padding: 0 35px;
	}

	}
	.swiper{
		border-radius: 15px;
		box-shadow: 5px 5px 12px lightblue;
	}
	.container
	.card{
		
		box-shadow: 5px 5px 20px lightblue;
	}
	::-webkit-scrollbar {
        display: none;
    }







	@import url("https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap");

	* {
	margin: 0%;
	padding: 0%;
	box-sizing: border-box;
	font-family: "Spartan", sans-serif;

	}


	.section-p1 {
	padding: 40px 80px;
	}

	#product1 {
	text-align: center;
	}

	#product1 .pro-container {
	display:flex;
	justify-content: space-between;
	flex-wrap: wrap;
	padding-top: 20px;
	}

	#product1 .pro {
	width: 13%;
	min-width: 210px;
	padding: 15px 6px;
	border: 1px solid #cce7d0;
	border-radius: 25px;
	cursor: pointer;
	/* box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.03); */
	box-shadow: 5px 5px 15px lightblue;
	margin: 5px 0;
	transition: all 0.3s ease-in-out;
	position: relative;
	}

	#product1 .pro:hover {
	box-shadow: 5px 5px 54px rgba(0, 0, 0, 0.096);
	}

	#product1 .pro img {
	width: 100%;
	border-radius: 20px;
	}

	#product1 .pro .des {
	text-align: start;
	padding: 10px 0;
	}

	#product1 .pro .des span {
	color: #606063;
	font-size: 12px;
	}

	#product1 .pro .des h5 {
	padding-top: 7px;
	color: #1a1a1a;
	align-items: top;
	font-size: 20px;
	}

	#product1 .pro .des i {
	font-size: 12px;
	color: #ebdf09;
	}

	#product1 .pro .des h4 {
	padding-top: 7px;
	font-size: 15px;
	font-weight: 700;
	color: #088178;
	}


	a.normal {
	font-size: 12px;
	font-weight: 600;
	padding: 9px 15px;
	background-color: rgb(255, 208, 141);
	border-radius: 10px;
	border: none;
	text-decoration: none;
	color: #fff;
	outline: none;
	cursor: pointer;
	transition: 0.2s;
	}

	#border{
		border-radius: 20px;
		box-shadow: 5px 5px 15px lightblue;
	}


	/* another--------------------------------------------------------------------------------- */
		
	.container__ {
  position: relative;
}

.image__ {
  display: block;
  width: 100%;
  height: auto;
}

.overlay__ {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
    scroll-behavior: smooth;
  background-color: #9e9e9e7e;
}

.container__:hover .overlay__ {
  opacity: 1;
    scroll-behavior: smooth;
}

.text__ {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 20%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: start;
}

  /* Preloader round---------------------------------------------------- */
  .preloader{
	 background:#000;
	 background-size:10%;
	 height:100%;
	 width:100%;
	 display:flex;
	 align-items:center;
	 justify-content:center;
	 position:fixed;
	 z-index:100;
	 transition:opacity 0.95s, visibility 0.95s;
 }
 .preloader::after{
	 content:"";
	 width:50px;
	 height:50px;
	 border:5px solid #fff;
	 border-top-color:var(--pink);
	 border-radius:50%;
	 animation: loading 0.95s ease infinite;
 }
 .preloader--hidden{
	opacity:0;
	visibility:hidden;
}
 
@keyframes loading{
	from{transform:rotate(0turn)}
	to{transform:rotate(1turn)}
}


/* ---------------------------------------anas-------------------------------------------- */

        /* -----Fonts------- */
/* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

 */
:root{
    --primary: #ffc400;
    --text-1: #0f2341;
    --text-2: #a9a9a9;
    --white: #fff;
    --shadow-300: 0 5px 5px rgba(0, 0, 0, 0.3);
    --shadow-500: 0 5px 5px rgba(0, 0, 0, 0.5);
    --transition-300: all 300ms ease-in-out;
    --transition-500: all 500ms ease-in-out;
}

*,*::after,*::before{
    margin: 0;
    padding: 0;
    box-sizing: inherit;
}

html{
    /* font-size: 62.5%; */
    box-sizing: border-box;
    scroll-behavior: smooth;
}
body{
    /* font-family: 'Poppins', sans-serif;
    font-size: 1.6rem;
    font-weight: 400;
    background-color: var(--white); */
}


* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
}

.containers__ {
    max-width: 1170px;
    margin: 0 auto;
    padding-left: 15px;
    padding-right: 15px;

}

.img{
    width: 100%;
    height: 70%;
}

.containers__{
    max-width: 114rem;
    margin: 0 auto;
	height: 10%;
	width: 70%;
	font-size: 20px;
}

.section__{
    margin: 5rem 0;
	border-radius: 10px;
	box-shadow: 5px 5px 25px lightblue;
    /* padding: 10rem 0 5rem; */
	padding: 2rem;
	width: 90%;
	/* height: 40%; */
    overflow: hidden;
}

.titel__{
    margin-bottom: 2rem;
}

.titel__ h1{
    font-size: 4rem;
}

@media (max-width: 1200px){
    .containers__{
        padding: 0 3rem;
    }
}

@media (max-width: 567px){
   .header .content{
    width: 100%;
   }

   .header .content h1{
    font-size: 4rem;
   }
}
.bttns__{
    display: inline-block;
    color: var(--white);
    font-size: 1rem;
	/* width: 50%; */
	margin-top: -100px;
    font-weight: 200;
    background-color: var(--primary);
    padding: 1rem 2rem;
	border-radius: 15px;
    transition: var(--transition-300);
}

.bttns__:hover{
    border-color: var(--primary);
    box-shadow: var(--shadow-300);
	color: #fff;
    transform: translateY(-3px);
}

.bttns__:active{
    transform: translateY(0);
}

.cols__ .titel__ h1{
    color: #343a40;
	font-size: 30px;
}

.cols__ .titel__ p{
    color: #777;  
}

.service .row__{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 5rem;
}

.service .cols__ p{
    margin-bottom: 3rem;
}

.service .d-flex{
    justify-content: space-between;
    margin-bottom: 3rem;
}

.service .cols__ .rating span {
    color: var(--primary);
}

.row__ .img{
    float: left;
    border-radius: 5px;
    box-shadow: var(--shadow-300);
    object-fit: cover;
}

.row__ .img:hover{
    border-color: var(--primary);
    box-shadow: var(--shadow-500);
    transform: translateY(-3px);
}

.row__ .img:active{
    transform: translateY(0);
}

@media(max-width: 768px){
    .service .row__{
        grid-template-columns: 1fr;
    }
}

/* -----Page-4------- */

.more__ .titel__ {
    margin-bottom: 5rem;
}

.more__ .titel__ p{
    margin-bottom: 2rem;
}

.more__ .row__{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 5rem;
}

.more__ .row__ .tours__ {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
    margin-bottom: 9rem;
}

.more__ .cols__ .bttns__{
    display: block;
    text-align: center;
}

.more__ .tours__ h3{
    margin-top: 3rem;
	font-size: 15px;
}
.more__ .tours__ h4{
	margin-top: -0.2rem;
	font-size: 15px;
}

.more__ .img{
    object-fit: cover;
}

@media (max-width: 768px){
    .more__ .row__{
        grid-template-columns: 1fr;
    }
}
</style>
</head>
<body class="body">

<!-- preloading screen section -->
<div class=preloader></div>
<?php
	$loggedIn = isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn'] === false;
	if (!$loggedIn) {
		$_SESSION['loggedIn'] = false;
		$loggedIn = false;
	}
?>
<?php require('inc/header.php'); ?>
<?php require('inc/enquiry_btn.php'); ?>

<div style="width:100%;height:100%;">

	<?php require('inc/parallex.php'); ?>
</div>
<!-- <hr> -->
<br><br>

 <!-- check avilability form-->
 <div class="container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white p-4 rounded"  id="border">
 			<h5 class="col-lg-3">Plan Your Journey</h5>
 			<form>
 				<div class="row align-items-end">
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">From</label>
 						<!-- <input type="date" class="form-control shadow-none"> -->
						 <select class="form-select shadow-none">
  						<option value="1">Delhi</option>
  						<option value="2">Mumbai</option>
  						<option value="3">Banglore</option>
  						<option value="1">Rajsthan</option>
  						<option value="2">Karnataka</option>
  						<option value="3">Indore</option>
						</select>
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">To</label>
 						<!-- <input type="date" class="form-control shadow-none"> --><select class="form-select shadow-none">
  						<option value="1">Delhi</option>
  						<option value="2">Mumbai</option>
  						<option value="3">Banglore</option>
  						<option value="1">Rajsthan</option>
  						<option value="2">Karnataka</option>
  						<option value="3">Indore</option>
						</select>
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Departure</label>
 						<!-- <select class="form-select shadow-none"> -->
						 <input type="date" class="form-control shadow-none">
  					
 					</div>
 					<div class="col-lg-2 mb-3">
 						<label class="form-label" style="font-weight: 500;">Travelling Class</label>
 						<select class="form-select shadow-none">
  						<option value="1">One</option>
  						<option value="2">Two</option>
  						<option value="3">Three</option>
						</select>
 					</div>
 					<div class="col-lg-1 mb-lg-3 mt-2">
 						<button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
 					</div>

 				</div>
 			</form>
 		</div>
 	</div>
 </div>
 
 <!-- Stories -->
 <section id="product1" class="section-p1">
        <h2>Top Stories</h2>
        <p>Most visited Places</p>
        <div class="pro-container">
            <div class="pro" id="first">
                <img src="./images/europe.jpeg" alt="">
                <div class="des">
                    <h5>Europe</h5>
                    <span>already travelled</span>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>    
                    </div>
                    <h4>62 tours</h4>
                </div>
                <a href="places.php" class="normal">See more</a>
            </div>
            <div class="pro" id="second">
                <img src="./images/JK.jpg" alt="">
                <div class="des">
					<h5>Jammu and Kashmir</h5>
                    <span>already travelled</span>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>

                    </div>
                    <h4>13 tours</h4>
                </div>
                <a href="places.php" class="normal">See more</a>
            </div>
            <div class="pro">
                <img src="./images/ladaakh.jpeg" alt="">
                <div class="des">
					<h5>Leh Ladakh</h5>
                    <span>already travelled</span>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <i class="fa-regular fa-star"></i>

                    </div>
                    <h4>10 tours</h4>
                </div>
                <a href="places.php" class="normal">See more</a>
            </div>
            <div class="pro">
                <img src="./images/sikkim.jpg" alt="">
                <div class="des">
					<h5>Sikkim Darjeeling</h5>
                    <span>already travelled</span>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>
                    <h4>4 tours</h4>
                </div>
                <a href="places.php" class="normal">See more</a>
            </div>
            <div class="pro">
                <img src="./images/HP.jpg" alt="">
                <div class="des">
					<h5>Himachal Pradesh</h5>
                    <span>already travelled</span>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>
                    <h4>11 tours</h4>
                </div>
                <a href="places.php" class="normal">See more</a>
            </div>
            <div class="pro">
                <img src="./images/kerala_.jpg" alt="">
                <div class="des">
					<h5>Kerala</h5>
                    <span>already travelled</span>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>
                    <h4>6 tours</h4>
                </div>
                <a href="places.php" class="normal">See more</a>
            </div>
        </div>
    </section>

		<!-- offers -->
		<br><br>
		<center>
		<h2>Top Offers</h2>
        <p>Most Liked..</p>
		</center>
		<?php require('inc/offer.php'); ?>

 <!-- Our Rooms -->
 <!-- <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Hotels</h2>
 <div class="container">
 	<div class="row">

 		<div class="col-lg-4 col-md-6 my-3" >
 			<div class="card border-0" id="border"style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Simple Room Name</h5>
			    <h6 class="mb-4">$2000 per night </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Rooms
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Bathroom
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Balcony
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		3 Sofa
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Television
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		AC
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Room Heater
    				</span>
    			</div>

    			<div class="guests mb-4">
			    	<h6 class="mb-1">Guests</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		5 Adults
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		4 Children
    				</span>
    			</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3" >
 			<div class="card border-0 "  id="border"style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Simple Room Name</h5>
			    <h6 class="mb-4">$1500 per night </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Rooms
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Bathroom
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Balcony
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		3 Sofa
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Television
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		AC
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Room Heater
    				</span>
    				<div class="guests mb-4">
			    	<h6 class="mb-1">Guests</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		5 Adults
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		4 Children
    				</span>
    				
    				</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			    </div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3" >
 			<div class="card border-0 " id="border"style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Simple Room Name</h5>
			    <h6 class="mb-4">$2500 per night </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Rooms
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Bathroom
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Balcony
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		3 Sofa
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Television
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		AC
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Room Heater
    				</span>

    				<div class="guests mb-4">
			    	<h6 class="mb-1">Guests</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		5 Adults
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		4 Children
    				</span>
    				</div>
    					
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			    </div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-12 text-center mt-5">
 			<a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
 		</div>
 	</div>	
 </div> -->
<center>
	<section class="section__ more__" id = "package">
        <div class="row__ containers__">
            <div class="cols__">
                <div class="titel__">
                    <h1>More Places for <br> Your Next Travel</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nam totam sunt at perspiciatis
                        eius pariatur repudiandae molestias sint. Eveniet.</p>
                </div>
                <div class="tours__">
                    <div class="box">
                        <img src="images/Leh-ladakh.jpg" alt="" class="img"><br><br>
                        <h3>Visit to Leh Ladakh</h3>
                        <h4>$6000</h4>
                    </div>
                    <div class="box">
                        <img src="images/kashmir4.jpg" alt=""class="img">
                        <h3>Visit to Leh Kashmir</h3>
                        <h4>$8000</h4>
                    </div>
                </div>
                <a href="places.php" class="bttns__">Explore More Tours Now!!</a>
            </div>
            <div class="cols__">
                <img src="images/kashmir1.jpg" alt="" class="img">
            </div>
        </div>
    </section>
</center>

 <br>
<br>
 <!-- Our Facilities-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

 <div class="container">
 	<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded py-4 my-3"id="border">
 			<img src="images/Facilities/guide.webp" width="80px">
 			<h5 class="mt-3">Best Toure guide</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded py-4 my-3"id="border">
 			<img src="images/Facilities/journey.png" width="80px">
 			<h5 class="mt-3">Best Journey</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded py-4 my-3"id="border">
 			<img src="images/Facilities/service.png" width="80px">
			<br>
			<br>
 			<h5 class="mt-3">24/7 support</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded py-4 my-3"id="border">
 			<img src="images/Facilities/response.png" width="80px">
 			<h5 class="mt-3">Quick responce</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded py-4 my-3"id="border">
 			<img src="images/Facilities/quality.png" width="80px">
 			<h5 class="mt-3">Quality Services</h5>
 		</div>
 		<div class="col-lg-12 text-center mt-5">
 			<a href="facilities.php" class="btn btn-sm btn-outline-dark rounded rounded-0 fw-bold shadow-none">More Facilities >>></a>
 		</div>
 	</div>
 </div>
<br>
<br>
<br>
<!-- Testimonials -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

 <div class="container mt-5">
 	<!-- Swiper -->
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
          	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          	consequat. 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Random user2</h6>
          </div>
          <p>
          	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          	consequat. 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
		<div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Random user3</h6>
          </div>
          <p>
          	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          	consequat. 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Random user4</h6>
          </div>
          <p>
          	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          	consequat. 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

		<div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Random user5</h6>
          </div>
          <p>
          	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          	consequat. 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
 </div>

 <!-- contact us-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Get in Touch</h2>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">

		 <!-- google map -->
		 <div class="mapouter card">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=sahyog college of it and mgnt&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <a href="https://capcuttemplate.org/">Capcut Template</a>
            </div>
            <style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style>
        </div>

		</div>
 		<div class="col-lg-4 col-md-4 ">
 			<div class="bg-white p-4 rounded">
 				<h5>Call us</h5>
 				<a href="tel: +9146090984" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 9146090984</a>
 				<br>
 				<a href="tel: +9146090984" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 9146090984</a>
 			</div>	
 			<div class="bg-white p-4 rounded">
 				<h5>Follow us</h5>
 				<a href="#" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-twitter me-1"></i>Twitter
 					</span>
 				</a>
 				<br>
 				<a href="#" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-facebook me-1"></i>Facebook
 					</span>
 				</a>
 				<br>
 				<a href="#" class="d-inline-block">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-instagram me-1"></i>Instagram
 					</span>
 				</a>
 			</div>
 		</div>
 	</div>
 </div>
 <br>
<hr>
 <?php require('inc/footer.php') ?>

 <!--....................preloader........................-->

<script>

<!--window.addEventListener("load", () => {document.querySelector(".preloader").classList.add("preloader--hidden");})-->
 window.addEventListener("load", ()=>{
 const loader =document.querySelector(".preloader");
 loader.classList.add("preloader--hidden");
 loader.addEventListener("transitionend",()=>{
 document.body.removeChild(loader);
 })
 })
</script>


 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
        	delay: 3500,
        	disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
        	320: {
        		slidesPerView: 1,
        	},
        	640: {
        		slidesPerView: 1,
        	},
        	768: {
        		slidesPerView: 2,
        	},
        	1024: {
        		slidesPerView: 3,
        	},
        }
      });
    </script>


 
<!-- scroll reveal---------------------------------------------------------------------------- -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
    <script>
        const scroll = ScrollReveal({
            distance: "100px",
            duration: 1500,
            reset: true,
        });

        scroll.reveal(` .containers__, `,{
            origin: 'top',
            interval: 100,
        });

        scroll.reveal('.row__ img,a',{
            origin: "left",
            interval: 150,
        });

        scroll.reveal('.cols__ .titel__, .d-flex, h2, .rating, .d-flex, h3, .bttns__',{
            origin: "right",
            interval: 150,
        });

    </script> -->
</body>
</html>