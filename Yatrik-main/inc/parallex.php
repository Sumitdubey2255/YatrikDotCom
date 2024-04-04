<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Parallax About page</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;800&display=swap");

*,
*::before,
*::after{
    margin:0;
    padding:0;
    box-sizing:border-box;
   
}

body{
    font-family: "Poppins", sans-serif;
    background-color: #333;
}

::selection{
    background-color: #54ffd7;
}

.logo{
    width: 100px;

}
header{
    position: absolute;
    z-index: 9999;
    width:100%;
    border-bottom:1px solid rgba(255,255,255,0.1);
    padding:0.9rem 0;
    top:0;
    left:0;
   
}
header nav{
    
    max-width:1400px;
    margin:0 auto;
    padding:0 2rem;
    display:flex;
    justify-content: space-between;
    align-items: center;
}

header ul{
    display:flex;
    text-decoration: none;
    align-items: center;
    list-style: none;

}
header ul a{
    color:white;
    padding:0 1.5rem;
    text-transform: uppercase;
    font-weight:300;
    font-size:0.83rem;
    text-decoration:none;

}

.search a{
 font-size:1.05rem;
 padding:0 3rem;
}


.menu a{
    width:50px;
    height:50px;
   padding: 0.2rem 0.4rem;
    border-radius:75%;
    background-color:rgba(115,115,115,0.7);
    backdrop-filter:blur(10px);
    -webkit-backdrop-filter: blur(10px);
}
main{
   position: relative;
    height:100vh;
    width:100vw;
    overflow:hidden;
}
.h2_{
    font-weight: 100px;
}
.parallax{
    pointer-events:none;
    transform: translate(-50%,-50%);
    transition:0.45s cubic-bezier(0.2,0.49,0.32,0.99);

}
.bg-img{
   
    position: absolute;
    width: 2800px;
    top:calc(50% - 390px);
    left:calc(50% + 10px );
    pointer-events:none;
    z-index: 1;

}
.fog-7{
    position: absolute;
    width: 1900px;
    top:calc(50% - 100px);
    left:calc(50% + 300px);
   
    z-index: 2;

}
.mountain-10{
position:absolute;
top:calc(50% + 69px);
width:870px;
left:calc(50% + 230px );

z-index: 3;
}
.fog-6{
    position: absolute;
    width: 1418px;
    top:calc(50% + 177px);
    left:calc(50% - 30px );
  
    z-index: 4;

}
.mountain-9{
    position: absolute;
    width: 463px;
    top:calc(50% + 119px);
    left:calc(50% - 457px);
   
    z-index:5;
}
.mountain-8{
    z-index: 6;
    position: absolute;
    top:calc(50% + 96px);
    left:calc(50% - 202px);
    
    width: 786px;
    
    

}
.fog-5{
    position: absolute;
    width: 1435px;
    top:calc(50% + 600px);
    left:calc(50% - 28px );
    
    z-index: 7; 
    

}
.mountain-7{
    position:absolute;
    z-index: 8;
    width:538px;
    top:calc(50% + 123px);
    left:calc(50% + 305px);
   
    
}
.text{
    position: absolute;
    z-index: 9;
    top:calc(50% - 130px);
    left:50%;
  
    transform:translate(-50%,-50%);
    text-align:center;
    text-transform:uppercase;
    color:white;

}

.text .h2_{
    font-weight: 100;
    font-size: 6.5rem;
    line-height:0.88;
}

.text h1{
    font-weight:800;
    font-size:8rem;
    line-height:0.88;
}

.mountain-6{
    position:absolute;
    z-index:10;
    top:calc(50% + 86.5px);
    width:383.5px;
    left:calc(50% + 590px);
   
}

.fog-4{
    z-index:11;
    position:absolute;
    top:calc(50% + 269px);
    left:calc(50% + 130px);
    position:absolute;
  
    

}

.mountain-5{
    z-index:12;
    position:absolute;
    top:calc(50% + 269px);
    left:calc(50% + 130px);
    width:583px;
   
}

.fog-3{
    z-index:13;
    position:absolute;
    top:calc(50% + 271px);
    left:calc(50% + 29px);
    width:449px;
    

}

.mountain-4{
    position: absolute;
    z-index:14;
    width: 717px;
    top: calc(50% + 201px);
    left: calc(50% - 381.5px);
  
 
}

.mountain-3{
    position: absolute;
    z-index:15;
    width:419px;
    top:calc(50% + 133px);
    left:calc(50% + 736px);
    width:419px;
    
}

.fog-2{
    z-index:16;
    width:1833px;
    top:calc(50% + 95px);
    left:calc(50% + 7px);
    position:absolute;
   
}
 
.mountain-2{
    position: absolute;
    z-index: 17;
    top: calc(50% + 188px);
    left: calc(50% + 412px);
    width: 625px;
   
}

.mountain-1{
    position: absolute;
    z-index: 18;
    top:calc(50% + 91.5px);
    left:calc(50% - 645px);
    width: 450px;
  

}

.sun-rays
{
    position: absolute;
    z-index:19;
    top:0;
    right:0;
    width:595px;
    pointer-events:none;
}

.black-shadow{
    position:absolute;
    z-index:20;
    bottom:0;
    right:0;
    width:100%;
    pointer-events:none;
}

.fog-1{
   z-index: 21;
    top:calc(50% + 85px);
    left:calc(50% );
    width:1920px;
    position:absolute;
   
}

.vignette{
    position: absolute;
    z-index:100;
    width:100%;
    height:100%;
    top:0;
    left:0;
    background:radial-gradient(ellipse at center,rgba(0,0,0,0)65%,rgba(0,0,0,0.7));
    pointer-events:none;
}
    </style>

