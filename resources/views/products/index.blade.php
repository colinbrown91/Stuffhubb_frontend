@extends('layouts.main')
@section('content')

<h2>All Products</h2>

	<!-- blade syntax iterate through products -->
	{{-- @foreach ($products as $productIndex => $product) --}}
		<div class="container-fluid" style="margin: 10px"> {{--Row Container--}}
			<div class="row">
		        <div class="col-md-6"> {{--Product Photo Carousel--}}
					<div id="productPhotosCarouselproductOne" class="carousel slide">
					    <!-- Indicators -->
					    <ol class="carousel-indicators">
					      <li data-target="#productPhotosCarouselproductOne" data-slide-to="0" class="active"></li>
					      <li data-target="#productPhotosCarouselproductOne" data-slide-to="1"></li>
					      <li data-target="#productPhotosCarouselproductOne" data-slide-to="2"></li>
					    </ol>
					    <!-- Wrapper for slides -->
					    <div class="carousel-inner" role="listbox" style="width: 320px; height: 320px; margin: auto">
					    	{{-- @foreach ($product->productPhotos as $index => $photo) --}}
		                        {{-- <div class="item @if ($index==0) {!! 'active' !!} @endif" > --}}
		                        <div class="item active">
						        	<img src="{{url('/product_pictures/glideblue.jpg')}}" alt="ALT NAME" class="img-responsive" style="margin: auto"/>
						      	</div>
						      	<div class="item">
						        	<img src="{{url('/product_pictures/images.jpeg')}}" alt="ALT NAME" class="img-responsive" style="margin: auto"/>
						      	</div>
						      	<div class="item">
						        	<img src="{{url('/product_pictures/singlekayak.jpg')}}" alt="ALT NAME" class="img-responsive" style="margin: auto"/>
						      	</div>
					    	{{-- @endforeach --}}
					    </div>
					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#productPhotosCarouselproductOne" role="button" data-slide="prev">
					      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#productPhotosCarouselproductOne" role="button" data-slide="next">
					      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					      <span class="sr-only">Next</span>
					    </a>
					</div>
		        </div> {{--End Product Photo Carousel--}}
		        <div class="col-md-3"> {{--Product Description--}}
		        	<div class="caption">
		                 <h4>Kayak</h4>
		                 <ul class="list-unstyled">
		                    <li><strong>Rating:</strong> 4.78/5</li>
		                    <li><strong>Address:</strong> 125 N Clybourne Ave., Chicago, IL 60657</li>
		                    <li><strong>Hours:</strong> M-F 9-5; Sat 10-3;</li>
		                    <li><strong>Categories:</strong> Kayak, Paddleboard</li>
		                    <li><strong>Brands:</strong> Delta, North Shore Sea Kayaks</li>
		                    <li><a href="{{url('/products/edit')}}" class="btn btn-primary"> Edit</a></li>
							<li><a href="#" class="btn btn-primary"> Delete</a></li>
		                 </ul>
		            </div>
		        </div> {{--End Product Description--}}
		        <div class="col-md-3"> {{--Product Rates--}}
		            <div class="caption">
		            	<h4>Rate</h4>
		                 <ul class="list-unstyled">
		                    <li><strong>$10/Hour</strong></li>
				            <li><strong>$30/Day</strong></li>
				            <li><strong>$50/Week</strong></li>
				            <li><strong>$150/Month</strong></li>
		                 </ul>
		                 <p><a href="{{url('/products/show')}}" class="btn btn-primary"> Show</a></p>
		            </div>
		        </div> {{--End Product Rates--}}
	     	</div>
     	</div> {{--End Row Container--}}
    <!-- End iterate through products -->
	{{-- @endforeach  --}}

	{{-- Button for creating a new Product --}}
	{{-- wit link to the create view --}}
	<a href="{{url('/products/create')}}" class="btn btn-primary"> Create New Product</a>

@endsection