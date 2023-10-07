<!DOCTYPE html>
<html>

<head>
	<title>show </title>
	
	<meta charset="utf-8" />
	
	<link rel="icon" type="image/x-icon" href="/favicon.ico">

	<link rel="stylesheet" href="/css.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">

</head>
<body>
<div data-scroll-container class="container">

	@php
	/*
	$image = '';
	if(count($product->prodImages) > 0){
	$image = $product->prodImages[0]['img'];
	} else {
	$image = 'no_image.png';
	}
	*/
	
	$one = $item->prodImages[0]['img'];
	
	@endphp 
 
        <div class="section-3">
          <div class="image-wrapper">
            <img class="img_one" src="/images/{{$one}}" alt="{{$item->title}}" />
		  </div>
          <div class="copy">
            <blockquote data-scroll-speed="3" data-scroll>
              $item->title: {{$item->title}}
			  <br>
			  {{$item->description}}
			  <p>
			 <!-- $item = $result['message'] {{$item}} -->
			  </p>
            </blockquote>
          </div>
          <p class="copyright" data-scroll-position="bottom" data-scroll-speed="2" data-scroll>
		  &copy; <a href=" {{ route('homeProduct')}} "> Gray style </a> <?php echo date("Y"); ?>
		  </p>
        </div>
      </div>

</body>
<!--<script src="js.js"></script>-->
</html>

