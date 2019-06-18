
@extends('frontend.layout.master')
@section('content')
      <!-- ****** Welcome Slides Area Start ****** -->
      <section class="welcome_area">
        <div class="welcome_slides owl-carousel">
            {{-- @foreach ($slides as $slide)
                
       
            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay" style="background-image: url(img/bg-img/{{$slide->image}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">* Only today we offer free shipping</h6>
                                <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">Fashion Trends</h2>
                                <a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s" data-duration="500ms">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}
           
        </div>
    </section>
    <!-- ****** Welcome Slides Area End ****** -->
       <!-- ****** Top Catagory Area Start ****** -->
       <section class="top_catagory_area d-md-flex clearfix">
        <!-- Single Catagory -->
        <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bannerheadweb02.jpg);">
            <div class="catagory-content">
                <h6>On Accesories</h6>
                <h2>Sale 30%</h2>
                <a href="#" class="btn karl-btn">SHOP NOW</a>
            </div>
        </div>
        <!-- Single Catagory -->
        <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bannerweb28.902.png);">
            <div class="catagory-content">
                <h6>in Bags excepting the new collection</h6>
                <h2>Designer bags</h2>
                <a href="#" class="btn karl-btn">SHOP NOW</a>
            </div>
        </div>
    </section>
    <!-- ****** Top Catagory Area End ****** -->
    <!-- ****** New Arrivals Area Start ****** -->
    <section class="new_arrivals_area section_padding_100_0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading text-center">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="karl-projects-menu mb-100">
            <div class="text-center portfolio-menu">
                <button class="btn active" data-filter="*">ALL</button>
                <button class="btn" data-filter=".women">WOMAN</button>
                <button class="btn" data-filter=".man">MAN</button>
                <button class="btn" data-filter=".access">ACCESSORIES</button>
                <button class="btn" data-filter=".shoes">shoes</button>
                <button class="btn" data-filter=".kids">KIDS</button>
            </div>
        </div>

        <div class="container">
            <div class="row karl-new-arrivals">

                @foreach ($featured as $product)
                   
                <!-- Single gallery Item -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item kids man wow fadeInUpBig" data-wow-delay="0.7s">
                    <!-- Product Image -->
                    <div style="height: auto" class="product-img">
                        <img height="350px" src="{{asset('lib/storage/app/avatar/'.$product->prod_img)}}" alt="">
                        <div class="product-quicview">
                                <a style="font-size: 14px" href="{{asset('detail/'.$product->prod_id.'/'.$product->prod_slug.'.html')}}">View</a>
                        </div>
                    </div>
                    <!-- Product Description -->
                    <div class="product-description">
                        <h4 class="product-price">{{number_format($product['price'])}} đ</h4>
                        <p><a href="{{asset('detail/'.$product->prod_id.'/'.$product->prod_slug.'.html')}}</a></p>
                        <!-- Add to Cart -->
                        <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- ****** New Arrivals Area End ****** -->

    <!-- ****** Offer Area Start ****** -->
    <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(img/bg-img/bg-5.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end justify-content-end">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                        <h2>White t-shirt <span class="karl-level">Hot</span></h2>
                        <p>* Free shipping until 25 Dec 2017</p>
                        <div class="offer-product-price">
                            <h3><span class="regular-price">$25.90</span> $15.90</h3>
                        </div>
                        <a href="#" class="btn karl-btn mt-30">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Offer Area End ****** -->

    <!-- ****** Popular Brands Area Start ****** -->
    <section class="karl-testimonials-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading text-center">
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="karl-testimonials-slides owl-carousel">

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="img/bg-img/tes-1.jpg" alt="">
                                </div>
                                <div class="testi-data">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="img/bg-img/tes-1.jpg" alt="">
                                </div>
                                <div class="testi-data">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area text-center">
                            <span class="quote">"</span>
                            <h6>Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. </h6>
                            <div class="testimonial-info d-flex align-items-center justify-content-center">
                                <div class="tes-thumbnail">
                                    <img src="img/bg-img/tes-1.jpg" alt="">
                                </div>
                                <div class="testi-data">
                                    <p>Michelle Williams</p>
                                    <span>Client, Los Angeles</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ****** Popular Brands Area End ****** -->


    <!-- ****** Quick View Modal Area Start ****** -->
    
    <!-- ****** Quick View Modal Area End ****** -->
@endsection