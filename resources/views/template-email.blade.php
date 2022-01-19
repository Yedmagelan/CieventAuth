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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="wrapper bg-white">

<div class="card">
  <div class="card-header bg-info">
    {{ $data['subject'] }} 
  </div>
  <div class="card-body">
    <h5 class="card-title">Salut,</h5>
    <p class="card-text">Vous pouvez vous connecter avec:
        Adresse email:  {{ $data['email'] }} <br>
        Mot de passe : {{ $data['password'] }}
    </p>
    <a href="#" class="btn btn-primary">cliquez ici</a>
  </div>
</div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('front/styles/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>