@extends('dashbord.admin.layouts.admin')

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


            @if(session('success'))
            
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>{{session('success')}}</strong>
            </div>
            @endif
       
            <div class="card">
                  <div class="card-body">
                    <h2 class="card-title bg-gradient-primary p-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Page profile </font></font></h2>
                    <div class="container rounded bg-white mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle mt-5" width="150px" src="{{ asset('assets_admin/assets/images/faces/face1.jpg') }}" alt="profile">
                                <span class="font-weight-bold">{{ Auth::user()->name }}</span>
                                <span class="text-black-50 py-2">{{ Auth::user()->email }}</span>
                                <span class="text-black-50 py-3">
                                  <a href="{{ route('admin.profile') }}">Modifier son Profile</a>
                                </span>
                            </div>
                         </div>
                        <div class="col-md-7">
                                <div class="text-center">
                                    <h4 class="text-center bg-gradient-primary p-2">
                                   Changer Son Mot de Passe
                                  </h4>
                                </div>
                    <!-- Pour Changer Mot de passe  -->
                    <form class="forms-sample" action="{{ route('admin.pwdProfile') }}" method="POST" >
                         @csrf
                       <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                    

                     <div class="text-center">
                      <div class="form-group">
                        <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mot de passe</font></font></label>
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" required autocomplete="password" id="exampleInputPassword1" placeholder="Nouveau mot de passe">
                        @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mot de passe</font></font></label>
                        <input type="password" name="password_confirmation" required autocomplete="new-password" class="form-control" id="exampleInputPassword1" placeholder="Confirmez encore mot de passe">
                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modifier</font></font></button>
                      <a href="{{ url('/admin/dashbord/users/') }}" class="btn btn-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Annuler</font></font></a>
                    </form>

                    </div>
                     </div>
                    </div>
                  </div>
                  </div>
                </div>
</div>
@endsection
