@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9"> 
		<h2>Profile Page</h2>
		Name :{{Auth::user()->name}}<br>
		Email :{{Auth::user()->email}}

	</div>
@endsection