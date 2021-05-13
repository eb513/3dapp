<script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
<link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'/>

<?php for($i=0; $i<count($data); $i++){?>
<div class="card-title drinksText"><h2><?php echo $data[$i]['x3dModelTitle'] ?></h2></div>
<div class="model3D">
    <x3d id="the_element" runtimeEnabled="true">
        <scene>
            <Inline nameSpaceName="model" mapDEFToID="true" onclick='animateModel("Z");' url="assets/x3d/<?php echo $data[$i]['modelName'] ?>" />
        </scene>
    </x3d>
</div>
<div class="card-text drinksText"><?php echo $data[$i]['x3dCreationMethod'] ?></div>
<div id="toFlickr" style="visibility:hidden"><?php echo $data[$i]['flickrSearch'] ?></div>
<?php } ?>