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
    <div class="h4 text-muted text-center pt-2"> Réinitialisation de mot de passe </div>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
             {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
         </div>
    @endif
    {{ __('Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.') }}
    {{ __('Si vous n'avez pas reçu l'e-mail') }},
    <form class="pt-3" method="POST" action="{{ route('verification.resend') }}">
        @csrf

         <button class="btn btn-block text-center my-3 fw-bold" type="submit"> {{ __('cliquez ici pour en demander un autre') }} </button> .

    </form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('front/styles/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>