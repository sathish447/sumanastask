@include('layouts.header')
<style type="text/css">
    .show-img{
        position: inherit;
    }
</style>
<div class="breadcrumb-area gray-bg-7">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Magazine Lists</li>
            </ul>

            <a href="{{ url('createmagazine') }}" class="btn btn-primary" style="float: right; background-color: #27aba6; border-color: #27aba6; margin-top: -25px;">Create Magazine</a>
        </div>
    </div>
</div>
<div class="shop-page-area pt-30 pb-65">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">

                <div class="tab-content jump">
                    <div class="tab-pane active pb-20" id="product-grid">
                        <div class="row">
                            @if(count($lists) > 0)
@foreach($lists as $key => $list)

                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-90">
                                <div class="devita-product-2 mrg-inherit">
                                    <div class="product-img">
                                        <div class="product-img-slider">
                                            <a href="#">
                                                <img class="show-img" src="{{ url($list->image) }}" alt=""></a>

                                            </div>
                                        </div>
                                        <div class="list-col">
                                            <div class="gridview">
                                                <div class="product-content text-center">
                                                    <span>{{ $list->frequency }}</span>
                                                    <h4><a href="#">{{ $list->name }}</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span><i class="fa fa-inr"></i>{{ $list->price }}</span>
                                                    
                                                    </div>
                                                </div>
                                                <div class="product-action-wrapper-2 text-center">


                                                    <div class="product-action">
<!--   <a class="same-action" title="Wishlist" href="#">
<i class="fa fa-heart-o"></i>
</a> -->
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
<!--    <a class="same-action compare-mrg" data-target="#exampleCompare" data-toggle="modal" title="Compare" href="#">
<i class="fa fa-sliders fa-rotate-90"></i>
</a> -->
</div>
</div>
</div>
</div>
</div>
</div>

@endforeach
@else
<div class="row">No record found</div>
@endif

</div>
</div>

<!-- <div class="pagination-total-pages">
    <div class="pagination-style">
        <ul>
            <li><a class="prev-next prev" href="#"><i class="ion-ios-arrow-left"></i> Prev</a></li>
            <li><a class="active" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">10</a></li>
            <li><a class="prev-next next" href="#">Next<i class="ion-ios-arrow-right"></i> </a></li>
        </ul>
    </div>
    <div class="total-pages">
        <p>Showing 1 - 20 of 30 results  </p>
    </div>
</div> -->
</div>
</div>
<div class="col-lg-3">
    <div class="shop-sidebar-wrapper gray-bg-7 mrg-top-md mrg-top-sm">
        <div class="shop-widget">
            <h4 class="shop-sidebar-title">Shop By Categories</h4>
            <div class="shop-widget mt-20 shop-sidebar-border pt-15">
                <h4 class="shop-sidebar-title">By Frequency</h4>
                <div class="sidebar-list-style mt-20">
                    <ul>
                        <li><input type="checkbox"><a href="#">Daily </a></li>
                        <li><input type="checkbox"><a href="#">Weakly </a></li>
                        <li><input type="checkbox"><a href="#">Monthly </a></li>
                        <li><input type="checkbox"><a href="#">Yearly </a></li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>




<div class="footer-bottom black-bg-2 pb-25 pt-25">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="copyright text-center">
                    <p>


                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved


                    </p>
                </div>
            </div>
        </div>
    </div>
</div>




@include('layouts.footer')


<script>
    jQuery(document).ready(function(){
        jQuery('.fa-sliders').click(function(){
            jQuery('.compare_bar').removeAttr('style');
            jQuery('.comparePanle').attr('style');
        });
        jQuery('.compare_bar').click(function(){
            jQuery('.comparePanle').removeAttr('style');
        });
        jQuery('.compare_bar').click(function(){
            jQuery('.comparePanle').removeAttr('style');
        });
    });
</script>

</body>
</html>
