@extends('layouts.main')
@section('content')
	
	<div class="container-fluid" style="margin: 10px">
		<div class="row">
			<div class="col-md-4" style="text-align: center">
				<a href="{{url('/products/photos/create')}}" class="btn btn-primary"> Add Picture</a>
			</div>
		</div>
	</div>

	{!! Form::open() !!}
		<div class='form-group'>
			@include('products.partials._form')
		</div>
	{!! Form::close() !!}

@endsection