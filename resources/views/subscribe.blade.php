@extends('layouts.app')
@section('post-js')
    <!--     <div class="breadcrumb-area gray-bg-7">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Subscription </li>
                    </ul>
                </div>
            </div>
        </div> -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-1">
                    <h2>Subscribe</h2>
 <form action="/subscribe" method="POST">
                    {{csrf_field()}}

                    

                    <input type="text" name="coupon">

                  <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_GryUHqXe48kgNc75J2BovmeN"
                    data-amount="1100"
                    data-name="Webcasts"
                    data-description="Subscribe to Awesome Blogs"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-label="Subscribe Now"
                    data-email="{{ auth()->check()?auth()->user()->email: null}}"
                    data-panel-label="Pay Monthly"
                    data-locale="auto">
                  </script>
                </form>


                </div>
            </div>
        </div>



@include('layouts.footer')
@endsection