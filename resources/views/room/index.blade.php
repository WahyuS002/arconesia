@extends('layouts.frontend')

@section('content')
    <!-- Jumbotron -->
    <div class="container-fluid smaller pb-5">
        <div class="container">
            <div class="row h100">
                <div class="col-lg-12 col-xl-6 p-5" data-sal-duration="2000" data-sal-dalay="100"
                    data-sal-easing="ease-out-bounce" data-sal="slide-right">
                    <!-- Vetical Space -->
                    <div class="container h10"></div>
                    <h1 data-sal-duration="2000" data-sal-dalay="100" data-sal-easing="ease-out-bounce"
                        class=" text-uppercase">ROOM</h1>
                    <br>
                    <h3>Find Arconesia lastest information, Ideas, and Activity</h3>
                    <hr>
                    <br>
                </div>
                <div class="col-lg-12 col-xl-6 h50 p-5">
                    <img class="card-img-top" style="height: 80vh;" src="{{ asset('frontend/images/room_1.svg') }}" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>

    <!-- POSTING -->
    <div class="container">
        <div class="row">
            <!-- ROOM NAV -->
            <div class="col-lg-3 roomnav text-left mb-5 p-5">
                <div class="container-fluid">
                    <!-- SORT TOPICS/TAGS -->
                    <h5>TOPICS</h5>
                    <hr>
                    <br><br>
                    <a href="">
                        <p>Technology</p>
                        <br>
                    </a>

                    <a href="">
                        <p>Nature</p>
                        <br>
                    </a>
                    <a href="">
                        <p>Education</p>
                        <br>
                    </a>
                    <a href="">
                        <p>Travel</p>
                        <br>
                    </a>
                    <a href="">
                        <p>Lifestyle</p>
                        <br>
                    </a>
                    <br><br>
                    <!-- SORT TOPICS/TAGS END -->
                </div>

                <!-- SOCIAL MEDIA LINKS -->
                <div class="container-fluid">
                    <h5>GIVE US A FOLLOW</h5>
                    <hr>
                    <br><br>
                    <a href="">
                        <p><i style="font-size: 1em;" class="pr-2 fa fa-facebook"></i> Facebook</p>
                        <br>
                    </a>
                    <a href="">
                        <p><i style="font-size: 1em;" class="pr-2 fa fa-instagram"></i> Instagram</p>
                        <br>
                    </a>
                    <a href="">
                        <p><i style="font-size: 1em;" class="pr-2 fa fa-twitter"></i> Twitter</p>
                        <br>
                    </a>
                    <br><br>
                </div>
                <!-- SOCIAL MEDIA LINKS END-->
            </div>
            <!-- ROOM NAV END -->

            <div class="col-lg-9">
                <!-- CARDS POSTING CONTAINER -->
                <div class="container">
                    <div class="row">                        
                        <!--POSTING CARD START -->
                        @foreach ($posts as $post)
                        <div class="col-lg-4">
                            <!-- TAGS POSTING CARD -->
                            <h5 class="text-muted hoverfont"> NATURE | TECHNOLOGY </h5>
                            <!-- TAGS POSTING CARD END -->

                            <!-- LINK TO ARTICLE 1 POSTING -->
                            <a href="{{ route('article', $post->id) }}">
                                <div class="card mb-5 mt-1 warp" style="overflow: hidden;">
                                    <!-- ARTICLE IMAGE -->
                                    <img class="card-img-top bg-cover" src="{{ asset('frontend/images/mart7.jpeg') }}" alt="Card image cap">
                                    <!-- ARTICLE IMAGE END -->
                                    <h5 class="overlay mt-5 pt-5 color4 text-center hoverfont">
                                        READ MORE
                                    </h5>
                                    <div class="card-body">
                                        <div class="card-text">
                                            <!-- ARTCILE TITLE -->
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <!-- ARTCILE TITLE END -->
                                            <hr>

                                            <!-- ARTICLE DATE -->
                                            <p class=" text-muted pr-1 text-right"
                                                style="font-size: smaller; text-transform: uppercase;">
                                                {{ $post->created_at->diffForHumans() }}
                                            </p>
                                            <!-- ARTICLE DATE END -->

                                            <br>
                                            <!-- ARTICLE CONTENT -->
                                            <p class="card-text">{!! $post->body !!}</p>
                                            <br>
                                            <!-- ARTICLE CONTENT END -->

                                            <!-- LINK TO ARTICLE 2 POSTING -->
                                            <a href="{{ route('article', $post->id) }}">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <p class=" text-muted col-md-9 pr-1"
                                                            style="font-size: smaller;">
                                                            CONTINUE READING
                                                        </p>
                                                        <div class="col-md-3 p-0">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- LINK TO ARTICLE 2 POSTING END -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach                        
                        <!--POSTING CARD END-->                        

                    </div>
                </div>
                <!-- CARDS POSTING CONTAINER END -->

                <!-- LOAD POST -->
                <div class="container text-center">
                    <button type="button" class=" text-center d-inline hbtn hb-fill-right bg-color1 pl-4 pr-4">LOAD
                        MORE POST</button>
                </div>
                <!-- LOAD POST END -->
            </div>
        </div>
    </div>
    <!-- POSTING END -->

    <!-- Vetical Space -->
    <div class="container h20"></div>
@endsection