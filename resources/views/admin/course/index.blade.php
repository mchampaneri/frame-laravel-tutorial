@extends('admin.layout')

@section('title') All Availabel Courses @endsection

@section('preload')
@endsection

@section('content-header') Course List @endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create A New Course</h3>
                </div>
                <div class="box-body">

                    @if(isset($courses))
                    <table class="table">
                        <thead>
                            <th>Course Name</th>
                            <th>Course Description</th>
                            <th>Number of ScreeCasts</th>
                            <th>Likes</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td>{{$course->name}}</td>
                                <td>This is a Good Course</td>
                                <td>10</td>
                                <td>1200</td>
                                <td>
                                    <form action="{{route('courses.destroy',['id'=>$course->id])}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <a href="#" class="btn btn-primary">Update Course</a>
                                        <input type="submit" class="btn btn-danger" value="Remove"/>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <h5> No Course Found</h5>
                    @endif
                </div>
            </div>
         </div>
    </div>

@endsection