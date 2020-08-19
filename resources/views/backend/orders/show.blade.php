@extends ('backendtemplate')

@section('content')


		
<div class="container-fluid">
	{{-- <h2 class="d-inline-block py-3">Order Detail (Table)</h2> --}}
	{{-- <p>Voucherno: {{$order->voucherno}}</p> --}}

	<table class="table">
		<thead>
			<tr>
				<th colspan="6" class="text-center">
					<h2>Sai One's Shop</h2>

					<h5>Mandalay</h5>
					<h5 class="pt-4">Tel: 0943011559</h5>
				</th>
			</tr>

			<tr>
				<th colspan="4">
					<div class="row">

						<div class="col-md-3">
							<p>Cashier</p>
						</div>

						<div class="col-md-3">
							<p>: &nbsp;&nbsp;&nbsp; {{Auth::user()->name}}</p>
						</div>

						<div class="col-md-3">
							<p>Date</p>
						</div>

						<div class="col-md-3">
							<p>: &nbsp;&nbsp;&nbsp; {{$order->orderdate}}</p>
						</div>

						<div class="col-md-3">
							<p>VoucherNo</p>
						</div>

						<div class="col-md-3">
							<p>: &nbsp;&nbsp;&nbsp; {{$order->voucherno}}</p>
						</div>

						<div class="col-md-3">
							<p>Time</p>
						</div>

						<div class="col-md-3">
						<p>: &nbsp;&nbsp;&nbsp;  {{$order->created_at}}</p>
						</div>

					</div>
				</th>
			</tr>
			<tr>
				<th>No.</th>

				<th>Name:</th>

				<th>Price:</th>
				<th>Discount:</th>
				<th>Qualtity:</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i=1;
			@endphp
			@foreach($order->items as $item)

			<tr>
				<td>{{$i++}}</td>

				<td>{{$item->name}}</td>

				<td>{{$item->price}}</td>
				<td>{{$item->discount}}</td>

				<td>{{$item->pivot->qty}}</td>
				<td>{{$item->pivot->qty*$item->price}}</td>


			</tr>
			@endforeach
			<tr>
				<td colspan="5" class="text-right">Total</td>
				<td>{{$order->total}}</td>
			</tr>

		</tbody>
	</table>

</div>


@endsection