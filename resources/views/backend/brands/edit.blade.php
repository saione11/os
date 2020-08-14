@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
		<h2>Brand Edit(Form/Old Value)</h2>
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
			<form method="POST" action="{{route('brands.update',$brand->id)}}" enctype="multipart/form-data">

				@csrf
				@method('PUT')

				<div class="form-group">
					<label>Name</label>
					<input type="text" name="item_name" value="{{$brand->name}}" class="form-control">
				</div>
				<div class="form-group">
					<label>Photo</label>
					<input type="file" name="newphoto" class="form-control-file"><br>

					<img src="{{asset($brand->photo)}}" class="img-fluid w-25">
					<input type="hidden" name="oldphoto" value="{{$brand->photo}}">
				</div>

				<input type="submit" value="+ Add" class="btn btn-primary">
			</form>
		</div>
	</div>
	</div>
@endsection