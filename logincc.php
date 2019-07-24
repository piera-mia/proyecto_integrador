<?php  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="form-group col-md-5">
      <label for="inputAddress"> Región </label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Campana, Zárate, CABA u otra" name="region" value="<?= isset($errores["region"])? "": persistir("region") ?>">
      <?php if(isset($errores["region"])) :?>
        <span>
      <?php echo $errores["region"] ?>
        </span>
      <?php endif; ?>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState"> Ritmo medio en carrera </label>
      <select id="inputState" class="form-control" name="ritmo" value="<?= isset($errores["ritmo"])? "": persistir("ritmo") ?>">
        <option <?= (isset($_SESSION["ritmo"]) && $_SESSION["ritmo"] == "Elige..." )? "selected" : "" ; ?>>Elige...</option>
        <option <?= (isset($_SESSION["ritmo"]) && $_SESSION["ritmo"] == "Menor a 5 min por km" )? "selected" : "" ; ?>> Menor a 5 min por km </option>
        <option <?= (isset($_SESSION["ritmo"]) && $_SESSION["ritmo"] == "5 a 6 min por km" )? "selected" : "" ; ?>> 5 a 6 min por km </option>
        <option <?= (isset($_SESSION["ritmo"]) && $_SESSION["ritmo"] == "Mayor a 6 min por km" )? "selected" : "" ; ?>> Mayor a 6 min por km </option>
        <option <?= (isset($_SESSION["ritmo"]) && $_SESSION["ritmo"] == "Sin referencias" )? "selected" : "" ; ?>> Sin referencias </option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity"> Ya sos parte del equipo? </label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="equipo" id="gridRadios1" value="S" <?= (isset($_SESSION["equipo"]) && $_SESSION["equipo"] == "S" )? "checked" : "" ; ?>>
        <label class="form-check-label" for="gridRadios1"> Sí </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="equipo" id="gridRadios2" value="N" <?= (isset($_SESSION["equipo"]) && $_SESSION["equipo"] == "N" )? "checked" : "" ; ?>>
        <label class="form-check-label" for="gridRadios2"> No </label>
      </div>
      <?php if(isset($errores["equipo"])) :?>
      <span>
      <?php echo $errores["equipo"] ?>
      </span>
      <?php endif; ?>
    </div>

  </body>
</html>
