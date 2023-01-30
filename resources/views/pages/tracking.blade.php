@extends('layouts.app')

@section('content')


<div class="contact_form">
	<div class="container">
		<div class="row">

  <div class="col-5 offset-lg-1">
   <div class="contact_form_title"> <h4> Your Order Status </h4></div>


   <div class="progress">

    @if($track->status == 0)

  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>

   @elseif($track->status == 1)
   <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>

   <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>

  @elseif($track->status == 2)
  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>

  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>

  <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>

  @elseif($track->status == 3)
  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>

  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>

  <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>

  <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 35%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>

    @else

  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
    @endif

</div><br>

 @if($track->status == 0)
 <h4>Note : The order you placed is being reviewed  </h4>

 @elseif($track->status == 1)
  <h4>Note : Payment Accept Under Process  </h4>

   @elseif($track->status == 2)
  <h4>Note : The packaging has been completed and the handover process has begun  </h4>

  @elseif($track->status == 3)
  <h4>Note : The order has been successfully completed </h4>

 @else

 <h4>Note : Order Cancel  </h4>

 @endif




  </div>









  <div class="col-5 offset-lg-1">
   <div class="contact_form_title"><h4> Your Order Details</h4> </div>

  <ul class="list-group col-lg-12 bg-dark">
  	<li class="list-group-item"> <b>Payment Type:</b> {{ $track->payment_type  }} </li>
  	<li class="list-group-item"> <b>Transection ID:</b> {{ $track->payment_id  }}</li>
  	<li class="list-group-item"> <b>Balance ID:</b> {{ $track->blnc_transection  }}</li>
  	<li class="list-group-item"> <b>Subtotal:</b> $ {{ $track->subtotal  }}</li>
  	<li class="list-group-item"> <b>Shipping:</b> $ {{ $track->shipping  }}</li>
  	<li class="list-group-item"> <b>Vat:</b> $ {{ $track->vat  }}</li>
  	<li class="list-group-item"> <b>Total:</b> $ {{ $track->total  }}</li>
  	<li class="list-group-item"> <b>Month:</b> {{ $track->month  }}</li>
  	<li class="list-group-item"> <b>Date:</b> {{ $track->date  }}</li>
  	<li class="list-group-item"> <b>Year:</b> {{ $track->year  }}</li>


  </ul>

  {{-- <a href="" @click.prevent="printme" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> --}}
  </div>





		</div>

	</div>

</div>










@endsection
