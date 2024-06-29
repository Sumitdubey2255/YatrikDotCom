
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
<html lang="en">
<head>
	<title>Yatrik.com</title>
	<!-- CSS only -->
	<link rel="icon" type="image/x-icon" href="images/top.ico">

	<?php require('inc/links.php'); ?>
	<link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;800&display=swap");


        *,
        *::before,
        *::after{
            /* margin:0;
            padding:0; */
            box-sizing: border-box;
            font-family: "Poppins";
          }

::-webkit-scrollbar {
        display: none;
    }


        .filter-nav {
          margin-top: 20px;
  text-align: center;
  margin-bottom: 10px;
  background-color: #fff;
  color: #000;
  
}

.filter-btn {
  display: inline-block;
  padding: 8px 16px;
  margin-right: 10px;
  background-color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 12px;
  cursor: pointer;
}

.filter-btn.active {
  background-color: #5098f7d8;
  color: #fff;
}

.image-gallery {
  display: flex;
  flex-wrap: wrap;
  border-radius: 15px;
  justify-content: center;
  padding: 50px;
  gap: 20px;
}

.image {
  width: 300px;
}

.image img {
  width: 100%;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* BEGIN CARD DESIGN */
.hero {
  display: inline-block;
  position: relative;
  width: 400px;
  min-width: 400px;
  height: 400px;
  border-radius: 30px;
  overflow:hidden;
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.3);
  margin: 30px;
}

.hero-profile-img {
  height: 70%;
}

.hero-description-bk {
  background-image: linear-gradient(0deg , #3ff5fb, #464cfc);
  border-radius: 30px;
  position: absolute;
  top: 55%;
  left: -5px;
  height: 65%;
  width: 108%;
  transform: skew(19deg, -15deg);
}

.hero-logo {
  height: 70px;
  width: 70px;
  border-radius: 20px;
  background-color: #fff;
  position: absolute;
  bottom: 30%;
  left: 30px;
  overflow:hidden;
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.7);
}

.hero-logo img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.hero-description {
  position: absolute;
  color: #fff;
  font-weight: 900;
  left: 150px;
  bottom: 20%;
}

.hero-btn {
  position: absolute;
  color: #fff;
  right: 30px;
  background-color:#f7f7f7;
  bottom: 10%;
  border-radius: 5px;
  padding: 5px 15px;
  border: 1px solid #fff;
}

.hero-btn a {
  color:#2268ff;
  font-weight: bold;
  font-size: 12px;
  text-decoration: none;
}

.hero-date {
  position: absolute;
  color: #fff;
  left: 30px;
  bottom: 5%;
}
.hero-date .h1{
  color: #ffffff;
  /* margin: 5%; */
  font-size: 20px;
  /* margin-bottom: -10%; */
}
p{
  text-align: center;
  font-size: smaller;
  width: 80%;
  margin-left: 18%;
}

/* END CARD DESIGN */
    
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

