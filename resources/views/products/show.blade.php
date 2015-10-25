@extends('layouts.main')
@section('content')
	
	<h2> Kayak </h2>

	<div class="container-fluid" style="margin: 10px">
		<div class="row">
			<div class="col-md-4" style="text-align: center">
				<div class="thumbnail">
		    		<img src="{{url('/product_pictures/glideblue.jpg')}}" alt="ALT NAME" class="img-responsive" style="margin: auto"/>
		    	</div>
		  	</div>
		  	<div class="col-md-4" style="text-align: center">
		  		<div class="thumbnail">
		    		<img src="{{url('/product_pictures/images.jpeg')}}" alt="ALT NAME" class="img-responsive" style="margin: auto"/>
		    	</div>
		  	</div>
		  	<div class="col-md-4" style="text-align: center">
		  		<div class="thumbnail">
		    		<img src="{{url('/product_pictures/singlekayak.jpg')}}" alt="ALT NAME" class="img-responsive" style="margin: auto"/>
		    	</div>
		  	</div>
	  	</div>
  	</div>

	<ul class="list-unstyled">
        <li><strong>Rating:</strong> 4.78/5</li>
        <li><strong>Address:</strong> 125 N Clybourne Ave., Chicago, IL 60657</li>
        <li><strong>Hours:</strong> M-F 9-5; Sat 10-3;</li>
        <li><strong>Categories:</strong> Kayak, Paddleboard</li>
        <li><strong>Brands:</strong> Delta, North Shore Sea Kayaks</li>
       
     </ul>
     <div class="caption">
    	<h4>Rate</h4>
         <ul class="list-unstyled">
            <li><strong>$10/Hour</strong></li>
            <li><strong>$30/Day</strong></li>
            <li><strong>$50/Week</strong></li>
            <li><strong>$100/Month</strong></li>
         </ul>
    </div>
		
	<ul class="list-unstyled">
		<li><a href="{{url('/products/edit')}}" class="btn btn-primary"> Edit</a></li>
		<li><a href="{{url('#')}}" class="btn btn-primary"> Delete</a></li>
		<li><a href="{{url('/products/index')}}" class="btn btn-primary"> Back</a></li>
	</ul>	
	

@endsection