<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>X3D Model Data</title>
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
            .boxModel{
                border: 3px solid rgba(0, 1, 0, 1.0);
                padding: 5px;
                float: left;
                margin: 5px;
                width: auto;
                height: auto;
            }
            .boxText{
                border: 1px solid rgba(1, 0, 0, 1.0);
                padding: 5px;
                float: left;
                margin: 5px;
                width: 220px;
                height: auto;
            }
        </style>
    </head>

    <body>
        <h1>3D_Model Data returned from the SQLite database</h1>
        <?php $i = 0; ?>
            <div class="boxModel">
                <div class="boxText">
                    <h2><?php echo $data[$i]['Id'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['brand'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['x3dModelTitle'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['x3dCreationMethod'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['modelName'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['flickrSearch'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['modelTitle'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['modelSubtitle'] ?></h2>
                </div>
                <div class="boxText">
                    <h2><?php echo $data[$i]['modelDescription'] ?></h2>
                </div>
            </div>
    </body>

</html>