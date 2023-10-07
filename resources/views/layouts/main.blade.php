<!DOCTYPE html>
<html>

<head>
	<title>main </title>
	
	<meta charset="utf-8" />
	
	<link rel="icon" type="image/x-icon" href="favicon.ico">

	<link rel="stylesheet" href="css.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">

	<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.min.js"></script>
</head>
<body>
<div data-scroll-container class="container">
        <div class="hero">
          <div data-scroll data-scroll-speed="3" class="copy">
		  
            <blockquote>
              &#8243; 
				Love each other in moderation. 
				That is the key to long-lasting love. 
				Too fast is, as bad as too slow
			  &#8243;
              <cite>
                &ndash; William Shakespeare, &#8243; Romeo and Juliet&#8243;
				<br>
			<!-- categories -->
			@foreach($categories as $category)
			<ul>
				<li>
					<span> 
					<?php echo $category->id; ?> 
					<a href=" <?php echo route('showCategory', $category->alias) ?>"> 
						<?php echo $category->title ?> 
					</a> 
					</span>
				</li>
				<!-- роут: название роута и алиас-->
			</ul>
			@endforeach
			
			<p><?php echo $category->title; ?> <span><?php echo $category->id; ?></span></p>
			
              </cite>
            </blockquote>
          </div>
          <div class="image-wrapper">
			<img src="/images/portrait_7.jpg" />
		  </div>
        </div> 
		
        <div class="section-0" data-scroll data-scroll-speed="2">
            <p 
                data-scroll 
                data-scroll-direction="horizontal" 
                data-scroll-speed="-2"
            >
               &#8243; Let me be that I am .”
            </p>
            <p 
                data-scroll 
                data-scroll-direction="horizontal" 
                data-scroll-speed="2"
            >
                and seek not to alter me &#8243;
            </p>
            
            <cite>
			&ndash; William Shakespeare, &#8243;Much Ado About Nothing&#8243;
			</cite>
        </div>

		<!--
        <div class="section-1">
            <div class="image-mask"></div>
        </div>
		-->

		<div class="empty"></div>
		
        <div class="section-2">
          <div id="pinSection" class="pinned-quote">
            <blockquote data-scroll data-scroll-sticky data-scroll-target="#pinSection">
              &#8243; 
				Men at some time are masters of their fates. 
				The fault, dear Brutus, is not in our stars, 
				but in ourselves, that we are underlings.
			  &#8243;
      
              <cite>
                &ndash; William Shakespeare, <br><small>&#8243; Julius Caesar &#8243;</small>
              </cite>
            </blockquote>
          </div>
		  
		  <div class="images-container">
				 @yield('content') 
          </div>
        </div>


        <div class="section-2-img">
          <div id="pinSection" class="pinned-quote">
            <blockquote data-scroll data-scroll-sticky data-scroll-target="#pinSection"></blockquote>
          </div>
        </div>


        <div class="section-3">
          <div class="image-wrapper">
			@yield('one')
            <!--<img  src="https://firebasestorage.googleapis.com/v0/b/hashnode-tutorials.appspot.com/o/bwimages%2F0984c01ecccd4282d73a74962ea59889.jpg?alt=media&token=4b859d79-7055-4584-9c0a-b44a2cdd4e66" alt=""> -->
          </div>
		 
          <div class="copy">
		  <a class="" href="{{route('showProduct', ['category',$product->id])}}"><?php echo $product->title; ?></a>
            <blockquote data-scroll-speed="3" data-scroll>
              &#8243;  
				Don &prime;t waste your love on somebody, who doesn't value it
			  &#8243;
			  
			  <cite>
                &ndash; William Shakespeare, &#8243; Romeo and Juliet &#8243;
              </cite>
            </blockquote>
          </div>
          <p class="copyright" data-scroll-position="bottom" data-scroll-speed="2" data-scroll>
			&#71;&#82;&#65;&#89; style <?php echo date("Y"); ?>
		  </p>
        </div>
		
</div>
</body>
<script src="js.js"></script>
</html>