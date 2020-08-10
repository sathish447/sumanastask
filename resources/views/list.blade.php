@include('layouts.header')
        <div class="breadcrumb-area gray-bg-7">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Lists </li>
                    </ul>
                </div>
            </div>
        </div>
        @include('layouts.message')
         <!-- shopping-cart-area start -->
        <div class="cart-main-area pt-40 pb-25">
            <div class="container">
                <h3 class="page-title">Magazine List</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive wishlist">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Magazine Image</th>
                                            <th>Magazine Name</th>
                                            <th>Magazine Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lists as $list)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{ url($list->image) }}" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{ $list->name }}</a></td>
                                            <td class="product-price-cart"><span class="amount"><i class="fa fa-inr"></i>{{ $list->price }}</span></td>
                                            <td class="product-wishlist-cart">
                                               


                  <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_MZrGuVhnqg8KTUvWzzGVZuk4"
                    data-amount="{{ $list->price }}"
                    data-name="Webcasts"
                    data-description="Subscribe to Awesome Blogs"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-label="Subscribe ₹{{ $list->price }}"
                    data-email="{{ auth()->check()?auth()->user()->email: null}}"
                    data-panel-label="Pay Monthly"
                    data-locale="auto">
                  </script>



                                            </td>
                                        </tr>
                                       @endforeach
                                      
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         
        </div>
       
               
        
@include('layouts.footer')