<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD EN laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   

   <div class="row">
    <div class="col s12">
    <h1>MODIFIER UN ETUDIANT</h1>
    <hr>

    @if(session('status'))
    <div class="alert alert-sucess">
        {{session('status')}}
    </div>

    @endif
<ul>
    @foreach( $errors->all( ) as $errors)
    <li class="alert alert-danger">{{$errors}}</li>
    @endforeach
</ul>
    
    <form action="/update/traitement" method="post" >
        @csrf
        <input type="text" name="id" style="display: none;"  value="{{$etudiants->id}}">
  <div class="mb-3">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text"  class="form-control" id="Nom" name="nom" value="{{$etudiants->nom}}">
  </div>

   <div class="mb-3">
    <label for="Prenom" class="form-label">Prenom</label>
    <input type="text"  class="form-control" id="Prenom" name="prenom" value="{{$etudiants->prenom}}">
  </div>

  <div class="mb-3">
    <label for="Classe" class="form-label">Classe</label>
    <input type="text"  class="form-control" id="Classe" name="classe" value="{{$etudiants->classe}}">
  </div>
  
    <button type="submit" class="btn btn-primary mb-3">MODIFIER</button>
    <br> <br>
    <a href="/etudiant" class="btn btn-success"> Retour sur la liste des étudiants</a>

  </div>
</form>
    
    <hr>
    
    
    </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>