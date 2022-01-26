@extends('dashbord.user.layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card text-center">
               
            <div class="p-5 bg-success text-white text-center">
              <h1> welcome à notre page web</h1>
              <p>
              {{ Auth::user()->name }}
              </p> 
            </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
