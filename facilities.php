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
	<link rel="icon" type="image/x-icon" href="images/top.ico">

	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
  .pop:hover{
    border-top-color: var(--teal) !important;
    transform: scale(1.03);
    transition: all 0.3s;
  }
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
  <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat.
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/guide.webp" width="40px">
          <h5 class="m-0 ms-3">Best Toure guide</h5>
        </div>  
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/journey.png" width="40px">
          <h5 class="m-0 ms-3">Best Journey</h5>
        </div>  
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/service.png" width="40px">
          <h5 class="m-0 ms-3">24/7 support</h5>
        </div>  
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/response.png" width="40px">
          <h5 class="m-0 ms-3">Quick responce</h5>
        </div>  
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/quality.png" width="40px">
          <h5 class="m-0 ms-3">Quality Services</h5>
        </div>  
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/assured.jpg" width="40px">
          <h5 class="m-0 ms-3">Assured Tickets</h5>
        </div>  
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua.
          </p> 
      </div>
    </div>
  </div>
</div>
<br>
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
</body>
</html>