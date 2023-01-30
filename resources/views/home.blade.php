@extends('layouts.app')
@section('content')
@include('layouts.menubar')

@php
$order = DB::table('orders')->where('user_id',Auth::id())->orderBy('id','DESC')->limit(10)->get();
@endphp

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Hello!! {{Auth::user()->name}}</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>My Account</li><li>{{Auth::user()->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->


    <!-- WISHLIST AREA START -->
    <div class="liton__wishlist-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- PRODUCT TAB AREA START -->
                    <div class="ltn__product-tab-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2" style="padding-right: 0;
                                padding-left: 0;">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav">
                                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_1_1">Dashboard <i class="fas fa-home"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_1_2">Orders <i class="fas fa-file-alt"></i></a>
                                            {{-- <a data-bs-toggle="tab" href="#liton_tab_1_3">Downloads <i class="fas fa-arrow-down"></i></a> --}}
                                            {{-- <a data-bs-toggle="tab" href="#liton_tab_1_4">Address <i class="fas fa-map-marker-alt"></i></a> --}}
                                            <a data-bs-toggle="tab" href="#liton_tab_1_5">Account Details <i class="fas fa-user"></i></a>
                                            <a href="{{ route('user.logout') }}">Logout <i class="fas fa-sign-out-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10" style="padding-right: 0;
                                padding-left: 0;">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="liton_tab_1_1">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Hello <strong>{{Auth::user()->name}}</strong>
                                                <p>From your account dashboard you can view your <span>recent orders</span>, manage your <span>shipping and billing addresses</span>, and <span>edit your password and account details</span>.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_1_2">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-dark">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">Payment Type </th>
                                                            <th scope="col">Payment ID </th>
                                                            <th scope="col">Amount </th>
                                                            <th scope="col">Date </th>
                                                            <th scope="col">Status  </th>
                                                            <th scope="col">Status Code </th>
                                                            <th scope="col">Action </th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($order as $row)
                                                            <tr>
                                                              <td scope="col">{{ $row->payment_type }} </td>
                                                              <td scope="col">{{ $row->payment_id }} </td>
                                                              <td scope="col">{{ $row->total }}$  </td>
                                                              <td scope="col">{{ $row->date }}  </td>

                                                               <td scope="col">
                                                          @if($row->status == 0)
                                                          <span class="badge badge-warning">Pending</span>
                                                          @elseif($row->status == 1)
                                                          <span class="badge badge-info">Payment Accept</span>
                                                            @elseif($row->status == 2)
                                                            <span class="badge badge-warning">Progress</span>
                                                            @elseif($row->status == 3)
                                                            <span class="badge badge-success">Delevered</span>
                                                            @else
                                                            <span class="badge badge-danger">Cancel</span>

                                                          @endif

                                                                </td>

                                                              <td scope="col">{{ $row->status_code }}  </td>
                                                              <td scope="col">
                                                             <a href="" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modals" class="btn btn-sm btn-info"> View</a>
                                                               </td>
                                                            </tr>
                                                             @endforeach

                                                        </tbody>
                                                      </table>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="tab-pane fade" id="liton_tab_1_3">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Date</th>
                                                                <th>Expire</th>
                                                                <th>Download</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Carsafe - Car Service PSD Template</td>
                                                                <td>Nov 22, 2020</td>
                                                                <td>Yes</td>
                                                                <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Carsafe - Car Service HTML Template</td>
                                                                <td>Nov 10, 2020</td>
                                                                <td>Yes</td>
                                                                <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Carsafe - Car Service WordPress Theme</td>
                                                                <td>Nov 12, 2020</td>
                                                                <td>Yes</td>
                                                                <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="tab-pane fade" id="liton_tab_1_4">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>The following addresses will be used on the checkout page by default.</p>
                                                <div class="row">
                                                    <div class="col-md-6 col-12 learts-mb-30">
                                                        <h4>Billing Address <small><a href="#">edit</a></small></h4>
                                                        <address>
                                                            <p><strong>Alex Tuntuni</strong></p>
                                                            <p>1355 Market St, Suite 900 <br>
                                                                San Francisco, CA 94103</p>
                                                            <p>Mobile: (123) 456-7890</p>
                                                        </address>
                                                    </div>
                                                    <div class="col-md-6 col-12 learts-mb-30">
                                                        <h4>Shipping Address <small><a href="#">edit</a></small></h4>
                                                        <address>
                                                            <p><strong>Alex Tuntuni</strong></p>
                                                            <p>1355 Market St, Suite 900 <br>
                                                                San Francisco, CA 94103</p>
                                                            <p>Mobile: (123) 456-7890</p>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_1_5">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>The following addresses will be used on the checkout page by default.</p>
                                                <div class="ltn__form-box">
                                                        <div class="row mb-50">
                                                            <div class="col-md-12">
                                                                {{-- <img style="width:75px;height:75px;
                                                                border-radius: 100%;
                                                                overflow: hidden;display:block;" src="{{asset('img/avatar.jpg')}}" alt=""> --}}
                                                                 <span class="card-title text-center"><strong>Customer Name:</strong>  {{ Auth::user()->name }}</span>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <span class="card-title text-center"><strong>Display Phone Number:</strong> {{ Auth::user()->phone }}</span>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <span class="card-title text-center"><strong>Display Email:</strong> {{ Auth::user()->email }}</span>
                                                            </div>
                                                        </div>
                                                        <form method="POST" action="{{ route('password.update') }}" aria-label="{{ __('Reset Password') }}">
                                                            @csrf
                                                        <fieldset>
                                                            <legend>Password change</legend>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>Current password (leave blank to leave unchanged):</label>
                                                                    <input id="oldpass" type="password" class="form-control{{ $errors->has('oldpass') ? ' is-invalid' : '' }}" name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required autofocus>
                                                                    @if ($errors->has('oldpass'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('oldpass') }}</strong>
                                                                    </span>
                                                                @endif
                                                                    <label>New password (leave blank to leave unchanged):</label>
                                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                                    @if ($errors->has('password'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                    </span>
                                                                @endif
                                                                    <label>Confirm new password:</label>
                                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="btn-wrapper">
                                                            <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT TAB AREA END -->
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->












<!-- Tracking MODAL AREA START (Quick View Modal) -->
<div class="ltn__modal-area ltn__quick-view-modal-area">
    <div class="modal fade" id="quick_view_modals" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <i class="fas fa-times"></i> -->
                    </button>
                </div>
                <div class="modal-body">
                     <div class="ltn__quick-view-modal-inner">
                         <div class="modal-product-item">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="modal-product-info">
                                        <form method="post" action="{{ route('order.tracking') }}">
                                            @csrf
                                            <p class="text-center"> To track your order please enter your Order ID in the box below and press the "Track Order" button. This was given to you on your products current state. </p>
                                            <label>Order ID</label>
                                            <input type="text" name="code" placeholder="Please input your order id" required="">
                                            <div class="btn-wrapper mt-0 text-center">
                                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Track Order</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Tracking MODAL AREA END -->









@endsection
