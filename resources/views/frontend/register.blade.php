@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9 py-4"> 
		<h2 class="text text-center pb-2">Create an Account!</h2>

		<div class="container">
			<div class="row">
				<div class="offset-3 col-md-6">
					<form method="POST" action="">

				@csrf

				<div class="form-group">
					<label>Photo</label>
					<input type="file" name="register_photo" class="form-control-file">
				</div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="register_name" class="form-control">
				</div>

				<div class="form-group">
					<label>Email :</label>
					<input type="email" name="register_email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password :</label>
					<input type="password" name="register_password" class="form-control">
				</div>
				<div class="form-group">
					<label>Confirm Password :</label>
					<input type="password" name="register_cpassword" class="form-control">
				</div>
				<div class="form-group">
					<label>Phone Number :</label>
					<input type="number" name="phone" class="form-control">
				</div>
				<div class="form-group">
					<label>Address :</label>
					<textarea class="form-control" ></textarea>
				</div>

				<input type="submit" value="Sign Up" class="btn btn-primary">
			</form>
				</div>
			</div>
		</div>

	</div>
	</div>
@endsection