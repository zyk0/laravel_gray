<!DOCTYPE html>
<html>

<head>
	<title>secret </title>
	
	<meta charset="utf-8" />
	
	<link rel="icon" type="image/x-icon" href="/favicon.ico">

	<link rel="stylesheet" href="/css.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">

</head>
<body>
	<div class="container">
		@foreach($sec as $sectitle)

		<p>
		<b><?php echo $sectitle->id; ?> </b>				
		<?php echo $sectitle->title; ?> 
		</p>

		@endforeach	
	</div>
</body>
<!--<script src="js.js"></script>-->
</html>



