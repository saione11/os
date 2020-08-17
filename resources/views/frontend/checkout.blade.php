@extends('frontendtemplate')

@section('content')
<div class="col-lg-9"> 
	<div id="checkout_body">
		<div class="container py-3">
			<div class="row">
				<div class="offset-md-2 col-md-9">
					<h3 class="text-center py-3">Check Out</h3>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>No.</th>
									<th>Item Name</th>
									<th>Photo</th>
									<th>Price</th>
									<th>Qty</th>
									<th>Sub Total</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>

					</div>
				</div>

				<div class="offset-md-2 col-md-9">
					<div class="form-group">
						<textarea class="form-control notes" placeholder="notes"></textarea>
						<input type="hidden" name="" class="total">
					</div>
				</div>

				<div class="offset-2 col-md-3 text-left">
					<a href="{{route('homepage')}}" class="btn btn-info">Continue Shopping</a>
				</div>
				<div class="offset-4 col-md-3 text-left">
					@role('customer')
					<a href="#" class="btn btn-info buy_now">Check Out</a>
					@else
					<a href="{{route('login')}}" class="btn btn-info">Login To Check Out</a>
					@endrole
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}">
  
</script>
@endsection