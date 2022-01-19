<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ci event</title>
    <link rel="shortcut icon" href="{{ asset('front/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('front/img/styles/style.css') }}">
</head>
<body>
    

<div class="wrapper bg-white">
    <div class="h2 text-center">
        <img src="{{ asset('front/img/logo.png') }}" alt="" class="img-fluid">
    </div>
    <div class="h4 text-muted text-center pt-2">Mon espace de connexion </div>
    <form class="pt-3">
        <div class="form-group py-2">
            <div class="input-field"> <span class="far fa-user p-2"></span> 
            <input type="text" placeholder="Username or Email Address" required class="">
         </div>
        </div>
        <div class="form-group py-1 pb-2">
            <div class="input-field"> <span class="fas fa-lock p-2"></span> 
              <input type="text" placeholder="Enter your Password" required class=""> 
               <button class="btn bg-white text-muted">
                 <span class="far fa-eye-slash"></span>
               </button>
             </div>
        </div>

        <div class="form-group py-1 pb-2">
            <div class="input-field"> <span class="fas fa-lock p-2"></span> 
              <input type="text" placeholder="Enter your Password" required class=""> 
               <button class="btn bg-white text-muted">
                 <span class="far fa-eye-slash"></span>
               </button>
             </div>
        </div>
        
        <div class="d-flex align-items-start">
            <div class="remember">
                 <label class="option text-muted"> Remember me <input type="radio" name="radio"> <span class="checkmark"></span> </label>
             </div>
            <div class="ml-auto"> <a href="#" id="forgot">Mot de passe oublié?</a> </div>
        </div>
         <button class="btn btn-block text-center my-3 fw-bold" type="submit"> connexion </button>
        <div class="text-center pt-4 text-muted mx-3">Pas un membre? <a href="/">S'enregistrer</a></div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>