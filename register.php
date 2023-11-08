<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="monclub.com/views/asset/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body></body>
</html>
<div class="container">

<div class="imgs">

<img src="monclub.com/views/asset/img/azer.php" alt="">

</div>


<div class="register">
  <h2>Inscription</h2>
  

  <form action="views/traitement/action.php" method="post">

    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">tant-que</label>
        <select class="form-select" id="validationCustom04" name="genre" required>
          <option selected disabled value="">choisir</option>
          <option>supporter</option>
          <option>joueur</option>
        </select>

    </div>


    <div class="mb-3 mt-3">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" class="form-control" placeholder="nom" name="nom" required>
    </div>

    <div class="mb-3 mt-3">
      <label for="prenom" class="form-label">Prenom</label>
      <input type="text" class="form-control" placeholder="prenom" name="prenom" required>
    </div>

    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>

    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="mdp" required>
    </div>

    

    <button type="submit" class="btn btn-primary" name="inscription">S'inscrire</button>
  </form>


</div>




</div>


