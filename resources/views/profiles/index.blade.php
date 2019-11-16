@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="clo-3 p-5">
            <img src="https://avatars2.githubusercontent.com/u/38535119?s=460&v=4" style="width: 200px" class="rounded-circle "  alt="">
         </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-lg-center">
                <h1> {{ $user->name }} </h1>
                <a  class="" href="#">Add new post </a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>102</strong> posts</div>
                <div class="pr-5"><strong>20K</strong> followers</div>
                <div class="pr-5"><strong>50</strong> follwing</div>
            </div>
            <div class="pt-4 font-weight-bold"> {{ $user->profile->title }} </div>
            <div> {{$user->profile->description }} </div>
            <div><a href="#"> {{$user->profile->url ?? 'N A'}} </a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="https://inspiredesign.me/wp-content/uploads/2017/02/Best-Desk-Setup-of-2017-9.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://inspiredesign.me/wp-content/uploads/2017/02/Best-Desk-Setup-of-2017-9.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://inspiredesign.me/wp-content/uploads/2017/02/Best-Desk-Setup-of-2017-9.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
