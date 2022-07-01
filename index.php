<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Calculateur de dégats</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="images/pokeball.png" alt="pokeball" style="float: left; width: 60px; height: 60px; margin: 6px;">
          <img src="images/pokeball.png" alt="pokeball" style="float: right; width: 60px; height: 60px; margin: 6px;">
          <h1 style="text-align: center;">Calculateur de dégats</h1>
        </div>
      </div>
    </div>
    <hr>
    <br>
    <form method="post" action="index.php" enctype="multipart/form-data" class="was-validated">
      <div class="container">
        <div class="row">
          <div class="col" style="display: flex; align-items: center; flex-direction: column;">
            <h2>Pokémon attaquant</h2>
            <br>
            <div class="form-group form-floating">
              <input type="number" name="att" placeholder="Attaque" id="att" class="form-control border border-secondary" style="width: 12em;" required>
              <label for="att">Attaque :</label>
              <div class="invalid-feedback">Ce champ n'est pas rempli</div>
            </div>
            <br>
            <br>
            <div class="form-group form-floating">
              <input type="number" name="pui" placeholder="Puissance" id="pui" class="form-control border border-secondary" style="width: 12em;" required>
              <label for="pui">Puissance :</label>
              <div class="invalid-feedback">Ce champ n'est pas rempli</div>
            </div>
            <br>
            <br>
            <div class="form-group form-floating">
              <select name="stab" id="stab" class="form-select border border-secondary" style="width: 12em;">
                <option class="stab" value="1" selected>Pas de stab</option>
                <option class="stab" value="1.5">Stab normal</option>
                <option class="stab" value="2">Adaptabilité</option>
              </select>
              <label for="stab">Stab :</label>
            </div>
            <br>
            <br>
            <div class="form-group form-floating">
              <select name="bst_att" id="bst_att" class="form-select border border-secondary" style="width: 12em;">
                <option class="bst_att" value="4">+6</option>
                <option class="bst_att" value="3.5">+5</option>
                <option class="bst_att" value="3">+4</option>
                <option class="bst_att" value="2.5">+3</option>
                <option class="bst_att" value="2">+2</option>
                <option class="bst_att" value="1.5">+1</option>
                <option class="bst_att" value="1" selected>0</option>
                <option class="bst_att" value="0.66">-1</option>
                <option class="bst_att" value="0.5">-2</option>
                <option class="bst_att" value="0.4">-3</option>
                <option class="bst_att" value="0.33">-4</option>
                <option class="bst_att" value="0.29">-5</option>
                <option class="bst_att" value="0.25">-6</option>
              </select>
              <label for="bst_att">Boost :</label>
            </div>
          </div>
          <br>
          <br>
          <div class="col" style="display: flex; align-items: center; flex-direction: column;">
            <h2>Pokémon défensif</h2>
            <br>
            <div class="form-group form-floating">
              <input type="number" name="def" placeholder="Défense" id="def" class="form-control border border-secondary" style="width: 12em;" required>
              <label for="def">Défense :</label>
              <div class="invalid-feedback">Ce champ n'est pas rempli</div>
            </div>
            <br>
            <br>
            <div class="form-group form-floating">
              <select name="eff" id="eff" class="form-select border border-secondary" style="width: 12em;">
                <option class="eff" value="4">Double faiblesse</option>
                <option class="eff" value="2">Faiblesse</option>
                <option class="eff" value="1" selected>Neutre</option>
                <option class="eff" value="0.5">Résistance</option>
                <option class="eff" value="0.25">Double résistance</option>
              </select>
              <label for="eff">Efficacité :</label>
            </div>
            <br>
            <br>
            <div class="form-group form-floating">
              <select name="meteo" id="meteo" class="form-select border border-secondary" style="width: 12em;">
                <option class="meteo" value="1.5">Favorable</option>
                <option class="meteo" value="1" selected>Neutre</option>
                <option class="meteo" value="0.5">Défavorable</option>
              </select>
              <label for="meteo">Météo :</label>
            </div>
            <br>
            <br>
            <div class="form-group form-floating">
              <select name="bst_def" id="bst_def" class="form-select border border-secondary selectpicker" style="width: 12em;">
                <option class="bst_def" value="4">+6</option>
                <option class="bst_def" value="3.5">+5</option>
                <option class="bst_def" value="3">+4</option>
                <option class="bst_def" value="2.5">+3</option>
                <option class="bst_def" value="2">+2</option>
                <option class="bst_def" value="1.5">+1</option>
                <option class="bst_def" value="1" selected>0</option>
                <option class="bst_def" value="0.66">-1</option>
                <option class="bst_def" value="0.5">-2</option>
                <option class="bst_def" value="0.4">-3</option>
                <option class="bst_def" value="0.33">-4</option>
                <option class="bst_def" value="0.29">-5</option>
                <option class="bst_def" value="0.25">-6</option>
              </select>
              <label for="bst_def">Boost :</label>
            </div>
          </div>
        </div>
      </div>
      <br>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <input type="checkbox" name="bru" value="0.5" id="bru" class="form-check-input">
              <label for="bru" class="form-check-label custom-control-label">Brûlure</label>
            </div>
            <br>
            <button type="submit" name="calculer" class="btn btn-outline-success btn-block">Calculer</button>
          </div>
        </div>
      </div>
    </form>
    <div class="container">
      <div class="row">
        <div class="col">
          <?php
          if (empty($_POST['bru'])) {
            $bru = 1;
          } else {
            $bru = 0.5;
          }
          if (isset($_POST['bst_def']) && isset($_POST['def']) && isset($_POST['pui']) && isset($_POST['bst_att']) && isset($_POST['att']))
          {
            $PV_perdus1 = (((50 * 0.4 + 2) * ($_POST['att'] * $_POST['bst_att'] * $bru) * $_POST['pui']) / (($_POST['def'] * $_POST['bst_def']) * 50) + 2) * $_POST['stab'] * $_POST['eff'] * $_POST['meteo'] * 0.85;
            $PV_perdus2 = (((50 * 0.4 + 2) * ($_POST['att'] * $_POST['bst_att'] * $bru) * $_POST['pui']) / (($_POST['def'] * $_POST['bst_def']) * 50) + 2) * $_POST['stab'] * $_POST['eff'] * $_POST['meteo'];
            $PV_perdus_1 = floor($PV_perdus1);
            $PV_perdus_2 = floor($PV_perdus2);
            echo '<br>';
            echo '<p>Le pokémon perdra entre <strong>'.$PV_perdus_1.'</strong> PV et <strong>'.$PV_perdus_2.'</strong> PV</p>';
          }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>