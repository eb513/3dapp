<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Test view</title>
        <style>
            h1{
                color: red;
                margin-left: 5px;
            }
            h2{
                color: blue;
                margin: 5px;
            }
            p{
                color: green;
                margin-left: 5px;
            }
            .imgBox{
                padding: 0.25rem;
                margin-top: 5px;
                margin-bottom: 5px;
                border: 1px solid #dee2e6;
                border-radius: 0.25rem;
                width: 280px;
            }
            .box{
                border: 1px solid rgba(0, 0, 0, 1.0);
                padding: 5px;
                float: left;
                margin: 5px;
                height: 280px;
            }
        </style>
    </head>

    <body>
        <h1>Second 3D App Test View</h1>
        <p>If you are seeing the test Model 3D Image Data below, then your basic MVC framework is working</p>
        <div class="box">
            <h2><?php echo $model1 ?></h2>
            <img class="imgBox" src='assets/images/gallery_images/<?php echo $image3D_1 ?>.jpg'>
        </div>
        <div class="box">
            <h2><?php echo $model2 ?></h2>
            <img class="imgBox" src='assets/images/gallery_images/<?php echo $image3D_2 ?>.jpg'>
        </div>
        <div class="box">
            <h2><?php echo $model3 ?></h2>
            <img class="imgBox" src='assets/images/gallery_images/<?php echo $image3D_3 ?>.jpg'>
        </div>
        <div class="box">
            <h2><?php echo $model4 ?></h2>
            <img class="imgBox" src='assets/images/gallery_images/<?php echo $image3D_4 ?>.jpg'>
        </div>
        <div class="box">
            <h2><?php echo $model5 ?></h2>
            <img class="imgBox" src='assets/images/gallery_images/<?php echo $image3D_5 ?>.jpg'>
        </div>
        <div class="box">
            <h2><?php echo $model6 ?></h2>
            <img class="imgBox" src='assets/images/gallery_images/<?php echo $image3D_6 ?>.jpg'>
        </div>
    </body>

</html>