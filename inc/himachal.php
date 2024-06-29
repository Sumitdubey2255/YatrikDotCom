<!DOCTYPE html>
<html lang="en">
<head>
    <title>Himachal Tour</title>
	<link rel="icon" type="image/x-icon" href="../images/top.ico">
	<!-- <title>Yatrik.com</title> -->
	<!-- CSS only -->
	<?php require('links.php'); ?>
	<link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        ::-webkit-scrollbar {
        display: none;
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

    </style>
</head>
<body id="top">
    
<!-- preloading screen section -->
<div class=preloader></div>

<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">
<img src="../images/yatrik_logo_black.png" alt="logo" height="40px" width="80px"> </a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link me-2" href="places.php">Places</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about2.php">About</a>
        </li>
        
      </ul>
      <div class="d-flex" role="search">
        <button type="submit" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel" id="login-link">Login	</button>
        <button type="submit" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel" id="login-link">Register	</button>
        <button type="submit" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="" id="logout-link" style="display: none;">LogOut	</button>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModel" id="login-form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form>
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-circle fs-3 me-2"></i> User Login
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
        	<div class="mb-3">
    			<label class="form-label">Email address</label>
    			<input type="email" class="form-control shadow-none" id="username">
  			  </div>
  			<div class="mb-4">
    			<label class="form-label">Password</label>
    			<input type="password" class="form-control shadow-none" id="password">
  			</div>
  			<div class="d-flex align-items-center justify-content-between mb-2">
  				<button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
  				<a href="JavaScript: void(0)" class="text-secondary text-decoration-none" >Forgot Password?</a>
  			</div>
      		</div>
      		<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        	<button type="button" class="btn btn-primary">Understood</button>
      		</div>
    	</form>
    </div>
  </div>
</div>

<div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form>
				<div class="modal-header">
				<h5 class="modal-title d-flex align-items-center">
				<i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
				</h5>
				<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc.) that will be required during check-in.
					</span>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control shadow-none">
							</div>
							<div class="col-md-6 p-0">
								<label class="form-label">Email</label>
								<input type="email" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Phone Number</label>
								<input type="number" class="form-control shadow-none">
							</div>
							<div class="col-md-6 p-0">
								<label class="form-label">Picture</label>
								<input type="file" class="form-control shadow-none">
							</div>
							<div class="col-md-12 p-0">
								<label class="form-label">Address</label>
								<textarea class="form-control shadow-none" rows="1"></textarea>
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Pin Code</label>
								<input type="number" class="form-control shadow-none">
							</div>
							<div class="col-md-6 p-0">
								<label class="form-label">Date of Birth</label>
								<input type="number" class="form-control shadow-none">
							</div>
							<div class="col-md-6 ps-0 mb-3">
								<label class="form-label">Password</label>
								<input type="passport" class="form-control shadow-none">
							</div>
							<div class="col-md-6 p-0">
								<label class="form-label">Confirm Password</label>
								<input type="passport" class="form-control shadow-none">
							</div>
							<div class="text-center my-1">
								<button type="submit" class="btn btn-dark shadow-none">Register</button>
							</div>
						</div>
					</div>
				</div>	
			</form>
		</div>
	</div>
</div>

<?php require('inc/enquiry_btn.php'); ?>

    <br><br>
    <!------------------------ readmore---------------->
    <section class="desc">
        <div class="box">
            <input type="checkbox" id="check">
            <img src="../images/himachal-pradesh.jpg" alt="">
            <h1>Himachal Pradesh Tour Packages</h1>
            <h3>The Himalayan land of pristine nature, encompasses the noble souls, just like its soil and snow, being the heaven’s true glow.
            </h3>
            <p>The region full of picturesque, popular, and yet offbeat places lie in this mystical land, full of flawless natural treasures. Bollywood’s personal favourite and a lively winter sports destination, it is the dearest choice of every travel enthusiast. The world of new experiences awaits you! Experience adventure with thrilling sports like horse riding, paragliding, mountain biking, zorbing at Solang Valley, and equally enchanting sightseeing experiences at Shimla and Rohtang Pass. Veena World understands the best of your interests and preferences.
            <div class="content">
                The land of divinity with the two most ancient temples in India, namely the Hidimba Devi Temple and Vashisht Kund Temple along with the residence of His Holiness Dalai Lama, Dharamshala are the star highlights of our Himachal tour packages. The northern part of India, a pure delight for the mountain and nature lovers, has inspired some of our well-assorted Himachal Pradesh tour packages. The ambience of Himachal Pradesh is welcoming just like the warm-hearted people of this state. The thrill of winter adventure lures every explorer’s adrenaline urge. The poetic feel of the destination is so romantic that we carefully hand-pick special Himachal tour package for couples. We use our passionate unrivalled knowledge to design your perfect Himalayan vacation!
            </div>
            <label for="check">Read More</label>
        </div>
    </section>
    <!------------------------ readmore end---------------->
