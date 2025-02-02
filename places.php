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
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">  -->

    <link rel="icon" href="./img/rely_logo.png" type="image/jpg">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  
     <?php require('inc/links.php'); ?>
	<link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


<!-- anas------------------------------------------------ -->

<link type="text/css" rel="stylesheet" href="./css/style2.css" />
    <!-- <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" /> -->
    
<style>
.swiper{
		border-radius: 15px;
		box-shadow: 5px 5px 12px lightblue;
	}
	.container
	.card{
		
		box-shadow: 5px 5px 20px lightblue;
	}
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
        /* font-size: 18px; */
    }
    .body {
        margin: 4vh;
    }
    .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .sidebar {
        width: 25%;
        border: 1px solid #eee;
        border-radius: 3px;
        padding: 15px;
        height: 92vh;
        box-shadow: 0px 0px 3px gray;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .fa-circle {
        color: orangered;
    }
    .searchBar {
        width: 100%;
        background-color: #eee;
        border-radius: 3px;
        padding: 9px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    input {
        border: none;
        outline: none;
        background: none;
    }
    .glass:hover {
        color: orangered;
        cursor: pointer;
    }
    .social-icons {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .fa-brands {
        font-size: 25px;
        margin: 0 10px;
        color: #333;
        cursor: pointer;
    }
    .fa-brands:hover {
        color: orangered;
    }
    .data {
        width: 73%;
        border-radius: 3px;
        /* height: 200vh; */
        overflow-y: auto;
    }
    .checked{
            color: #ffa500;
        }
    .top {
        height: 60px;
        border-radius: 3px;
        background-color: #eee;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px;
    }
    
    #root {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;
    }
    .box {
        margin: 1px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        border: 1px solid #333;
        border-radius: 5px;
        box-shadow: 10px 10px 10px lightblue;
        padding: 15px;
    }
    .img-box {
        width: 100%;
        height: 176px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .images {
        max-height: 100%;
        max-width: 100%;
        box-shadow:5px 5px 10px #333;
        object-fit: cover;
        border-radius: 8px;
        object-position: center;
    }
    .bottom {
        margin-top: 20px;
        width: 100%;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 110px;
    }
    .botom {
        margin-top: 20px;
        width: 100%;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        /* height: 110px; */
    }
    h2 {
        font-size: 20px;
        color: orangered;
    }
    .button_ {
        width: 100%;
        position: relative;
        border: none;
        border-radius: 5px;
        background-color: #333;
        padding: 7px 25px;
        cursor: pointer;
        color: white;
    }
    .button_:hover {
        color: #fff;
        background-color: orangered;
    }
    a{
       text-decoration: none;
    }
    .button {
        width: 100%;
        position: relative;
        border: none;
        border-radius: 5px;
        background-color: #333;
        padding: 7px 25px;
        cursor: pointer;
        color: white;
    }
    .button:hover {
        color: #fff;
        background-color: orangered;
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

.sty{
    color: #7b7979;
}

/* swiper-------------------------------------------------------- */
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


	button.normal {
	font-size: 12px;
	font-weight: 600;
	padding: 9px 15px;
	background-color: rgb(255, 208, 141);
	border-radius: 10px;
	border: none;
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
  background-color: #9e9e9e7e;
}

.container__:hover .overlay__ {
  opacity: 1;
}

.text__ {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 30%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: start;
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
    <div class="body">
        <!-- -------------------------------------------------------------- -->
        <!-- <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center sty">Where2Go - Discover Places & Plan Your Holidays!
            Planning your next vacation? <br>Try one of these exotic and comfortable travel ideas to make your holiday memorable. 
            Whether a romantic beach vacation, a relaxing family holiday, an adventurous trek or a heritage walk, plan the most appropriate itinerary within your budget.</h2>
            
            <hr><br> -->

            
<!-- Swiper Carousal-->
 <div class="container-fluid px-lg-4 mt-4">
 	<div class="swiper swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
				<div class="container__">
					<img src="images/carousel/k1.png"  class="w-100 d-block image__" />
					<div class="overlay__">
						<div class="text__">Uttar Pradesh, <br>Kedarnath<br>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod
							tempor incididunt ut labore et dolore <br>magna aliqua.</p>
							<br><br>
							<button class="normal">Read More!</button>
						</div>
					</div>
				</div>
				</div>
				<div class="swiper-slide">
				<div class="container__">
				<img src="images/carousel/k2.png" class="w-100 d-block image__" />
				<div class="overlay__">
				<div class="text__">Paris<br>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod
							tempor incididunt ut labore et dolore <br>magna aliqua.</p>
							<br><br>
							<button class="normal">Read More!</button>
						</div>
				</div>
				</div>
				</div>
				<div class="swiper-slide">
				<div class="container__">
				<img src="images/carousel/k3.png" class="w-100 d-block image__" />
				<div class="overlay__">
				<div class="text__">Sikkim,<br>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod
							tempor incididunt ut labore et dolore <br>magna aliqua.</p>
							<br><br>
							<button class="normal">Read More!</button>
						</div>
				</div>
				</div>
				</div>
				<div class="swiper-slide">
				<div class="container__">
				<img src="images/carousel/k4.png" class="w-100 d-block image__" />
				<div class="overlay__">
				<div class="text__">Mount Everest,<br>Asia<br>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod
							tempor incididunt ut labore et dolore <br>magna aliqua.</p>
							<br><br>
							<button class="normal">Read More!</button>
						</div>
				</div>
				</div>
				</div>
				<div class="swiper-slide">
				<div class="container__">
				<img src="images/carousel/k5.png" class="w-100 d-block image__" />
				<div class="overlay__">
				<div class="text__">Agra, <br>Taj Mahal<br>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod
							tempor incididunt ut labore et dolore <br>magna aliqua.</p>
							<br><br>
							<button class="normal">Read More!</button>
						</div>
				</div>
				</div>
				</div>
				<div class="swiper-slide">
				<div class="container__">
				<img src="images/carousel/k6.png" class="w-100 d-block image__" />
				<div class="overlay__">
				<div class="text__">Paris,<br>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod
							tempor incididunt ut labore et dolore <br>magna aliqua.</p>
							<br><br>
							<button class="normal">Read More!</button>
						</div>
				</div>
				</div>
				</div>
			</div>
		</div>
    </div>
 </div>
            
 <br><br>
 <h2 class="fw-bold h-font text-center">HandPicked Collections for You!</h2>
            <div class="h-line bg-dark"></div>
        </div><br><br>
        

    <Section id="slides_parent">
        <div class="container">
            <div class="slides">
                <div class="slide_1">
                    <div class="slide_info">
                        <p>Outer Islands</p>
                    </div>
                </div>
                <div class="slide_1 slide_2">
                    <div class="slide_info">
                        <p>Pacific Harbour and Beqa</p>
                    </div>
                </div>
                <div class="slide_1 slide_3">
                    <div class="slide_info">
                        <p>Savusavu & Surrounds</p>
                    </div>
                </div>
                <div class="slide_1 slide_4">
                    <div class="slide_info">
                        <p>Suncoast</p>
                    </div>
                </div>
                <div class="slide_1 slide_5">
                    <div class="slide_info">
                        <p>Taveuni</p>
                    </div>
                </div>
                <div class="slide_1 slide_6">
                    <div class="slide_info">
                        <p>Yasawa Islands</p>
                    </div>
                </div>
                <div class="slide_1 slide_7">
                    <div class="slide_info">
                        <p>Nadi</p>
                    </div>
                </div>

                <div class="slide_1 slide_5">
                    <div class="slide_info">
                        <p>Taveuni</p>
                    </div>
                </div>
                <div class="slide_1 slide_6">
                    <div class="slide_info">
                        <p>Yasawa Islands</p>
                    </div>
                </div>
                <!-- <div class="slide_1 slide_7">
                    <div class="slide_info">
                        <p>Nadi</p>
                    </div>
                </div> -->
                <div class="slide_1 slide_5">
                    <div class="slide_info">
                        <p>Taveuni</p>
                    </div>
                </div>
                <div class="slide_1 slide_6">
                    <div class="slide_info">
                        <p>Yasawa Islands</p>
                    </div>
                </div>
                <div class="slide_1 slide_7">
                    <div class="slide_info">
                        <p>Nadi</p>
                    </div>
                </div>
                <div class="slide_1 slide_5">
                    <div class="slide_info">
                        <p>Taveuni</p>
                    </div>
                </div>
                <div class="slide_1 slide_6">
                    <div class="slide_info">
                        <p>Yasawa Islands</p>
                    </div>
                </div>
               
            </div>
        </div>
    </Section>

<hr>
        <div class="my-5 px-4" style="margin-top:-100px;">
            <h2 class="fw-bold h-font text-center">Top 12 Places</h2>
            <div class="h-line bg-dark"></div>
        </div>
        <!-- <div class="container"> -->
            <div class="banner-area2 row">
                <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2">FILTERS</h4>
                            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                                <!-- start search bar------------------------------------------------------------------------- -->
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">Search by category</h5>
                                    <div class="sidebody" style="height: 9vh;">
                                        <div class="searchBar">
                                            <input placeholder="Search..." id="searchBar" name="searchBar" type="text">
                                            <i class="fa-solid fa-magnifying-glass glass" id="btn"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- end search bar------------------------------------------------------------------------- -->
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
                <div class="data">
                    <div class="body">
                        <div id="root"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<hr>
    
 <?php require('inc/footer.php') ?>
        <!-- -------------------------------------------------------------- -->
    <script>

        const product = [
            {
                id: 0,
                image: 'images/uk.png',
                title: 'United Kingdom',
                price: 502000,
            },
            {
                id: 1,
                image: 'images/france.png',
                title: 'France',
                price: 60000,
            },
            {
                id: 2,
                image: 'images/italy.png',
                title: 'Italy',
                price: 200000,
            },
            {
                id: 3,
                image: 'images/india.png',
                title: 'India',
                price: 250000,
            },
            {
                id: 4,
                image: 'images/us.png',
                title: 'United States',
                price: 530000,
            },
            {
                id: 5,
                image: 'images/pakistan.png',
                title: 'Pakistan',
                price: 100000,
            },
            {
                id: 6,
                image: 'images/spain.jpg',
                title: 'Spain',
                price: 350000,
            },
            {
                id: 7,
                image: 'images/china.jpg',
                title: 'China',
                price: 205000,
            },
            {
                id: 8,
                image: 'images/germany.jpg',
                title: 'Germany',
                price: 200000,
            },
            {
                id: 9,
                image: 'images/maxico.jpeg',
                title: 'Mexico',
                price: 300000,
            },
            {
                id: 10,
                image: 'images/thailand.jpeg',
                title: 'Thailand',
                price: 900000,
            },
            {
                id: 11,
                image: 'images/turkey.jpg',
                title: 'Turkey',
                price: 600000,
            },
            
        ];

        const categories = [...new Set(product.map((item) => { return item }))]

        document.getElementById('searchBar').addEventListener('keyup', (e) => {
            const searchData = e.target.value.toLowerCase();
            const filteredData = categories.filter((item) => {
                return (
                    item.title.toLowerCase().includes(searchData)
                )
            })
            displayItem(filteredData)
        });

        const displayItem = (items) => {
            document.getElementById('root').innerHTML = items.map((item) => {
                var { image, title, price } = item;
                return (
                    `<div class='box'>
                        <div class='img-box'>
                            <img class='images' src=${image}></img>
                        </div> 
                        <div class='botom'>
                            <p>${title}</p>
                            <h2>Up to ₹${price}.00</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked "></i>
                                <i class="fa-solid fa-star checked"></i>
                            </div><br>
                        <a href="place.php" class="button_" >Explore Now!</a>

                        </div>
                    </div>`
                )
            }).join('')
        };
        displayItem(categories);
       
       //array to get open container with swapping
        // const displayItem = (items) => {
        //     document.getElementById('root').innerHTML = items.map((item) => {
        //         var { id, image, title, price } = item;
        //         return (
        //             `<div class='box'>
        //                 <div class='img-box'>
        //                     <img class='images' src=${image}></img>
        //                 </div> 
        //                 <div class='botom'>
        //                     <p>${title}</p>
        //                     <h2>Up to ₹${price}.00</h2>
        //                     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
        //                     <div class="star">
        //                         <i class="fa-solid fa-star checked"></i>
        //                         <i class="fa-solid fa-star checked"></i>
        //                         <i class="fa-solid fa-star checked"></i>
        //                         <i class="fa-solid fa-star checked "></i>
        //                         <i class="fa-solid fa-star checked"></i>
        //                     </div><br>
        //                     <a href="#" class="button_" onclick="openContainer(${id})">Explore Now!</a>
        //                 </div>
        //             </div>`
        //         )
        //     }).join('')
        // };
        // displayItem(product);

        // function openContainer(containerNumber) {
        //     window.location.href = `containers.php?container=${containerNumber}`;
        // }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- ------------------------------------------------------------- -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>			
    <script src="js/easing.min.js"></script>			
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>	
    <script src="js/owl.carousel.min.js"></script>			
    <script src="js/jquery.sticky.js"></script>			
    <script src="js/jquery.nice-select.min.js"></script>			
    <script src="js/parallax.min.js"></script>	
    <script src="js/mail-script.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>	
    <script src="js/main.js"></script>	
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
</body>
</html>