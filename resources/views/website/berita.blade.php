@extends('website.layout')
@section('content')
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">List Berita</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">List Berita</a></li>
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses area start -->
    <div class="courses-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Berita</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="properties properties2 mb-30">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{ asset('landing-page') }}/assets/img/gallery/featured4.png"
                                        alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage
                                    effectively with vulnerable children and young people.

                                </p>
      
                                <a href="/beritaview" class="border-btn border-btn2">Read more</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="properties properties2 mb-30">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{ asset('landing-page') }}/assets/img/gallery/featured5.png"
                                        alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage
                                    effectively with vulnerable children and young people.

                                </p>
                  
                                <a href="/beritaview" class="border-btn border-btn2">Read more</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="properties properties2 mb-30">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{ asset('landing-page') }}/assets/img/gallery/featured6.png"
                                        alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage
                                    effectively with vulnerable children and young people.
                                </p>

                                <a href="/beritaview" class="border-btn border-btn2">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mt-40">
                        <a href="#" class="border-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses area End -->
@endsection
