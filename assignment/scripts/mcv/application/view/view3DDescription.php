<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/all.css">

<?php $i = 0; ?>
<div class="col-xs-12 col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title drinksText"><h2><?php echo $data[$i]['modelTitle'] ?></h2></div>
            <div class="card-subtitle drinksText"><h3><?php echo $data[$i]['modelSubtitle'] ?></h3></div>
            <div class="card-text drinksText"><?php echo $data[$i]['modelDescription'] ?></div>   
        </div>
    </div>
</div>