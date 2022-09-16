@extends("layouts.app")
@section("title","Welcome")
@section("head")

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet"> --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

@endsection

@section("content")        
<!-- ################# Slider Starts Here#######################--->

<div class="slider-detail">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/slider/slide-02.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                    <p class=" bounceInLeft">We always need new donors. Let us take you through the steps to becoming a donor and the process of getting that first appointment booked.</p>

                    <div class=" vbh">

                        <a href="/book" class="btn btn-success">Book Appointment</a> 
                    </div>
                </div>
            </div>
    </div>
</div>



<!-- ################# Donation Process Start Here #######################--->

<section id="process" class="donation-care">
    <div class="container">
    <div class="row session-title">
        <h2>Donation Process</h2>
    </div>
    <div class="row">
            <div class="col-md-3 col-sm-6 vd">
            <div class="bkjiu">
                <img src="assets/images/gallery/g1.jpg" alt="">
                <h4><b>1 - </b>Registration</h4>
                <p>Register for an account then book an appointment!</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 vd">
            <div class="bkjiu">
                <img src="assets/images/gallery/g2.jpg" alt="">
                <h4><b>2 - </b>Seeing</h4>
                <p>Make sure to arrive at the date you registered.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 vd">
            <div class="bkjiu">
                <img src="assets/images/gallery/g3.jpg" alt="">
                <h4><b>3 - </b>Donation</h4>
                <p>The entire process takes about 1 hour from testing your blood to finishing up your free snack!</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 vd">
            <div class="bkjiu">
                <img src="assets/images/gallery/g4.jpg" alt="">
                <h4><b>4 - </b>Save Lives</h4>
                    <p>Your blood saves lives. Your blood donation is an amazing gift to people who need it in an emergency or for on-going medical treatment. We need nearly 5,000 people to give blood every day to meet the needs of hospitals and patients.</p>

                </div> 
            </div>
        </div>
    </div>
</section>
<!-- ################# Gallery Start Here #######################--->
    
<div id="gallery" class="gallery container-fluid">
    <div class="container">
        <div class="row session-title">
            <h2>Checkout Our Gallery</h2>
        </div>
        <div class="gallery-row row">
                <div id="gg-screen"></div>
                    <div class="gg-box">
                            <div class="gg-element">
                                <img src="assets/images/gallery/g1.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g2.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g3.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g4.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g5.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g6.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g7.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g8.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g9.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g10.jpg">
                            </div>
                    </div>
        </div>
    </div>
</div>




<!--*************** About Us Starts Here ***************-->
<section id="about" class="contianer-fluid about-us">
    <div class="container">
        <div class="row session-title">
            <h2>About Us</h2>
        </div>
        <div class="row">
            <div class="col-md-6 text">
                <h2>About Blood Donors</h2>
                <p style="font-size: 20px">
                    Blood Donors is a charity dedicated to reducing worldwide inequities in blood safety and sufficiency. Since 2008, we have helped over 50 poorly resourced countries in Africa, Asia and Latin America better serve their communities.
                    Our experience from years of working in countries around the world has shown us that supporting voluntary, non-remunerated donation is the most effective and cost-efficient intervention.
                    Global Blood Fund has facilitated such efforts as establishing rural blood banks and supplying bloodmobiles to improve donor access and operational efficiency.
                    We also have resourced collectors by providing items such as donation couches, portable beds and recognition gifts to enhance comfort and encourage donors to return.
                </p>
            </div>
            <div class="col-md-6 image">
                <img src="images/logo.jpg" height="400" alt="">
            </div>
        </div>
    </div>
</section>


@endsection