</head>
<body>
    <main>
        <div class="vignette hide"></div>
        <img src="images/img/background.png" data-speedx="0.3" data-speedy="0.38" data-speedz="0" data-rotation="0" data-distance="0" class="parallax bg-img">
        <img src="images/img/fog_7.png" data-speedx="0.27" data-speedy="0.32" data-speedz="0" data-rotation="0" data-distance="850" class="parallax fog-7">
        <img src="images/img/mountain_10.png" data-speedx="0.195" data-speedy="0.305" data-speedz="0" data-rotation="0" data-distance="1100" class="parallax mountain-10">
        <img src="images/img/fog_6.png" data-speedx="0.25" data-speedy="0.28" data-speedz="0" data-rotation="0" data-distance="1400" class="parallax fog-6">
        <img src="images/img/mountain_9.png" data-speedx="0.125" data-speedy="0.155" data-speedz="0.15" data-rotation="0.02" data-distance="1700" class="parallax mountain-9">
        <img src="images/img/mountain_8.png" data-speedx="0.1" data-speedy="0.11" data-speedy="0" data-speedz="0.02" data-rotation="0.05" data-distance="1800" class="parallax mountain-8">
        <img src="images/img/fog_5.png" data-speedx="0.16" data-speedy="0.105" data-speedz="0" data-rotation="0" data-distance="1900" class="parallax fog-5">
        <img src="images/img/mountain_7.png" data-speedx="0.1" data-speedy="0.1" data-speedz="0" data-rotation="0.09" data-distance="2000" class="parallax mountain-7">
        <div class="text parallax" data-speedx="0.07" data-speedy="0.07" data-speedz="0" data-rotation="0.11" >
            <h2 class="h2_">India</h2>
            <h1>Meghalaya</h1>
            <h2>Experience The Advanture<br>With Yatrik.com</h2>
        </div>
        <img src="images/img/mountain_6.png" data-speedx="0.065" data-speedy="0.05" data-speedz="0.05" data-rotation="0.12" data-distance="2300" class="parallax mountain-6">
        <img src="images/img/fog_4.png" data-speedx="0.135" data-speedy="0.04" data-speedz="0" data-rotation="0" data-distance="2400" class="parallax fog-4">
        <img src="images/img/mountain_5.png" data-speedx="0.08" data-speedy="0.025" data-speedz="0.13" data-rotation="0.1" data-distance="2550" class="parallax mountain-5">
        <img src="images/img/fog_3.png" data-speedx="0.11" data-speedy="0.018" data-speedz="0" data-rotation="0" data-distance="2800" class="parallax fog-3">
        <img src="images/img/mountain_4.png" data-speedx="0.059" data-speedy="0.024" data-speedz="0.35"  data-rotation="0.14" data-distance="3200" class="parallax mountain-4">
        <img src="images/img/mountain_3.png" data-speedx="0.04" data-speedy="0.018" data-speedz="0.32" data-rotation="0.05" data-distance="3400" class="parallax mountain-3">
        <img src="images/img/fog_2.png" data-speedx="0.15" data-speedy="0.0115" data-speedz="0" data-rotation="0" data-distance="3600" class="parallax fog-2">
        <img src="images/img/mountain_2.png" data-speedx="0.0235" data-speedy="0.013" data-speedz="0.42" data-rotation="0.15" data-distance="3800" class="parallax mountain-2">
        <img src="images/img/mountain_1.png" data-speedx="0.027" data-speedy="0.018" data-speedz="0.53" data-rotation="0.2" data-distance="4000" class="parallax mountain-1">
        <img src="images/img/sun_rays.png"  class="sun-rays hide">
        <img src="images/img/black_shadow.png"  class="black-shadow hide">
        <img src="images/img/fog_1.png" data-speedx="0.12" data-speedy="0.01" data-speedz="0" data-rotation="0" data-distance="4200" class="parallax fog-1">
    </main> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
   
</body>
<img src="../images/img/fog_2.png" alt="">
<script>
    /* India-Meghalaya JS */
    const parallax_el=document.querySelectorAll(".parallax");

    let xValue = 0 ,
        yValue = 0 ;
    let rotateDegree = 0;

        function update(cursorPosition){

            parallax_el.forEach((el)=>{
                let speedx = el.dataset.speedx;
                let speedy = el.dataset.speedy;
                let speedz = el.dataset.speedz;
                let rotateSpeed=el.dataset.rotation;
                let distance = el.dataset.distance;
                let isInLeft = parseFloat(getComputedStyle(el).left) < window.innerWidth / 2 ? 1 : -1;
                let zValue = (cursorPosition - parseFloat(getComputedStyle(el).left)) * isInLeft * 0.1;
                

                

                el.style.transform=`translateX(calc(-50% + ${-xValue * speedx}px)) translateY(calc(-50% + ${yValue * speedy}px)) rotateY(${rotateDegree * rotateSpeed}deg) perspective(2300px) translateZ(${zValue * speedz}px)`;
                
            });
        }
        update(0);
        window.addEventListener("mousemove",(e)=>{

            if(timeline.isActive()) return;

            xValue=e.clientX - window.innerWidth / 2;
            yValue=e.clientY - window.innerHeight / 2;
            rotateDegree=(xValue/(window.innerWidth / 2)) * 20;

            update(e.clientX);
        });

        let timeline = gsap.timeline();
        const elementsArray = Array.from(parallax_el); 

        timeline.from(".text h1",
        {
            y:window.innerHeight - document.querySelector(".text h1").getBoundingClientRect().top + 200,
            duration:2,
        },
            "1"
        )
        .from(".text h2",
        {
            y:-150,
            opacity:0,
            duration:1.5,

        },
        "2"
        )
        .from(".hide",{
            opacity:0,
            duration:1.5,

        },
        "2"
        );
</script>
</html>