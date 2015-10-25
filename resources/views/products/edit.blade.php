@extends('layouts.main')
@section('content')
	
	<h2> Kayak </h2>

	<div class="container-fluid" style="margin: 10px">
		<div class="row">
			<div class="col-md-4" style="text-align: center">
		    	<img src="{{url('/product_pictures/glideblue.jpg')}}" alt="ALT NAME" class="img-responsive" style="margin: auto"/>
		  	</div>
		  	<div class="col-md-4" style="text-align: center">
		    	<img src="{{url('/product_pictures/images.jpeg')}}" alt="ALT NAME" class="img-responsive" style="margin: auto"/>
		  	</div>
		  	<div class="col-md-4" style="text-align: center">
		    	<img src="{{url('/product_pictures/singlekayak.jpg')}}" alt="ALT NAME" class="img-responsive" style="margin: auto"/>
		  	</div>
	  	</div>
  	</div>

	{!! Form::open() !!}
		<div class='form-group'>
			@include('products.partials._form_with_product')
		</div>
	{!! Form::close() !!}

	<ul class="list-unstyled">
		<li><a href="{{url('/products/show')}}" class="btn btn-primary"> Product Overview</a></li>
		<li><a href="{{url('#')}}" class="btn btn-primary"> Delete</a></li>
		<li><a href="{{url('/products/index')}}" class="btn btn-primary"> Back</a></li>
	</ul>	

@endsection