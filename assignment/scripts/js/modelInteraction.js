var spinning = false;
var currAxis = "";

function stopRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimerX').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerY').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimerZ').setAttribute('enabled', spinning.toString());
}

function animateModel(axis)
{
    if(!spinning){
		spinning = true;
		currAxis = axis;
        document.getElementById('model__RotationTimer'+axis).setAttribute('enabled', 'true');
	}
	else if(spinning && currAxis != axis){
		stopRotation();
		currAxis = axis;
        document.getElementById('model__RotationTimer'+axis).setAttribute('enabled', 'true');
	}
    else{
		spinning = false;
        document.getElementById('model__RotationTimer'+axis).setAttribute('enabled', 'false');
	}
}

function wireframe()
{
	$('#the_element').runtime.togglePoints(true);
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}