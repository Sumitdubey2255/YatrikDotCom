<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        /* second------------------------------------------------------------------- */
        .collection2_{
            border-radius: 1rem;
            /* box-shadow: 10px 10px 15px lightblue; */
            padding: 1rem;
            margin: 20px;
        }

        .collection2_ .box-containers{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        }

        .collection2_ .box-containers .boxes{
        flex:1 1 30rem;
        margin:1rem;
        overflow: hidden;
        position: relative;
        border-radius: 1rem;
        box-shadow:0 .5rem 1rem lightblue;
        /* box-shadow:0 .5rem 1rem rgba(0,0,0,.9); */
        height: 13rem;
        cursor: pointer;
        }

        .collection2_ .box-containers .boxes img{
        height: 70%;
        width: 30%;
        /* top: 0%;
        left:50%; */
        /* object-fit: cover; */
        margin: 5%;
        box-shadow: 5px 5px 15px #333;
        border-radius: 0.5rem;
        }

        .collection2_ .box-containers .boxes .infor{
        display: flex;
        flex-flow: column;
        /* align-items: center; */
        justify-content: center;
        position: absolute;
        top:15%; left: 50%;
        height: 70%;
        width: 30%;
        background:rgba(255,255,255,.8);
        /* text-align: center; */
        /* transform: scale(1.3); */
        opacity: 1;
        }

        .collection2_ .box-containers .boxes:hover .infor{
        transform: scale(1);
        opacity: 1;
        }

        .collection2_ .box-containers .boxes:hover img{
        transform: scale(1.3);
        }

        .collection2_ .box-containers .boxes .infor h3{
        font-size: 20px;
        color:#000;
        margin: 1px;
        }
        .collection2_ .box-containers .boxes .infor h2{
        font-size: 20px;
        color:#808080;
        margin: 1px;
        }

        .collection2_ .box-containers .boxes .infor p{
        font-size: 15px;
        color:#333;
        /* padding:0.5rem; */
        }
/* ------------------------------------------------ */
.buttons_ {
        width: 70%;
        position: relative;
        border: none;
        border-radius: 5px;
        background-color: #333;
        padding: 7px 25px;
        cursor: pointer;
        color: white;
        top: -15%;
        font-size: 15px;
        left: 80%;
    }
    .buttons_:hover {
        color: #fff;
        background-color: orangered;
    }
    a{
       text-decoration: none;
    }
    .btns_{
        position: relative;
        border: none;
        border-radius: 5px;
        /* background-color: #333; */
        padding: 7px 25px;
        cursor: pointer;
        color: blue;
        top: 10%;
        left: -30%;
    }

    </style>

</head>
<body>

<section class="collection2_" id="collection">
    <div class="box-containers">
        <div class="boxes">
            <img src="images/places/holly.jpg" alt="">
            <div class="infor">
                <br>
                <h2>Holly Places</h2>
                <h3>Get UpTo 40% OFF*</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam, dolores.</p>
                <a href="#" class="btns_">T&C's Apply</a>
                <a href="./index.php" class="buttons_">Explore Now!</a>
            </div>
        </div>

        <div class="boxes">
            <img src="images/places/beach.jpg" alt="">
            <div class="infor">
                <br>
                <h2>Beach Places</h2>
                <h3>Get UpTo 30% OFF*</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam, dolores.</p>
                <a href="#" class="btns_">T&C's Apply</a>
                <a href="./index.php" class="buttons_">Explore Now!</a>
            </div>
        </div>

        <div class="boxes">
            <img src="images/places/history.jpg" alt="">
            <div class="infor">
                <br>
                <h2>Historical Places</h2>
                <h3>Get UpTo 30% OFF*</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam, dolores.</p>
                <a href="#" class="btns_">T&C's Apply</a>
                <a href="./index.php" class="buttons_">Explore Now!</a>
            </div>
        </div>

        <div class="boxes">
            <img src="images/places/tracking.jpg" alt="">
            <div class="infor">
                <br>
                <h2>Mount Hunting</h2>
                <h3>Get UpTo 15% OFF*</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam, dolores.</p>
                <a href="#" class="btns_">T&C's Apply</a>
                <a href="./index.php" class="buttons_">Explore Now!</a>
            </div>
        </div>
    </div>

</section>

</body>
</html>