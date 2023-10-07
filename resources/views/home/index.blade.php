@extends('layouts.main')

@section('title', 'Home')

@section('content')


	@foreach($prod as $product)

	<?php
	/*
	$image = '';
	if(count($product->prodImages) > 0){
		$image = $product->prodImages[0]['img'];
	} else {
		$image = 'no_image.png';
	}
	*/
	
	$image = $product->prodImages[0]['img'];
	
	//$one = $product->prodImages[0]['img'];
	
	$des = $product->description;

	$discount =  null;
	if($product->in_stock == 1 ){
		$discount = "Discont:";
	}

	?>

	<div class="img_cover">
		<img class="img_cover_break" src="/images/{{$image}}" alt="{{$product->title}}">
			
		<span class="img_cover_product">
		<?php echo $product->title; ?> 
		<b><?php echo $discount; ?></b> <?php echo $product->price; ?><span>&#36;</span>
		</span>

		<span class="img_cover_product_link">
			<a href="{{route('showProduct', ['category',$product->id])}}"><?php echo $product->title; ?></a>
		</span>
		
		<span class="img_cover_product_link">
			<a href=" {{route('showCategory', $product->category['alias'] )}}"><?php echo $product->category['title']; ?></a>
		</span>
	</div>
	@endforeach

@endsection


@section('one')
<span class="">
	<a href="{{route('showProduct', ['category', $product->id])}}">
		<img class="img_one" src="/images/{{$image}}" alt="{{$product->title}}" />
	</a>
</span>	
@endsection

@section('discribe')
	<div> 
		
	<br/> 
		<span>{{$des}}</span>
	</div>
	
	<div class="">
		<a class="img_one_title" href="{{route('showProduct', ['category', $product->id])}}">{{$product->title}}</a>
	</div>
@endsection