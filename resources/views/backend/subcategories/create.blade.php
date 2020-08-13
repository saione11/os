@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Subcategory Create(Form)</h2>
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
			<form method="POST" action="{{route('subcategories.store')}}" enctype="multipart/form-data">

				@csrf

				<div class="form-group">
					<label>Name</label>
					<input type="text" name="item_name" class="form-control">
				</div>
				<div class="form-group">
					<label>Category_id</label>
					<select name="category_id" class="form-control">
						<optgroup label="Choose subcategory">

						@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach

						</optgroup>
					</select>
				</div>

				<input type="submit" value="+ Add" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
@endsection