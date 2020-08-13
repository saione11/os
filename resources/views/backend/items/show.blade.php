@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
	
		<div class="container py-3">
				<h2>Item Detail(Your UI)</h2>
				<a href="{{route('items.index')}}" class="btn btn-success float-right">Go Back</a>
		
			<div class="row">
				<div class="col-md-6">
					<p><img src="{{asset($item->photo)}}" class="img-fluid"></p>
				</div>
				<div class="col-md-6">
					<p>CodeNo :{{$item->codeno}}<br></p>
					<p>Name :{{$item->name}}<br></p>
					<p>Price :{{$item->price}}<br></p>
					<p>Discount :{{$item->discount}}<br></p>
					<p>Description :{{$item->description}}<br></p>
					<p>Brand :{{$item->brand_id}}</p>
					<p>Subcategory :{{$item->subcategory_id}}</p>

				</div>
			</div>
		</div>
	</div>
@endsection