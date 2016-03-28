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
                    <form action="">
                        <div class="form-group">
                            <label for="Course Name">Course Name</label>
                            <input type="text" name="name" value="{{$course->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label><br>
                            <textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group pull-right">
                            <submit class="btn btn-primary">Update Course Detail !</submit>
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
                    <form action="">
                        <div class="form-group">
                            <label for="New Cast">Add New Youtube Cast</label>
                            <input type="text" name="name" placeholder="Title For Screen Cast" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="url">URL of ScreenCast</label>
                            <input type="text" name="url" placeholder="http://www.youtu.be/embded/***" class="form-control">
                        </div>
                        <div class="form-group pull-right">
                            <submit class="btn btn-primary">Add This Cast </submit>
                        </div>
                    </form>
                    <!-- Cast List starts here -->
                    @if(isset('casts'))
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Cast Name</th>
                                    <th>Cast Url</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Some Name
                                    </td>
                                    <td>
                                        http://******
                                    </td>
                                    <td>

                                    </td>
                                </tr>
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