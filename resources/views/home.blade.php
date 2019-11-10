@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="clo-3 p-5">
            <img src="https://avatars2.githubusercontent.com/u/38535119?s=460&v=4" style="width: 200px" class="rounded-circle "  alt="">
         </div>
        <div class="col-8 pt-5">
            <div>
                <h1> {{ $user->username }} </h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>102</strong> posts</div>
                <div class="pr-5"><strong>20K</strong> followers</div>
                <div class="pr-5"><strong>50</strong> follwing</div>
            </div>
            <div class="pt-4 font-weight-bold">AmineBouaziz.website </div>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis facilis fugiat incidunt laborum, nam tenetur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus excepturi harum incidunt, molestias nobis temporibus!</div>
            <div><a href="#">www.aminebouaziz.website</a></div>
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
