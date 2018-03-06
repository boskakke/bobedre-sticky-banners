<? require_once("dummy/dummy.php") ?>

<?php 
	//include('includes/_variables.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banner test</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/dist/styles/main.css">
	<link rel="stylesheet" href="/dist/styles/demo.css">
</head>
<body>
	
</body>
</html>

<body>


<div class="dummy-content">Jeg er dummy indhold - scroll ned</div>

<?php 
	$client = 'summer';
	
	include('includes/parallax.php')
?>

<div class="dummy-content">Jeg er dummy indhold</div>

<?php 
	$client = 'kvadrat';
	
	include('includes/parallax.php')
?>

<div class="dummy-content">Jeg er dummy indhold</div>

<?php 
	$client = 'hay';
	
	include('includes/parallax.php')
?>

<div class="dummy-content">Jeg er dummy indhold</div>

<?php 
	$client = 'bo';
	
	include('includes/parallax.php')
?>

<div class="dummy-content">Jeg er dummy indhold</div>


<?php 
	$client = 'bo2';
	
	include('includes/parallax.php')
?>

<div class="dummy-content">Jeg er dummy indhold</div>


</body>
</html>