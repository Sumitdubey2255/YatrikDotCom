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
	<title>Yatrik</title>
	<link rel="icon" type="image/x-icon" href="images/top.ico">

	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
  *::-webkit-scrollbar{
    display: none;
  }
  .swiper{
    border-radius: 10px;
    box-shadow: 10px 10px 5px #333;
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
<body>

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

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Hotel Rooms</h2>

  <div class="h-line bg-dark"></div>
 
</div>
<!-- Swiper Carousal-->

<div class="container-fluid px-lg-4 mt-4">
 	 <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.png" class="w-100 d-block" />
        </div>
        
      </div>
      
    </div>
 </div>
<br>
<br>
 <!-- check avilability form-->
 <!-- <div class="container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 			<h5 class="col-lg-3">Plan Your Journey</h5>
 			<form>
 				<div class="row align-items-end">
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-in</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-in</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Adult</label>
 						<select class="form-select shadow-none">
  					
  						<option value="1">One</option>
  						<option value="2">Two</option>
  						<option value="3">Three</option>
						</select>
 					</div>
 					<div class="col-lg-2 mb-3">
 						<label class="form-label" style="font-weight: 500;">Children</label>
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
 </div> -->



<div class="container">
  <div class="row">
   <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">

     <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">FILTERS</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
        <label class="form-label">Check-in</label>
        <input type="date" class="form-control shadow-none mb-3">
        <label class="form-label">Check-in</label>
        <input type="date" class="form-control shadow-none">
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f1">Facility one</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f2">Facility two</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f3">Facility three</label>
        </div>
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">Adults</h5>
        <div class="d-flex">
          <div class="me-2">
          <label class="form-label">Adults</label>
          <input type="number" class="form-control shadow-none">
        </div>
        <div>
          <label class="form-label">Children</label>
          <input type="number" class="form-control shadow-none">
        </div>
        </div>
      </div>
    </div>
  </div>
</nav>
</div>

<div class="col-lg-9 col-md-12 px-4">
  <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/room2.jpeg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Economy Room</h5>
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
          <div class="Facilities mb-3">
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
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              0 Children
            </span>
          </div>  
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <h6 class="mb-4">₹1500 per night </h6>
      <a href="inc/payment.html" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
 </div>
 <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/1.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Common stay Room</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Rooms
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
          <div class="Facilities mb-3">
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
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Children
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₹2000 per night </h6>
      <a href="inc/payment.html" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/room3.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Deluxe  Room</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Sofa
            </span>
          </div>
          <div class="Facilities mb-3">
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
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              0 Children
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₹3000 per night </h6>
      <a href="inc/payment.html" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/room5.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Suit Room</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Sofa
            </span>
          </div>
          <div class="Facilities mb-3">
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
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              3 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Children
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₹2000 per night </h6>
      <a href="inc/payment.html" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="images/rooms/room4.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h5 class="mb-3">Best view</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Rooms
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              No Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Sofa
            </span>
          </div>
          <div class="Facilities mb-3">
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
          <div class="guests">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">  
              2 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Children
            </span>
          </div>  
    </div>
    <div class="col-md-2 text-center">
      <h6 class="mb-4">₹3000 per night </h6>
      <a href="inc/payment.html" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
</div>


  </div>
</div>

<hr>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

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
</body>
</html>