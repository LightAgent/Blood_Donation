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
                    <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, <br>
                        aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                        sed sagittis at, sagittis quis neque. Praesent.</p>

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
                <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 vd">
            <div class="bkjiu">
                <img src="assets/images/gallery/g2.jpg" alt="">
                <h4><b>2 - </b>Seeing</h4>
                <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 vd">
            <div class="bkjiu">
                <img src="assets/images/gallery/g3.jpg" alt="">
                <h4><b>3 - </b>Donation</h4>
                <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 vd">
            <div class="bkjiu">
                <img src="assets/images/gallery/g4.jpg" alt="">
                <h4><b>4 - </b>Save Life</h4>
                    <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit lobortis</p>

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
                <h2>About Blood Doners</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some formhumour, or randomised words which don't look even slightly believable. If you are going to use a passage. industry's standard dummy has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="col-md-6 image">
                <img src="images/logo.jpg" height="400" alt="">
            </div>
        </div>
    </div>
</section>


@endsection