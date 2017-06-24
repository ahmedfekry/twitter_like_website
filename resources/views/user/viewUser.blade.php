@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-md-12">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-aqua-active">
        <h3 class="widget-user-username">{{Auth::user()->name}}</h3>
        <h5 class="widget-user-desc">{{Auth::user()->username}}</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="img/demo/80x80.gif" alt="User Avatar">
      </div>
      <br>
      
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">{{count($user->tweets)}}</h5>
              <span class="description-text">TWEETS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">{{count($user->followers)}}</h5>
              <span class="description-text">FOLLOWERS</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">{{count($user->following)}}</h5>
              <span class="description-text">FOLLOWING</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="col-sm-12">
          <div class="description-block">
            @if($type == 'not following')
              <a href="{{url('follow/'.$user->id)}}" class="btn btn-primary"><li class="fa fa-twitter"> Follow</li></a>
            @endif
          </div>
        </div>
      </div>
    </div>
    
    <!-- /.widget-user -->
  </div>
</div>
@include('tweet.tweets')
@endsection