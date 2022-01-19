@extends('dashbord.admin.layouts.admin')

@section('content')
<div class="content-wrapper">
    
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Tableau de bord
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
                    <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modifier cet user</font></font></h4>
                    
                    <form class="forms-sample" action="{{ route('admin.updateUsers') }}" method="POST" >
                         @csrf
                       <input type="hidden" name="id" value="{{ $user->id }}">
                    

                      <div class="form-group">
                        <label for="exampleInputUsername1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom d'utilisateur</font></font></label>
                        <input type="text" name="name" class="form-control" id="exampleInputUsername1" value="{{ $user->name }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom d'utilisateur</font></font></label>
                        <input type="text" name="prenom" class="form-control" id="exampleInputUsername1" value="{{ $user->prenom }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adresse e-mail</font></font></label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adresse e-mail</font></font></label>
                        
                        <select class="form-select" name="role" aria-label="Default select example">
                         @if( auth()->user()->role ===0 )
                             <option value="0">Auteur</option>
                         @endif 
                        <option value="1">Administateur</option>
                          <option value="2">Utilisateur</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adresse e-mail</font></font></label>
                        <input type="tel" name="contact" class="form-control" id="exampleInputEmail1" value="{{ $user->contact }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mot de passe</font></font></label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{ $user->password }}">
                      </div>
                     
                      <button type="submit" class="btn btn-gradient-primary me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modifier</font></font></button>
                      <a href="{{ url('/admin/dashbord/users/') }}" class="btn btn-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Annuler</font></font></a>
                    </form>
                  </div>

          </div>
    
</div>
@endsection
