@extends('front.layout')


@section('title')
    {{$site_name}}
@endsection
@section('preload')
@endsection


@section('content')

    <div id="home" style="position: relative" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
                    <div id="carousel-slider" data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">

                        <div class="carousel-inner">
                            <div class="item active">
                                <h1 style="font-size: 7em; color: #000"> Logo </h1>
                                <h2>
                                    Learn with us.
                                </h2>
                                <h4>
                                    What We Know , You Should Know
                                </h4>
                            </div>
                           
                        </div>
                    </div>


                </div>
            </div>
            @if($facebook_url!=''||$google_plus_url!=''||$twitter_url!='')
            <div class="social" style="position: absolute; bottom: 20px;">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="handwritten"> Follow us.. </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        @if($facebook_url!='')
                        <a href="{{$facebook_url}}">
                            <i class="fa fa-facebook-square la-sym" ></i>
                        </a>
                        @endif
                        @if($google_plus_url!='')
                        <a href="{{$google_plus_url}}">
                            <i class="fa fa-google-plus-square la-sym" ></i>
                        </a>
                        @endif
                        @if($twitter_url!='')
                        <a href="{{$twitter_url}}">
                            <i class="fa fa-twitter-square la-sym" ></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endif
    </div>
    </div>


    <div id="courses">
            <div class="continer">
                <div class="row">
                    @if(isset($courses))
                        <h3> Courses </h3><h5>Provided by Us With Proud</h5>
                    @foreach($courses as $course)
                    <div class="col-md-3">
                        <a href="{{url('/view/'.$course->id)}}">
                        <div class="course">
                            <img src="{{asset('/framework/front/assets/img/fl-logo.ico')}}" alt="Course1" height="100%" width="90%">

                            <div class="course-name">
                                    <h4>{{ $course->name }}</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                    @else
                        <h4> Sorry! No Courses At This Moment </h4>
                    @endif
                </div>
            </div>
    </div>
    <div id="aboutus">

            <div id="thing-with-videos" style="height: 100%; padding: 10%; padding-top: 0">
                <h2 style="text-align: center;"> About US </h2>
                </br>
                </br>

            </div>

        <script>
            $(document).ready(function(){
                // Target your .container, .wrapper, .post, etc.
                $("#thing-with-videos").fitVids();
            });
        </script>
    </div>

    <div id="contact">
        <div class="container" style="">
            <div class="contact-wrapper">
                <h3 style="text-align: center"> Contact us</h3>
                <div class="contact-form">
                    <form action="">
                        <div class="form-group">
                            <label for="Name">Your Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Email">Your Email Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Message">Your Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info">Send Message</button>
                        </div>
                    </form>
                    <hr>
                    <div class="row">
                        <div style="text-align: center"><a href="http://projectsofmeblogspot.in">
                                                                  @  Manish  H. Champaneri
                                                        </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
 @endsection