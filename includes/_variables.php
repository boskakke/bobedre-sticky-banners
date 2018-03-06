<?php 

if(isset($_GET["filter"])) {
	$filter = $_GET["filter"];
}

if(isset($_GET["advertorial"])) {
	$advertorial = true;
}

if(isset($_GET["demo"])) {
	$demo = true;
	$class .= 'demo-mode';
}

?>