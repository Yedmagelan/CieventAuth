@extends('dashbord.user.layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card text-center">
               
            <h1> Bonjour {{ Auth::user()->name }}</h1>
                
            </div>
        </div>
    </div>
</div>
@endsection
