@extends('admin.layout')

@section('title') Update Course @endsection

@section('preload')
@endsection

@section('content-head')
    Update Your Coures
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Course</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('courses.update',['id'=>$course->id])}}" method="post">
                       {{ csrf_field()  }}
                        <input type="hidden" value="put" name="_method">
                        <div class="form-group">
                            <label for="Course Name">Course Name</label>
                            <input type="text" name="name" value="{{$course->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label><br>
                            <textarea name="description"  class="form-control" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group pull-right">
                            <input type="submit" class="btn btn-primary" value="Update Course!"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                     <h3 class="box-title">Add youtube Casts To course</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('casts.store')}}" method="post">

                        {{ csrf_field()  }}
                        <input type="hidden" name="course_id" value="{{$course->id}}" >
                        <div class="form-group">
                            <label for="New Cast">Add New Youtube Cast</label>
                            <input type="text" name="name" placeholder="Title For Screen Cast" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="url">URL of ScreenCast</label>
                            <input type="text" name="url" placeholder="http://www.youtu.be/embded/***" class="form-control">
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" class="btn btn-primary" value="Add Screen Cast!"/>
                        </div>
                    </form>
                    <!-- Cast List starts here -->
                    @if(isset($casts))
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Cast Name</th>
                                    <th>Cast Url</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($casts as $cast)
                                <tr>
                                    <td>
                                        {{ $cast->name }}
                                    </td>
                                    <td>
                                       {{ $cast->url }}
                                    </td>
                                    <td>
                                        <form action="{{route('casts.destroy',['id'=>$cast->id])}}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="submit" class="btn btn-danger" value="Remove">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h5>No Cast Found For This Course</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection