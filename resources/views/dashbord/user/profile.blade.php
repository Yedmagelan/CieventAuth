@extends('dashbord.user.layouts.user')

@section('content')
<div class="content-wrapper">
    
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Profile
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span> Aperçu <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>


       
            <div class="card">
                  <div class="card-body">
                    <h2 class="card-title bg-gradient-primary p-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Page profile </font></font></h2>
                    <div class="container rounded bg-white mt-5 mb-5">
                    <div class="row">
                    @if(session('success'))
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                             <strong>{{session('success')}}</strong>
                       </div>
                    @endif
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle mt-5" width="150px" src="{{ asset('assets_admin/assets/images/faces/face1.jpg') }}" alt="profile">
                                <span class="font-weight-bold">{{ Auth::user()->name }}</span>
                                <span class="text-black-50 py-2">{{ Auth::user()->email }}</span>
                                <span class="text-black-50 py-3">
                                  <a href="{{ route('user.updatePwd') }}">Changer Mot de passe</a>
                                </span>
                            </div>
                         </div>
                        <div class="col-md-7">
                                <div class="text-center">
                                    <h4 class="text-center bg-gradient-primary p-2">
                                    Votre Profile
                                  </h4>
                                </div>
                  <!-- Pour Changer Mot de passe form -->
                     <form class="forms-sample" action="{{ route('user.update') }}" method="POST" >

                         @csrf
                       <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    

                      <div class="form-group">
                        <label for="exampleInputUsername1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom d'utilisateur</font></font></label>
                        <input type="text" name="name" class="form-control" id="exampleInputUsername1" value="{{ Auth::user()->name }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prénoms d'utilisateur</font></font></label>
                        <input type="text" name="prenom" class="form-control" id="exampleInputUsername1" value="{{ Auth::user()->prenom }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adresse e-mail</font></font></label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ Auth::user()->email }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact</font></font></label>
                        <input type="text" name="contact" class="form-control" id="exampleInputEmail1" value="{{ Auth::user()->contact }}">
                      </div>
                     
                      <button type="submit" class="btn btn-gradient-primary me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modifier</font></font></button>
                      <a href="{{ url('/user/dashbord/') }}" class="btn btn-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Annuler</font></font></a>
                    </form>
                    </div>
                    </div>
                     </div>
                    </div>
                  </div>
                  </div>
                </div>
</div>
@endsection
