@extends('layouts.app')
@section('content')
<!-- END Breadcrumb -->
<div class="row">
    @include('tweet.create')
</div>

@include('tweet.tweets')

@endsection