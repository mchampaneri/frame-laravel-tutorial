@extends('front.course-layout')


@section('title')
    {{ $course->name }}
@endsection

@section('preload')

@endsection


@section('content')
    <div id="caster">

            <div id="thing-with-videos" >
                <div style="background-color: #353A40; box-shadow: 2px 3px 2px #444; padding: 20px; margin-bottom: 40px">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="brand">
                                    <a href="{{url('/')}}"><h2> BRAND <small class="handwritten">Learning The Skills</small> </h2> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div style="background-color:#000;">
                    <div class="container" style="padding: 10px; height:600px; width: 1000px;" >
                         @if(isset($cast))
                         <iframe width="100%" height="100%" src="{{ $cast->url }}" frameborder="0"></iframe>
                         {{--@else--}}
                            {{--<iframe width="100%" height="100%" src="#" frameborder="0"></iframe>--}}
                         @else
                            <center>
                                <h3>Course Description</h3>
                                <h4>{{ $course->description }}</h4>
                            </center>
                         @endif
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                       <center><h3  style="cursor: pointer">  {{$course->name}}  </h3> </center>
                    </div>
                </div>

            <div class="container">

            @if(isset($course) && sizeof($course->casts())>0  )

                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Cast Name</th>
                                <th>Play</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($course->casts() as $cast)

                            <tr>
                                <td>{{ $cast->name }}</td>

                                <td>
                                    <a href="{{url('/view/'.$course->id.'/'.$cast->id)}}" style="width: 100%">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>

            @else
                <h4>No Casts For This Course</h4>
            @endif
            </div>
    </div>

@endsection

@section('postload')
    <script>
        $(document).ready(function(){
            // Target your .container, .wrapper, .post, etc.
            $("#thing-with-videos").fitVids();
        });
    </script>
@endsection