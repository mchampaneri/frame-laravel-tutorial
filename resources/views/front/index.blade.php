@extends('front.layout')


@section('title')
    SkillBooster
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

                                <h3 style="color: #fff">
                                   Connect With Us
                                </h3>
                                <button class="btn btn-success"> Hello </button>
                            </div>
                            <div class="item">
                                <h3 style="color: #fff">
                                    Learn Much
                                </h3>
                                <p>
                                    Lorem ipsumdolor sitamet, consect adipiscing elit
                                    Lorem ipsumdolor sitamet, consect adipiscing elit.
                                    Lorem ipsumdolor sitamet, consect adipiscing elit
                                    Lorem ipsumdolor sitamet, consect adipiscing elit.
                                    Lorem ipsumdolor sitamet, consect adipiscing elit
                                    Lorem ipsumdolor sitamet, consect adipiscing elit.
                                    Lorem ipsumdolor sitamet, consect adipiscing elit
                                    Lorem ipsumdolor sitamet, consect adipiscing elit.
                                    Lorem ipsumdolor sitamet, consect adipiscing elit
                                    Lorem ipsumdolor sitamet, consect adipiscing elit.
                                    Lorem ipsumdolor sitamet, consect adipiscing elit
                                    Lorem ipsumdolor sitamet, consect adipiscing elit.
                                    Lorem ipsumdolor sitamet, consect adipiscing elit
                                    Lorem ipsumdolor sitamet, consect adipiscing elit.
                                    Lorem ipsumdolor sitamet, consect adipiscing elit
                                    Lorem ipsumdolor sitamet, consect adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="social" style="position: absolute; bottom: 20px;">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="handwritten"> Follow us.. </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="">
                            <i class="fa fa-facebook-square la-sym" ></i>
                        </a>
                        <a href="">
                            <i class="fa fa-google-plus-square la-sym" ></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter-square la-sym" ></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div id="courses">

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
                    </form>
                </div>

            </div>
        </div>
    </div>
 @endsection