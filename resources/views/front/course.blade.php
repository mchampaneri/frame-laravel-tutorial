@extends('front.course-layout')


@section('title')
    {{ $course->name }}
@endsection

@section('preload')

@endsection


@section('content')
    <div id="caster">

            <div id="thing-with-videos" >
                <div style="background-color: rgba(231, 97, 97, 0.7); box-shadow: 2px 3px 2px #444; padding: 20px; margin-bottom: 40px">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 pull-left">
                                <div class="brand">
                                   <h3> BRAND </h3>
                                </div>
                            </div>
                            <div class="col-md-9 pull-right">
                                <div class="motto">
                                     <h3 class="handwritten">Learning The Skills</h3>
                                </div>
                            </div>
                            <div style="clear: both"></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                      <h4  class="pull-left" style="cursor: pointer"> Current Course : {{$course->name}}  </h4>
                      <h4  class="pull-right"><a href="{{url('/')}}">Go Back<i class="fa fa-home"></i></a></h4>
                    </div>
                </div>
                <div style="background-color:rgba(200,100,100,0.4);">
                    <div class="container" style="padding: 10px; height:600px; width: 1000px;" >
                         @if(isset($cast))
                         <iframe width="100%" height="100%" src="{{ $cast->url }}" frameborder="0"></iframe>
                         {{--@else--}}
                            {{--<iframe width="100%" height="100%" src="#" frameborder="0"></iframe>--}}
                         @endif
                    </div>
                </div>
                </br>
            </div>


            @if(isset($course))
                    <div class="container">
                    <table class="table table-hover">
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
                                <td><a href="{{url('/view/'.$course->id.'/'.$cast->id)}}"><i class="fa fa-play"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
            @else
                <h4>No Casts For This Course</h4>
            @endif

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