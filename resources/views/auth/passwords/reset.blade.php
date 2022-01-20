<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ci event | réinitialisation password</title>
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
    <div class="h4 text-muted text-center pt-2"> {{ __('Réinitialisation de mot de passe') }} </div>
    
    
    
    <form class="pt-3" method="POST" action="{{ route('password.update') }}">
          @csrf

          <input type="hidden" name="token" value="{{ $token }}">

         <div class="form-group py-2">
            <div class="input-field"> <span class="far fa-user p-2"></span> 
            <input type="email" value="{{ $email ?? old('email') }}" placeholder="Adrresse email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
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

         <button class="btn btn-block text-center my-3 fw-bold" type="submit"> {{ __('valider mot de passe ') }} </button>
        
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('front/styles/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>