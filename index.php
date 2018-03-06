<? require_once("dummy/dummy.php") ?>

<?php 
	//include('includes/_variables.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banner test</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	<link rel="stylesheet" href="/dist/styles/demo.css">
</head>
<body>
	
</body>
</html>

<body>


<div class="dummy-content">Jeg er dummy indhold - scroll ned</div>

<?php 
	$client = 'kvadrat';
	$class = 'mb-100';
	include('includes/parallax.php')
?>

<div class="dummy-content">Jeg er dummy indhold</div>

<?php 
	$client = 'hay';
	$class = 'mb-100';
	include('includes/parallax.php')
?>

<div class="dummy-content">Jeg er dummy indhold</div>

<?php 
	$client = 'bo';
	$class = 'mb-100';
	include('includes/parallax.php')
?>

<div class="dummy-content">Jeg er dummy indhold</div>


<?php 
	$client = 'bo2';
	$class = 'mb-100';
	include('includes/parallax.php')
?>

<div class="dummy-content">Jeg er dummy indhold</div>


</body>
</html>