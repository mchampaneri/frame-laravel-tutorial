@extends('admin.layout')

@section('title') Site Profile @endsection

@section('preload')
@endsection

@section('content-header') Site Profile @endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Set Your Site Profile</h3>
                </div>
                <div class="box-body">
                    <form action="{{url('/setsiteprofile')}}" method="post" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Site Name">Site Name</label>
                            <input type="text" class="form-control"  value="{{$site_name}}" name="site_name">
                        </div>
                        <div class="form-group">
                            <label for="Twitter">Twitter Address</label>
                            <input type="text" class="form-control"  value="{{$twitter_url}}" name="twitter_url">
                        </div>
                        <div class="form-group">
                            <label for="Twitter">Facebook Address</label>
                            <input type="text" class="form-control"  value="{{$facebook_url}}" name="facebook_url">
                        </div>
                        <div class="form-group">
                            <label for="Twitter">Google Plus Address</label>
                            <input type="text" class="form-control"  value="{{$google_plus_url}}" name="google_plus_url">
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" value="Store" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection