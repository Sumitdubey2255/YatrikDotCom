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
	<link rel="icon" type="image/x-icon" href="images/top.ico">

  
 <?php require('inc/links.php') ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Nunito:ital,wght@1,200&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<!-- <link rel="stylesheet" type="text/css" href="css/common.css"> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- <link rel="stylesheet" href="css/index.css">	 -->
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
<style>
    :root{
	--teal: #2ec1ac;
	--teal_hover:#279e8c;
}
*{
		font-family: 'Poppins', sans-serif;
	}
  ::-webkit-scrollbar {
        display: none;
    }
	.h-font{
		font-family: 'Merienda' cursive;
	}

	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}

	input[type=number] {
        appearance: none;
		-moz-appearance: textarea;
	}
	.custom-bg{
		background-color: var(--teal);
		border: 1px solid var(--teal);
	}
	.custom-bg:hover{
		background-color: var(--teal-hover);
		border-color: var(--teal-hover);
	}

	.h-line{
		width: 150px;
		margin: 0 auto;
		height: 1.7px;
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
.btn3{
  border-radius: 5px;
  width: 100px;
  height: 50px;
	 animation: 1s ;
}
.btn3:hover{
color: #000;
background-color: gray;
  width: 100px;
  height: 50px;
}
</style>

</head>
<body>
  
<!-- preloading screen section -->
<div class=preloader></div>

<!-- Start Header Area -->

<?php
	$loggedIn = isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn'] === false;
	if (!$loggedIn) {
		$_SESSION['loggedIn'] = false;
		$loggedIn = false;
	}
?>
<?php require('inc/header.php'); ?>

<!-- End Header Area -->	

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>

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
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        
        <!-- google map -->
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=sahyog college of it and mgnt&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <a href="https://capcuttemplate.org/">Capcut Template</a>
            </div>
            <style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style>
        </div>
        
        
        <h5>Address</h5>
        <a href="https://goo.gl/maps/jFdoRUnTvq314zJy6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> XYZ, Thane City, Maharashtra.
        </a>
        <h5 class="mt-4">Call us</h5>
        <a href="tel: +9146090984" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 9146090984</a>
        <br>
        <a href="tel: +9146090984" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 9146090984</a>
        <h5 class="mt-4">Email</h5>
        <a href="mailto: sd889506@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> sd889506@gmail.com</a>

        <h5 class="mt-4">Follow us</h5>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5">
          <i class="bi bi-instagram me-1"></i>
          
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <form  action="https://formsubmit.co/sd889506@gmail.com" method="POST">
          <h5>Send a message</h5>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Name</label>
            <input type="text" name="name" placeholder="Enter Your Name" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Email</label>
            <input type="email" name="email" placeholder="Enter Your Email" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Subject</label>
            <input type="text" name="subject" placeholder="Subject of message" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Message</label>
            <textarea class="form-control shadow-none" placeholder="Message Here!!" name="message" rows="5" style="resize: none;"></textarea>
          </div>
          <button type="submit" class="btn3 text-white custom-bg mt-3">Send</button>
        </form>
      </div>
    </div>
</div>
    
  </div>
</div>
<hr>

<?php require('inc/footer.php') ?>
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