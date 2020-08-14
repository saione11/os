@extends('frontendtemplate')

@section('content')
	<div class=" col-lg-9 py-4"> 
		<h2 class="text text-center pb-2">Login</h2>
		<div class="container">
			<div class="row">
				<div class="offset-3 col-md-6">
					<form method="POST" action="">

				@csrf

				<div class="form-group">
					<label>Email :</label>
					<input type="email" name="login_email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password :</label>
					<input type="password" name="login_password" class="form-control">
				</div>

				<input type="submit" value="login" class="btn btn-primary">
			</form>
				</div>
			</div>
		</div>

	</div>
@endsection