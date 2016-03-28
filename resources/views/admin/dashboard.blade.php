<!--
 * Created by PhpStorm.
 * User: Manish Champaneri
 * Date: 25-03-2016
 * Time: 19:30
 -->

@extends('admin.layout')

@section('title')
    Dashborad
@endsection

@section('preload')
@endsection

@section('content-Header')
    You are on the home page
@endsection

@section('content')

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>150</h3>

                <p>Total Courses</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>150</h3>
                <p>Total Casts</p>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
             <div class="inner">
                  <h3>150</h3>
                  <p>New Questions</p>
             </div>
             <div class="icon">
                  <i class="ion ion-bag"></i>
             </div>
             <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
 </div>

@endsection