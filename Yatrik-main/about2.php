<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yatrik</title>
    <!-- CSS only -->
	<?php require('inc/links.php'); ?>
	<link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

	<link rel="icon" type="image/x-icon" href="images/top.ico">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;800&display=swap");

        .box{
    border-top-color: var(--teal) !important;
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

*,
*::before,
*::after{
    margin:0;
    padding:0;
    box-sizing:border-box;
    
}

body{
    font-family: "Poppins", sans-serif;
    background:#e7edf4;
}

::selection{
    background-color: black;
}



section{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items: center;
    overflow: hidden;
    z-index: 2;

}
section:nth-child(1){
    color:#01161e;
}
section:nth-child(2){
    color:#fff;
    background:#fff;
}
section:nth-child(3){
    color:#01161e;
}
section:nth-child(4){
    color:#F1F5F9;
    background:#e7edf4;
} 

section.container{
    margin:100px;
   
    
}
section h1{
    font-size:60px;
    transition:1s ease;
    z-index: 5;
}
section h1:hover{
    font-size:80px;
    transition:1s ease;
}

section h2{
    font-size:40px;
    text-align:center;
    text-transform:uppercase;

}

.image-about{
    margin-left:40%;

    justify-content:center;
    align-items: center;
}
section .cards{
    display:flex;
    padding: 100px;
    overflow: hidden;
}

section .cards .text-card{
    background:#ffffff;
    margin:20px;
    padding:50px;
    border-radius: 15px;
    vertical-align: middle;
    width: 400px;
}
  
section .cards .text-card h3{
    font-size:30px;
    text-align:center;
    text-transform:uppercase ;
    margin-bottom: 10px;
}

@media(max-width:900px){

    section h1{
        font-size:40px;

    }
    section .cards{
        flex-direction:column;
    }



}

.reveal{
    position:relative;
    transform:translateY(150px);
    opacity:0;
    transition:all 1.25s ease

}

.reveal.active{
    transform:translateY(0px);
    opacity:1;
}

 .paragraph{
            margin-top: -40px;
            margin-bottom: -2rem;
            margin-left:10vw;
            margin-right:10vw;
            font-size:clamp(10px,5vw,35px);
            padding:0.5%;
            font-family: sans-serif;
            font-weight:200px;
            letter-spacing:-.05em;
        }

        span{
            opacity:0.1;
            font-family: sans-serif;
            font-weight:200px;
            letter-spacing:-.05em;

        }

        #bottom{
            margin-bottom: 80vh;
        }
 
        .title1{
            margin-top: 50px;
            margin-left: 37%;
            margin-bottom: 0rem;
        }
        .img-cardss{
            max-width: 50%;
            margin-top: 100px;
            border-radius: 15px;
            margin-left:50px;

        }
        .img-cardss2{
            max-width: 50%;
            margin-top: -550px;
            margin-left:900px;
            margin-right:50px;
            border-radius: 15px;
            float: right;

        }
        .text1{
            margin-top: 100px;
            font-size: 25px;
            max-width: 500px;
            margin-right: 50px;
            float:right;
        }
        .text2{
            margin-top: -475px;
            font-size: 25px;
            max-width: 500px;
            margin-left: 50px;
            float:left;
        }

        /* ---------------------------------------------------- */
        .mycard{
            box-shadow: 5px 5px 20px lightblue;
        }
        .mycard h5{
            background-color: #ffffff;
            color: #8f8f8f;
            margin-top: 10px;
        }
        .sizee{
            height: 500px;
            width: 40%;
        }

    </style>
    
</head>
<body>
    
<!-- preloading screen section -->
<div class=preloader></div>

<?php require('inc/header.php'); ?>

    <section>
       
<img src="./images/yatrik_logo_black.png" alt="logo" height="100px" width="200px"> </a><br><br>
        <!-- <h1>Yatrik</h1> -->
    </section>
    <p class="paragraph">
        Yatrik is a tours and travel website that caters to the needs of travelers seeking <br> unforgettable experiences and seamless planning. <br> With its user-friendly interface and extensive range of travel services, Yatrik aims to inspire, assist, and guide individuals in creating their dream vacations.</p>
        
    <section>
        <div class="container reveal">
            <p class="paragraph title1">Our Achievements</p>
            <div class="cards">
            <div class="text-card">
                <!-- <h3>Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Recusandae voluptate, vel aut, fugit facere magni possimus cumque
                     laboriosam ipsam  odit porro, placeat nisi consequatur ipsa harum accusantium 
                    numquam sint perspiciatis!</p> -->
                    <img src="images/about/hotel.svg" width="70px" class="image-about">
                    <h3>100+ ROOMS<h3>
            </div>
            <div class="text-card">
                <img src="images/about/customers.svg" width="70px"  class="image-about">
                <h3>200+ CUSTOMERS</h3>
            </div>
            <div class="text-card">
                <img src="images/about/rating.svg" width="70px"  class="image-about">
                <h3>150+ REVIEWS</h3>
            </div>
            </div>
        </div>
    </section>
    <p class="paragraph">As a tours and travel website, Yatrik offers a wide array of services and features designed to simplify the travel planning process. It provides users with access to a vast selection of destinations, including popular tourist spots, hidden gems, and off-the-beaten-path locations. Whether someone is looking for a relaxing beach getaway, an adventurous trek through the mountains, or a culturally enriching city tour, Travelo covers it all.</p>
<br>
<br><br><br><hr>
        <section>
            <div class="container reveal">
                <div class="">
                    <img src="images/rooms/IMG_67761.png" class="img-cardss">
                    <p id="bottom" class="text1">The website offers a range of travel packages and itineraries tailored to different interests and preferences. These packages may include accommodation, transportation, sightseeing tours, and various activities to ensure a hassle-free and immersive travel experience. Users can browse through the available options and customize their itineraries based on their specific requirements.</p>
                </div>
                <div class="text-cards">
                    <img src="images/germany.jpg" class="img-cardss2">
                    <p id="bottom" class="text2">In addition, Yatrik provides comprehensive travel guides and resources for each destination, offering essential information about local attractions, transportation, weather, and cultural norms. These guides serve as a valuable reference for travelers, helping them plan their activities and make the most of their time at each location.</p>
                </div> 
            </div>
        </section>
        <p id="bottom" class="paragraph">The website offers a range of travel packages and itineraries tailored to different interests and preferences. These packages may include accommodation, transportation, sightseeing tours, and various activities to ensure a hassle-free and immersive travel experience. Users can browse through the available options and customize their itineraries based on their specific requirements.</p>
        

            <!-- <section>
                <div class="container reveal">
                    <h2>your title</h2>
                    <div class="cards">
                    <div class="text-card">
                        <h3>Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Recusandae voluptate, vel aut, fugit facere magni possimus cumque
                             laboriosam ipsam  odit porro, placeat nisi consequatur ipsa harum accusantium 
                            numquam sint perspiciatis!</p>
                    </div>
                    <div class="text-card">
                        <h3>Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Recusandae voluptate, vel aut, fugit facere magni possimus cumque
                             laboriosam ipsam  odit porro, placeat nisi consequatur ipsa harum accusantium 
                            numquam sint perspiciatis!</p>
                    </div>
                    <div class="text-card">
                        <h3>Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Recusandae voluptate, vel aut, fugit facere magni possimus cumque
                             laboriosam ipsam  odit porro, placeat nisi consequatur ipsa harum accusantium 
                            numquam sint perspiciatis!</p>
                    </div>
                    </div>
                </div>

    </section> -->


    <div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/hotel.svg" width="70px">
        <h4 class="mt-3">100+ ROOMS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/customers.svg" width="70px">
        <h4 class="mt-3">200+ CUSTOMERS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/rating.svg" width="70px">
        <h4 class="mt-3">150+ REVIEWS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/staff.svg" width="70px">
        <h4 class="mt-3">200+ STAFFS</h4>
      </div>
    </div>
  
  </div>
</div>
    <hr>
<h3 class="my-5 fw-bld h-font text-center">🫡 MANAGEMENT TEAM</h3>
<hr><br><br>

<div class="container px-4">
   <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded mycard">
          <!-- <img src="images//first.avif" class="w-100 sizee"> -->
          <img src="images//salepartner.png" class="w-100 sizee">
          <h5 class="mt-2">Seles Partner:  Sumit Dubey</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded mycard">
          <img src="images/service.png" class="w-100 sizee">
          <h5 class="mt-2">Trust partner: Devang Gaiker</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded mycard">
          <img src="images/business.svg" class="w-100 sizee">
          <h5 class="mt-2">Business Partner: Shubham Maurya</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded mycard">
          <img src="images/travel.webp" class="w-100 sizee">
          <h5 class="mt-2">Farheen Ansari</h5>
        </div>
        <!-- <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/about.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/about.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/about.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div> -->
      </div>
      <div class="swiper-pagination"></div>
    </div>
</div>
<br>
<hr>
 <?php require('inc/footer.php') ?>


    <script type="text/javascript">
        window.addEventListener('scroll',reveal)

        function reveal(){
            var reveals = document.querySelectorAll('.reveal');
           
            for(var i=0;i<reveals.length;i++){
                var windowheight=window.innerHeight;
                var revealtop=reveals[i].getBoundingClientRect().top;
                var revealpoint=150;

                if(revealtop<windowheight-revealpoint){
                    reveals[i].classList.add('active');
                }
                else{
                    reveals[i].classList.remove('active');
                }
            }


        }
      ;

    </script>
    <script>
        let paragraphs = [...document.querySelectorAll('.paragraph')];
 let spans =[];

    paragraphs.forEach(paragraph =>{
        let htmlString='';
        let pArray = paragraph.textContent.split('');
        console.log(pArray);
        
    for(let i = 0;i < pArray.length; i++){
        htmlString += `<span>${pArray[i]}</span>`;

    }

    paragraph.innerHTML = htmlString;

    })

    spans = [...document.querySelectorAll('span')];

    function revealSpans(){
        for(let i = 0;i < spans.length ; i++){
            // if(spans[i].parentELement.getBoundingClientRect().top < window.innerHeight / 2){
                let{left,top}= spans[i].getBoundingClientRect();
                top = top - (window.innerHeight * 0.6);
                let opacityValue = 1 - ((top * .01) + (left * 0.001)) < 0.1 ? 0.1:1 - ((top * .01) + (left * 0.001)).toFixed(3)
                opacityValue = opacityValue > 1 ? 1 : opacityValue.toFixed(3);
                spans[i].style.opacity = opacityValue;
            
            }
        // }
    }
   
    window.addEventListener("scroll",() => {
        revealSpans()
    })
    revealSpans()

    let video1 = document.getElementById("video");
    let text1 = document.getElementsByClassName(".")

</script>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 40,
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
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 3,
          },
        }
      });
    </script>
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