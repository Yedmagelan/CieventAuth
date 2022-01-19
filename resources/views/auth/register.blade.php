<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ci event</title>
    <link rel="shortcut icon" href="{{ asset('front/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{ asset('front/styles/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
</head>
<body>
    

<div class="wrapper bg-white">
    <div class="h2 text-center">
        <img src="{{ asset('front/img/logo.png') }}" alt="" class="img-fluid">
    </div>
    <div class="h4 text-muted text-center pt-2">Mon espace d'inscription </div>
    <form class="pt-3" method="POST" action="{{ route('register') }}">

    @if ( Session::get('success'))
				 <div class="alert alert-success">
					 {{ Session::get('success') }}
				 </div>
		 @endif
		 @if ( Session::get('error'))
				 <div class="alert alert-danger">
					 {{ Session::get('error') }}
				 </div>
		 @endif
     
        @csrf

        <div class="form-group py-2">
            <div class="input-field"> <span class="far fa-user p-2"></span> 
            <input type="text" placeholder="Nom" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
              <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
              </span>
           @enderror
         </div>

         <div class="form-group py-2">
            <div class="input-field"> <span class="far fa-user p-2"></span> 
            <input type="text" placeholder="Prénom" class=" @error('username') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
            @error('username')
              <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
              </span>
           @enderror
         </div>
        </div>

        <div class="form-group py-1 pb-2">
            <div class="input-field"> <span class="fas fa-envelope p-2"></span> 
              <input type="email" placeholder="Adresse email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
             </div>
        </div>

        <div class="form-group py-1 pb-2">
            <div class="input-field"> <span class="fas fa-phone p-2"></span> 
              <input type="tel" placeholder="Votre contact" class=" @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact">
              @error('contact')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
             </div>
        </div>

        <div class="form-group py-1 pb-2">
            <div class="input-field"> <span class="fas fa-lock p-2"></span> 
              <input type="password" placeholder="Mot de passe" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
               <button class="btn bg-white text-muted">
                 <span class="far fa-eye-slash"></span>
               </button>
             </div>
             @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
        </div>

        <div class="form-group py-1 pb-2">
            <div class="input-field"> <span class="fas fa-lock p-2"></span> 
              <input type="password" placeholder="Confirm mot de passe" name="password_confirmation" required autocomplete="new-password">
               <button class="btn bg-white text-muted">
                 <span class="far fa-eye-slash"></span>
               </button>
             </div>
        </div>

         <button class="btn btn-block text-center my-3 fw-bold" type="submit"> Soumettre </button>
        <div class="text-center pt-4 text-muted mx-3">Avez-vous dejà un compte? <a href="{{ url('login') }}">se connecter</a></div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('front/styles/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>