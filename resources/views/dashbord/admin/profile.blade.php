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
                    <h4 class="card-title bg-gradient-primary p-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Formulaire de créaction d'utilisateur </font></font></h4>



                    <form class="forms-sample" action="{{ route('admin.store') }}" method="POST" >
                         @csrf

                      <div class="row">
                         <div class="form-group col-md-6">
                           <label for="exampleInputUsername1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom d'utilisateur</font></font></label>
                           <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nom d'utilisateur" value="{{ old('prenom') }}" required autocomplete="name" autofocus>
                           @error('name')
                              <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                         </div>
                         <div class="form-group col-md-6">
                           <label for="exampleInputUsername1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prénoms d'utilisateur</font></font></label>
                           <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="Prénoms d'utilisateur" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                           @error('prenom')
                              <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                          </div>

                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adresse e-mail</font></font></label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Adresse email d'utilisateur" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                       
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact</font></font></label>
                        <input type="tel" name="contact" class="form-control @error('contact') is-invalid @enderror" placeholder="Contact d'utilisateur" value="{{ old('contact') }}" required autocomplete="contact" autofocus>
                        @error('contact')
                          <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mot de passe</font></font></label>
                        <input type="password" name="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                        @error('contact')
                          <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confirmez le mot de passe</font></font></label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirmez le mot de passe" required autocomplete="new-password">
                      </div>
                      
                      <button type="submit" class="btn btn-gradient-primary me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Soumettre</font></font></button>
                      <a href="{{ url('/admin/dashbord/users/') }}" class="btn btn-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Annuler</font></font></a>
                    </form>
                  </div>
                </div>
</div>
@endsection
