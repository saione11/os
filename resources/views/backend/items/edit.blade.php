@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Item Edit(Form/Old Value)</h2>

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<div class="row mb-3">
		<div class="offset-md-2 col-md-8">
			<form method="POST" action="{{route('items.update',$item->id)}}" enctype="multipart/form-data">

				@csrf
				@method('PUT')

				<div class="form-group">
					<label>Codeno:</label>
					<input type="text" readonly="" value="{{$item->codeno}}" name="item_codeno" class="form-control">
				</div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="item_name" value="{{$item->name}}"  class="form-control">
				</div>
				<div class="form-group">
					<label>Photo</label>
					<input type="file" name="item_photo" class="form-control-file pb-2">
					<img src="{{asset($item->photo)}}" class="img-fluid w-25">
					<input type="hidden" name="oldphoto" value="{{$item->photo}}">
				</div>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Unit Price</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount Price</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="form-group my-3">
							<input type="number" name="unit_price" value="{{$item->price}}" class="form-control" placeholder="Unit Price">
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="form-group my-3">
							<input type="number" name="discount_price" value="{{$item->discount}}" class="form-control" placeholder="Discount Price">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Brand</label>
					<select name="brand_id" class="form-control"> 
						<optgroup label="Choose brand">

							@foreach($brands as $brand)
							<option value="{{$brand->id}}"

								@if($brand->id == $item->brand_id)
									{{'selected'}}
								@endif

							>{{$brand->name}}</option>
							@endforeach

						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<label>Sub Category</label>
					<select name="subcategory_id" class="form-control">
						<optgroup label="Choose subcategory">

							@foreach($subcategories as $subcategory)
							<option value="{{$subcategory->id}}"
								@if($subcategory->id == $item->subcategory_id)
									{{'selected'}}
								@endif
							>{{$subcategory->name}}</option>
							@endforeach

						</optgroup>
					</select>
				</div>

				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control" name="item_des">{{$item->description}}</textarea>
				</div>

				<input type="submit" value="Update" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
@endsection