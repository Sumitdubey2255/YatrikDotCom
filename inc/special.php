<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .collection_{
            /* border-radius: .5rem; */
            /* box-shadow: 10px 10px 15px lightblue; */
            padding: 1rem;
            margin: 20px;
            margin-top: -20px;
            overflow-x: auto;
            white-space: nowrap;
        }

        .collection_ .box-container{
        display: flex;
        align-items: center;
        justify-content: center;
        /* flex-wrap: wrap; */
        }

        .collection_ .box-container .card{
        flex:1 1 30rem;
        margin:1rem;
        overflow: hidden;
        position: relative;
        border-radius: 1rem;
        box-shadow:0 .5rem 1rem #333;
        /* box-shadow:0 .5rem 1rem rgba(0,0,0,.9); */
        height: 17rem;
        cursor: pointer;
        }

        .collection_ .box-container .card .imgs_{
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 1rem;
        }

        .collection_ .box-container .card .info_{
        display: flex;
        flex-flow: column;
        align-items: center;
        justify-content: center;
        position: absolute;
        top:0; left: 0;
        height: 100%;
        width: 100%;
        background:rgba(255,255,255,.8);
        text-align: center;
        transform: scale(1.3);
        opacity: 0;
        }

        .collection_ .box-container .card:hover .info_{
        transform: scale(1);
        opacity: 1;
        }

        .collection_ .box-container .card:hover .imgs_{
        transform: scale(1.3);
        }

        .collection_ .box-container .card .info_ h3{
        font-size: 20px;
        color:#000;
        }

        .collection_ .box-container .card .info_ p{
        font-size: 15px;
        color:#333;
        text-align: center;
        padding:0.5rem;
        }

    </style>

</head>
<body>

<section class="collection_" id="collection_">

    <div class="box-container">

        <div class="card">
            <img src="images/places/goa.jpg" alt="" class="imgs_">
            <div class="info_">
                <h3>Goa Beach</h3>
                <p>Lorem, ipsum dolor <br>sit consectetur adipisicing<br>elit. Veniam, dolores.</p>
                <!-- <a href="#" class="btn">learm more</a> -->
            </div>
        </div>

        <div class="card">
            <img src="images/places/mumbai.jpg" alt="" class="imgs_">
            <div class="info_">
                <h3>Mumbai</h3>
                <p>Lorem, ipsum dolor <br>sit consectetur adipisicing<br>elit. Veniam, dolores.</p>
                <!-- <a href="#" class="btn">learm more</a> -->
            </div>
        </div>

        <div class="card">
            <img src="images/places/rameshwaram.jpg" alt="" class="imgs_">
            <div class="info_">
                <h3>Rameshwaram</h3>
                <p>Lorem, ipsum dolor <br>sit consectetur adipisicing<br>elit. Veniam, dolores.</p>
                <!-- <a href="#" class="btn">learm more</a> -->
            </div>
        </div>

        <div class="card">
            <img src="images/places/manali.webp" alt="" class="imgs_">
            <div class="info_">
                <h3>Manali</h3>
                <p>Lorem, ipsum dolor <br>sit consectetur adipisicing<br>elit. Veniam, dolores.</p>
                <!-- <a href="#" class="btn">learm more</a> -->
            </div>
        </div>

        <div class="card">
            <img src="images/places/ujjain.jpeg" alt="" class="imgs_">
            <div class="info_">
                <h3>Ujjain</h3>
                <p>Lorem, ipsum dolor <br>sit consectetur adipisicing<br>elit. Veniam, dolores.</p>
                <!-- <a href="#" class="btn">learm more</a> -->
            </div>
        </div>

        <div class="card">
            <img src="images/places/pondicherry.jpg" alt="" class="imgs_">
            <div class="info_">
                <h3>Pondicherry</h3>
                <p>Lorem, ipsum dolor <br>sit consectetur adipisicing<br>elit. Veniam, dolores.</p>
                <!-- <a href="#" class="btn">learm more</a> -->
            </div>
        </div>

    </div>

</section>


</body>
</html>