<?php require('inc/enquiry_btn.php'); ?>

    <div class="filter-nav">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="family">Family Trip</button> 
        <button class="filter-btn" data-filter="honeymoon">Honeymoon special</button> 
        <button class="filter-btn" data-filter="school">School Trip</button>
        <button class="filter-btn" data-filter="business">Business Trip</button>
        <button class="filter-btn" data-filter="solo">Solo Trip</button>
        <button class="filter-btn" data-filter="friend">Friend's Trip</button>
        <button class="filter-btn" data-filter="couple">Couple's Only</button>
        <button class="filter-btn" data-filter="road">Road Trip</button>
        <button class="filter-btn" data-filter="senior">Senior's Trip</button>
        <button class="filter-btn" data-filter="track">Tracks & Hikes</button>
        <button class="filter-btn" data-filter="women">Women's Trip</button>
    </div>
      <hr>
  <div class="image-gallery">
   
      <div class="first hero image friend">
        <img class="hero-profile-img" src="images/distribution/kerala_friend.jpeg" alt="women">
        <div class="hero-description-bk"></div>
        <div class="hero-logo">
          <img src="images/places/flight.png" alt="">
        </div>
        <div class="hero-description">
          <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
        </div>
        <div  class="hero-date">
          <h1 class="h1">Kerala</h1>
          <h6>Popular for beaches & Nightlife</h6>
        </div>
        <div class="hero-btn">
          <a href="inc/kerala.php">EXPLORE</a>
        </div>
      </div>

      <div class="first hero image family">
        <img class="hero-profile-img" src="images/distribution/rishikesh_family.jpg" alt="women">
        <div class="hero-description-bk"></div>
        <div class="hero-logo">
          <img src="images/places/flight.png" alt="">
        </div>
        <div class="hero-description">
          <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
                  </div>
        <div  class="hero-date">
          <h1 class="h1">Rishikesh</h1>
          <h6>Popular Religious places</h6>
        </div>
        <div class="hero-btn">
          <a href="#">EXPLORE</a>
        </div>
      </div>

      <div class="first hero image honeymoon">
        <img class="hero-profile-img" src="images/distribution/ladakh_honeymoon.jpg" alt="women">
        <div class="hero-description-bk"></div>
        <div class="hero-logo">
          <img src="images/places/flight.png" alt="">
        </div>
        <div class="hero-description">
          <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
        </div>
        <div  class="hero-date">
          <h1 class="h1">Leh Ladakh</h1>
          <h6>Popular for road trips</h6>
        </div>
        <div class="hero-btn">
          <a href="#">EXPLORE</a>
        </div>
      </div>

      <div class="first hero image business">
        <img class="hero-profile-img" src="images/distribution/europe_business.jpeg" alt="women">
        <div class="hero-description-bk"></div>
        <div class="hero-logo">
          <img src="images/places/flight.png" alt="">
        </div>
        <div class="hero-description">
          <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
        </div>
        <div  class="hero-date">
          <h1 class="h1">Europe</h1>
          <h6>Popular for Tourist places</h6>
        </div>
        <div class="hero-btn">
          <a href="inc/europe.php">EXPLORE</a>
        </div>
      </div>
 
    <div class="first hero image women">
      <img class="hero-profile-img" src="images/distribution/kerala_women.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Kerala Trip</h1>
        <h6>Popular for beaches & Nightlife</h6>
      </div>
      <div class="hero-btn">
        <a href="inc/kerala.php">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image couple">
      <img class="hero-profile-img" src="images/distribution/nepal_couple.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Nepal tours</h1>
        <h6>Popular for peaceful expereince</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image track">
      <img class="hero-profile-img" src="images/distribution/darjiling_track.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Darjiling Trek</h1>
        <h6>Popular for mountains and hills</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image solo">
      <img class="hero-profile-img" src="images/distribution/andman_solo.jpeg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Andman Tour</h1>
        <h6>Popular for beaches & Nightlife</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image family">
      <img class="hero-profile-img" src="images/distribution/dubai_family.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Dubai</h1>
        <h6>Popular for Cities & Nightlife</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image friend">
      <img class="hero-profile-img" src="images/distribution/manali_friend.jpeg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Manali Trip</h1>
        <h6>Popular for cold weather</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image senior">
      <img class="hero-profile-img" src="images/distribution/rajasthan_senior.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Rajasthan</h1>
        <h6>Popular for Desert  </h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image couple">
      <img class="hero-profile-img" src="images/distribution/jaipur_couple.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Jaipur</h1>
        <h6>Popular for historic places</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image honeymoon">
      <img class="hero-profile-img" src="images/distribution/thailand_honeymoon.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Thailand tour</h1>
        <h6>Popular for beaches & Nightlight</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image track">
      <img class="hero-profile-img" src="images/distribution/pebFort_track.jpeg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Matheran PebFort</h1>
        <h6>Popular for Hiking and Heritage</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image couple">
      <img class="hero-profile-img" src="images/distribution/dubai_couple.webp" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Dubai couple special</h1>
        <h6>Popular for beaches & Nightlife</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image track">
      <img class="hero-profile-img" src="images/distribution/kasubai_peak_track.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">KalsuBai Peak </h1>
        <h6>Popular for Trekking </h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image senior">
      <img class="hero-profile-img" src="images/distribution/Kerala_senior.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Kerala</h1>
        <h6>Popular for beaches & Nightlife</h6>
      </div>
      <div class="hero-btn">
        <a href="inc/kerala.php">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image honeymoon">
      <img class="hero-profile-img" src="images/distribution/kashmir_honeymoon.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Jammu & Kashmir </h1>
        <h6>Popular for cold weather</h6>
      </div>
      <div class="hero-btn">
        <a href="inc/jammu.php">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image women">
      <img class="hero-profile-img" src="images/distribution/rajasthan_women.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Rajasthan</h1>
        <h5 style="margin-bottom: -5px;">Popular for Deserts and <br>heritage sites</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image school">
      <img class="hero-profile-img" src="images/distribution/imagica_school.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Imagica</h1>
        <h6>Water park and Resort</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image senior">
      <img class="hero-profile-img" src="images/distribution/AYODHYA_senior.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Ayodhya</h1>
        <h6>Popular for Religious places</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image business">
      <img class="hero-profile-img" src="images/distribution/australia_business.webp" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Australia</h1>
        <h6>Popular for beaches & Nightlight</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image honeymoon">
      <img class="hero-profile-img" src="images/distribution/kashmir_special_honymoon.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Kashmir Special</h1>
        <h6>Popular for Cold weather</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image solo">
      <img class="hero-profile-img" src="images/distribution/nepal_solo.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Nepal solo trip</h1>
        <h6>Popular for peaceful expereince</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image solo">
      <img class="hero-profile-img" src="images/distribution/jaipur_solo.jpeg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Jaipur</h1>
        <h6>Popular for pink city</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image track">
      <img class="hero-profile-img" src="images/distribution/harihar_fort_track.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Harihar Fort</h1>
        <h6>Popular for trekking</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image school">
      <img class="hero-profile-img" src="images/distribution/water-kingdom_school.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Water Kingdom</h1>
        <h6>Popular for Water park</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image business">
      <img class="hero-profile-img" src="images/distribution/russia_business.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Russia Tour</h1>
        <h6>Popular for Foreign expereincet</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image couple">
      <img class="hero-profile-img" src="images/distribution/agra_couple.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Agra</h1>
        <h6>Popular for Taj Mahal</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image senior">
      <img class="hero-profile-img" src="images/distribution/kathmandu_senior.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Kathmandu</h1>
        <h6>Popular for Heritage Sites</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image road">
      <img class="hero-profile-img" src="images/distribution/kerala_road.webp" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Kerala</h1>
        <h6>Popular for beaches & Nightlife</h6>
      </div>
      <div class="hero-btn">
        <a href="inc/kerala.php">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image honeymoon">
      <img class="hero-profile-img" src="images/distribution/manali_honeymoon.jpeg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Manali</h1>
        <h5 style="margin-bottom: -10px;">Honeymoon special,Popular for <br>Nightlife.</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
      </div>
    </div>

    <div class="first hero image school">
      <img class="hero-profile-img" src="images/distribution/Aqua_imagica_school.jpg" alt="women">
      <div class="hero-description-bk"></div>
      <div class="hero-logo">
        <img src="images/places/flight.png" alt="">
      </div>
      <div class="hero-description">
        <!-- <p>Get ready for an amazing beach vacation at Goa. You can expect very hot weather with very high humidity levels. You can also enjoy the various adventure activities in Goa.</p> -->
      </div>
      <div  class="hero-date">
        <h1 class="h1">Aqua Imagica</h1>
        <h6>Popular for Resort</h6>
      </div>
      <div class="hero-btn">
        <a href="#">EXPLORE</a>
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


  <script>
    const filterBtns = document.querySelectorAll('.filter-btn');
    const imageGallery = document.querySelector('.image-gallery');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
        filterBtns.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
        const filterValue = this.getAttribute('data-filter');
        imageGallery.querySelectorAll('.image').forEach(image => {
        if (filterValue === 'all' || image.classList.contains(filterValue)) {
            image.style.display = 'block';
        } else {
            image.style.display = 'none';
        }
        });
    });
    });

  </script>

</body>
</html>