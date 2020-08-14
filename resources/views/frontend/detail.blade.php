@extends('frontendtemplate')

@section('content') 
	<div class="col-lg-9 py-4"> 
		<h2 class="text px-4 d-inline-block">Item Detail Page</h2>
		<a href="{{route('homepage')}}" class="btn btn-success float-right">Go Back</a>
		<div class="container py-3">
			<div class="row">
				<div class="col-md-6 border-right">
					<p><img src="{{asset($item->photo)}}" class="img-fluid"></p>
				</div>
				<div class="col-md-6 py-3 px-5">
					<p>CodeNo :{{$item->codeno}}<br></p>
					<p>Name :{{$item->name}}<br></p>
					<p>Price :{{$item->price}}<br></p>
					<p>Discount :{{$item->discount}}<br></p>
					<p>Description :{{$item->description}}<br></p>
					<p>Brand :{{$item->brand->name}}</p>
					<p>Subcategory :{{$item->subcategory->name}}</p>

				</div>
			</div>
		</div>
		
	</div>
@endsection