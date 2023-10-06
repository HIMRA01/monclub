

<h2>Inscription</h2>
      <div class="col-md-3">
    <label for="validationCustom04" class="form-label">tant-que</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">choisir</option>
      <option>supporter</option>
      <option>joueur</option>
    </select>
    <!-- <div class="invalid-feedback">
      Please select a valid state.
    </div> -->
  </div>



    <form action="views/traitement/action.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br>

        <label for="email">Email :</label>
        <input type="text" name="email" required><br>

        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" required><br>

        <input type="submit" value="S'inscrire" name="submit">
    </form>