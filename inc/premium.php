<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
	<link rel="icon" type="image/x-icon" href="../images/top.ico">
    <style>
		@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;800&display=swap");
	  body{
  margin: 0;
  padding: 0;
  height: 100vh;
  font-family: sans-serif;
}
.main{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  justify-content: center;
  -ms-align-items: center;
  align-items: center;
  height: 100vh;
  font-family: "Poppins";
  
}
.card{
  margin: 20px;
  box-shadow: 0 0 15px rgba(0,0,0,0.2);
  width: 320px;
  height: 520px;
  border-radius: 8px;
  padding: 15px;
  text-align: center;
  color: #fff;
}

.card h1,
.card h2{
  margin: 10px;
  font-size: 25px;
}
.card h2{
  font-size: 28px;
}

hr{
  opacity: 0.3;
}

.card li{
  margin: 5px;
  padding: 5px;
  text-align: left;
  font-size: 18px;
  
}

.card a{
  position: absolute;
  display: block;
  background-color: transparent;
  padding: 10px 50px;
  margin: 85px;
  margin-top: -1px;
  text-decoration: none;
  color: #070606;
  border:2px solid;
  border-radius: 7px;
  font-family: "Poppins";
}
.card a:hover{
  background-color: white;
}

.card:nth-child(1){
  color: #481d10;
  background: rgb(66,187,223);
  background-color: #772f1a;
  background-image: linear-gradient(315deg, #772f1a 0%, #f2a65a 74%);

}
.card:nth-child(2){
  color:#4a422a;
  background: rgb(66,187,223);
  background:linear-gradient(315deg, #c4ad46 0%, #ffd557 74%);
  height: 580px;
  box-shadow: 0 0 20px rgba(0,0,0,0.4);
}
.card:nth-child(3){
  background: rgb(66,143,223);
  background: linear-gradient(113deg, rgb(176, 176, 176) 0%, rgb(70, 70, 70) 100%);
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
      
        <div class="main">
        	<div class="card">
        		<h1>Basic Package</h1><hr>
        		<h2>₹1900.99</h2>

        		<ul>
        			<li>Assuard Tickets</li>
        			<li>Confirmed Journey</li>
        			<li>Better Guide</li>
        			<li>Best Hotels</li>
        			<li>24/7 Support</li>
        		</ul>

        		<a href="payment.html">Buy Now</a>
        	</div>
        	<div class="card">
        		<h1>Golden Package</h1><hr>
        		<h2>₹9900.99</h2>

        		<ul>
        			<li>Assuard Tickets</li>
        			<li>Luxury Facilities</li>
        			<li>Clasic And Top Hotels</li>
        			<li>Better FLight Experience</li>
        			<li>Best Guide Support</li>
        			<li>Better Offers</li>
        			<li>Quality Services</li>
        			<li>24/7 Support</li>
        		</ul>
        		<a href="payment.html">Buy Now</a>
        	</div>
        	<div class="card">
        		<h1>Silver Package</h1><hr>
        		<h2>₹4900.99</h2>

        		<ul>
        			<li>Assuard Tickets</li>
        			<li>Business Class Facilities</li>
        			<li>Top Hotels</li>
        			<li>Better Flight Experience</li>
        			<li>Better Guide</li>
        			<li>Better Services</li>
        			<li>24/7 Support</li>
        		</ul>

        		<a href="payment.html">Buy Now</a>
        	</div>
        </div>

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
</body>
</html>