<br><br><br>
     <!------------------- filter and sort  ---------------->
    <!--<section class="filter">
        <div class="wrapper">
            <h2>Price range</h2>
            <div class="buttons">
                <button class="button-value"
                onclick="filterPackage('all')">All</button>
                <button class="button-value"
                onclick="filterPackage('10,000 - 20,000')">10,000 - 20,000</button>
                <button class="button-value"
                onclick="filterPackage('20,000 - 50,000')">20,000 - 50,000</button>
                <button class="button-value"
                onclick="filterPackage('50,000 - 1,00,000')">50,000 - 1,00,000</button>
                <button class="button-value"
                onclick="filterPackage('Above 1,00,000')">Above 1,00,000</button>
            </div>
            <div id="packages"></div>
        </div>
    </section>-->



     <!------------------- packages  ---------------->

     <section class="tour-search"> 
        <div class="container">
            <form action="" class="tour-search-form">

                <div class="input-wrapper">
                    <label for="depart" id = "depart" class="input-label">Depart city*</label>
                    
                    <input type="text" name="depart" id="depart" required placeholder="Depart City"
                    class="input-field">
                </div>
    
                <div class="input-wrapper">
                    <label for="people" id = "People" class="input-label">Pax number*</label>
                    
                    <input type="text" name="people" id="people" required  placeholder="No. of people"
                    class="input-field">
                </div>
    
                <div class="input-wrapper">
                    <label for="chekin" class="input-label">Checkin Date*</label>
                    
                    <input type="date" name="checkin" id="checkin" required class="input-field">
                </div>
    
                <div class="input-wrapper">
                    <label for="chekout" class="input-label">Checkout Date*</label>
                    
                    <input type="date" name="checkout" id="checkout" required class="input-field">
                </div>
    
                <button type="submit" class="btn btn-secondary">Inquiry now</button>
    
            </form>
        </div>
     </section>

     <section class="package" id="package">
            <div class="container">
                <p class="section-subtitle">Popular Packages</p>
                <h2 class="h2 section-title">CHECKOUT OUR POPULAR PACKAGES</h2>
                <p class="h2 section-text"> Tours Include: <ion-icon name="business-outline"></ion-icon>  <ion-icon name="fast-food-outline"></ion-icon>  <ion-icon name="bus-outline"></ion-icon>   <ion-icon name="camera-outline"></ion-icon> <br/>
                Comfortable & convenient hotels cherry picked by our hotel management team. Eat to your heart's content Breakfast. Lunch. Dinner. Our itineraries include all rail, sea and road transport as part of the itinerary so you can enjoy tension free</p>

                <ul class="package-list">
                    <li>
                        <div class="package-card">
                            <figure class="card-banner">
                                <img src="../images/shimla.jpg" alt="Experience Great Holiday in Spain" loading="lazy">
                            </figure>

                            <div class="card-content">
                                <h3 class="h3 card-title">Experience Great Holiday in Shimla</h3>
                                <p class="card-text">
                                    The region full of picturesque, popular, and yet offbeat places lie in this mystical land, full of flawless natural treasures
                                </p>

                                <ul class="card-meta-list">
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="alarm-outline"></ion-icon>
                                            <p class="text">7D</p>
                                        </div>
                                    </li>
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="people-outline"></ion-icon>
                                            <p class="text">pax: 10</p>
                                        </div>
                                    </li>
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="location-outline"></ion-icon>
                                            <p class="text">Shimla</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-price">
                                <div class="wrapper">
                                    <p class="reviews">(25 reviews)</p>

                                    <div class="card-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </div>

                                <p class="price">
                                    ₹550
                                    <span>per person</span>
                                </p>

                                <a href="premium.html"  class="btn btn-secondary">Book Now</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="package-card">
                            <figure class="card-banner">
                                <img src="../images/manali.jpg" alt="Experience your Holiday in Shimla" loading="lazy">
                            </figure>

                            <div class="card-content">
                                <h3 class="h3 card-title">Experience your Holiday in Shimla</h3>
                                <p class="card-text">
                                    The region full of picturesque, popular, and yet offbeat places lie in this mystical land, full of flawless natural treasures
                                </p>

                                <ul class="card-meta-list">
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="alarm-outline"></ion-icon>
                                            <p class="text">13D</p>
                                        </div>
                                    </li>
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="people-outline"></ion-icon>
                                            <p class="text">pax: 8</p>
                                        </div>
                                    </li>
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="location-outline"></ion-icon>
                                            <p class="text">Manali</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-price">
                                <div class="wrapper">
                                    <p class="reviews">(29 reviews)</p>

                                    <div class="card-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </div>

                                <p class="price">
                                    ₹650
                                    <span>per person</span>
                                </p>

                                <a href="premium.html"  class="btn btn-secondary">Book Now</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="package-card">
                            <figure class="card-banner">
                                <img src="../images/chandratal.jpg" alt="Experience Great Holiday in Scotland" loading="lazy">
                            </figure>

                            <div class="card-content">
                                <h3 class="h3 card-title">Experience Great Vacation Chadratal</h3>
                                <p class="card-text">
                                    The region full of picturesque, popular, and yet offbeat places lie in this mystical land, full of flawless natural treasures
                                </p>

                                <ul class="card-meta-list">
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="alarm-outline"></ion-icon>
                                            <p class="text">9D</p>
                                        </div>
                                    </li>
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="people-outline"></ion-icon>
                                            <p class="text">pax: 6</p>
                                        </div>
                                    </li>
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="location-outline"></ion-icon>
                                            <p class="text">Chandratal</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-price">
                                <div class="wrapper">
                                    <p class="reviews">(30 reviews)</p>

                                    <div class="card-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </div>

                                <p class="price">
                                    ₹9,550
                                    <span>per person</span>
                                </p>

                                <a href="premium.html"  class="btn btn-secondary">Book Now</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="package-card">
                            <figure class="card-banner">
                                <img src="../images/shimla-manali.jpg" alt="Experience Great Holiday in shimla" loading="lazy">
                            </figure>

                            <div class="card-content">
                                <h3 class="h3 card-title">Experience Great Holiday in Shimla-Manali</h3>
                                <p class="card-text">
                                    The region full of picturesque, popular, and yet offbeat places lie in this mystical land, full of flawless natural treasures
                                </p>

                                <ul class="card-meta-list">
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="alarm-outline"></ion-icon>
                                            <p class="text">14D</p>
                                        </div>
                                    </li>
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="people-outline"></ion-icon>
                                            <p class="text">pax: 12</p>
                                        </div>
                                    </li>
                                    <li class="card-meta-item">
                                        <div class="meta-box">
                                            <ion-icon name="location-outline"></ion-icon>
                                            <p class="text">Shimla</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-price">
                                <div class="wrapper">
                                    <p class="reviews">(20 reviews)</p>

                                    <div class="card-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </div>

                                <p class="price">
                                    ₹9,750
                                    <span>per person</span>
                                </p>

                                <a href="premium.html"  class="btn btn-secondary">Book Now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
     </section>

     <a href="#top" class="go-top " data-go-top>
        <ion-icon name="arrow-up-outline"></ion-icon>
     </a>



     <br>
<hr>
 <?php require('inc/footer.php') ?>

    <!-- <script src="script.js"></script> -->
    <script>
        const goTopBtn = document.querySelector("[data-go-top]");
        window.addEventListener("scroll",function () {
            if(this.window.scrollY > 200){
                goTopBtn.classList.add("active");
            } else {
                goTopBtn.classList.remove("active")
            }
        });
    </script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

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

 <!-- Scroll Reveal-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
</body>

</html>