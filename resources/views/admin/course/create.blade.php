@extends('admin.layout')

@section('title') New Course @endsection

@section('preload')
@endsection

@section('content-header') Create New Course @endsection

@section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create A New Course</h3>
                        </div>
                        <div class="box-body">
                            <form action="{{route('courses.store')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Course Title">Course Title</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Course Description</label><br>
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                </div>

                                <div class="form-group pull-right">
                                    <button class="btn btn-success">Create New Course !</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>

@endsection