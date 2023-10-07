<!DOCTYPE html>
<html>

<head>
	<title> categories <?php echo $product->title ?? null; ?></title>
	
	<meta charset="utf-8" />
	
	<link rel="icon" type="image/x-icon" href="/favicon.ico">

	<link rel="stylesheet" href="/css.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">

</head>
<body>
<div data-scroll-container class="container">
 
<div class="section-3">
		
          <div class="image-port">
			<div>
				@foreach($cat->products as $product)
				
				@php
				
				//$image = '';
				/*
				if(count($product->images) > 0){
				$image = $product->images[0]['img'];
				} else {
				$image = 'no_image.png';
				}
				*/
				
				@endphp
			<div class="">					
				<ul>
					<li>
						<?php echo $product->title; ?>
					</li>
				</ul>
			</div>
			@endforeach
			<div class="">Количество: <span>{{$cat->products->count()}}</span> штук</div>	
			
			<br>

			</div>
		  </div>
		  
          <div class="copy">
            <blockquote data-scroll-speed="3" data-scroll>
					cat->title: <?php echo $cat->title; ?>
					cat->desc:  <?php echo $cat->desc; ?>
					 <div class="">Showing: <span>{{$cat->products->count()}}</span> results</div>
					<br>

            </blockquote>
          </div>
          <p class="copyright" data-scroll-position="bottom" data-scroll-speed="2" data-scroll>
		 
		  &copy; <a href=" {{ route('homeProduct')}} "> Gray style </a> <?php echo date("Y"); ?>
		  </p>
</div>
</div>
</body>

</html>

