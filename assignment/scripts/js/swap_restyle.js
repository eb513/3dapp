var counter = 1;

$(document).ready(function() {
	
	selectPage();
	selectModel();

	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#references').hide();
		$('#statementoforiginality').hide();
		$('#downloadModels').hide();
		$('#models').hide();
		$('#3dModel').hide();
		$('#interaction').hide();
		$('#description').hide();


		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#references').hide();
			$('#statementoforiginality').hide();
			$('#downloadModels').hide();
			$('#models').hide();
			$('#interaction').hide();
			$('#description').hide();
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#references').hide();
			$('#statementoforiginality').hide();
			$('#downloadModels').hide();
			$('#models').hide();
			$('#interaction').hide();
			$('#description').hide(); 
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#references').hide();
			$('#statementoforiginality').hide();
			$('#downloadModels').hide();
			$('#models').show();
			$('#3dModel').show();
			$('#interaction').show(); 
			$('#description').hide();
			$( "#3dModel" ).load( "./scripts/mcv/index.php/apiGetData-Coke" );
			$('#description').show();
			$( "#description" ).load( "./scripts/mcv/index.php/apiGetDescription-Coke" );
			setTimeout(() => {  loadImages(document.getElementById("toFlickr").innerHTML); }, 500);
		});

		$('#navReferences').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#references').show();
			$('#statementoforiginality').hide();
			$('#downloadModels').hide();
			$('#models').hide();
			$('#interaction').hide(); 
			$('#description').hide();
		});

		$('#navStatementOfOriginality').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#references').hide();
			$('#statementoforiginality').show();
			$('#downloadModels').hide();
			$('#models').hide();
			$('#interaction').hide(); 
			$('#description').hide();
		});

		$('#navModelsDld').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#references').hide();
			$('#statementoforiginality').hide();
			$('#downloadModels').show();
			$('#models').hide();
			$('#interaction').hide(); 
			$('#description').hide();
		});
	}

	function selectModel() {

		$('#navCoke').click(function(){
			$( "#3dModel" ).load( "./scripts/mcv/index.php/apiGetData-Coke" );
			$('#description').show();
			$( "#description" ).load( "./scripts/mcv/index.php/apiGetDescription-Coke" );
			setTimeout(() => {  loadImages(document.getElementById("toFlickr").innerHTML); }, 100);
		});

		$('#navSprite').click(function(){
			$( "#3dModel" ).load( "./scripts/mcv/index.php/apiGetData-Sprite" );
			$('#description').show();
			$( "#description" ).load( "./scripts/mcv/index.php/apiGetDescription-Sprite" );
			setTimeout(() => {  loadImages(document.getElementById("toFlickr").innerHTML); }, 100);
		});

		$('#navFanta').click(function(){
			$( "#3dModel" ).load( "./scripts/mcv/index.php/apiGetData-Fanta" ); 
			$('#description').show();
			$( "#description" ).load( "./scripts/mcv/index.php/apiGetDescription-Fanta" );
			setTimeout(() => {  loadImages(document.getElementById("toFlickr").innerHTML); }, 100);
		});
	}

});

function changeLook(){
    counter += 1;
    switch(counter){
        case 1:
            document.getElementById('body').style.backgroundColor = '#360103';
            document.getElementById('header').style.backgroundColor = '#F40000';
            document.getElementById('footer').style.backgroundColor = '#FFFFFF';
            break;
        case 2:
            document.getElementById('body').style.backgroundColor = '#FFF100';
            document.getElementById('header').style.backgroundColor = '#1E5CB3';
            document.getElementById('footer').style.backgroundColor = '#00A65F';
            break;
        case 3:
            document.getElementById('body').style.backgroundColor = '#FC8102';
            document.getElementById('header').style.backgroundColor = '#29A24B';
            document.getElementById('footer').style.backgroundColor = '#0E4485';
            break;
        case 4:
            counter = 0;
            document.getElementById('body').style.backgroundColor = '#711F25';
            document.getElementById('header').style.backgroundColor = '#D51143';
            document.getElementById('footer').style.backgroundColor = '#D51143';
            break;
                                
    }
}

function changeBack(){
    document.getElementById('body').style.backgroundColor = '#FFFFFF';
    document.getElementById('header').style.backgroundColor = 'rbga(175, 0, 0, 1)';
    document.getElementById('footer').style.backgroundColor = 'rbga(175, 0, 0, 1)';
}