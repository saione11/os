@extends('frontendtemplate')

@section('content')
<div class="col-lg-9"> 
	<div id="checkout_body">
		<div class="container py-3 text-center">
			<div class="row">
				<div class="offset-md-2 col-md-9">
					<h3 class=" py-3">Check Out</h3>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>No.</th>
									<th>Item Name</th>
									<th>Price</th>
									<th>Qty</th>
									<th>Sub Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Iphone 11</td>
									<td>1200000</td>
									<td>1</td>
									<td>1200000</td>
								</tr>
								<tr>
									<td colspan="4">Total</td>
									<td>1200000</td>
								</tr>
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
					<a href="#" class="btn btn-info">Continue Shopping</a>
				</div>
				<div class="offset-4 col-md-3 text-left">
						<button class="btn btn-info buy_now">Buy Now</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection