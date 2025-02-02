<?php
require_once __DIR__ . "/../controller/ReservaController.php";
$ReservaController = new ReservaController();
$clientes = $ReservaController->getClientes();
?>
<select style="font-family: ABeeZee, serif; height: 42px; border-radius: 4px; border: 1px solid #CCCCCC" name="cliente">
  <?php foreach ($clientes as $cliente): ?>
    <option value="<?= $cliente['id']; ?>"><?= $cliente['nome']; ?></option>
  <?php endforeach; ?>
</select>
<style>
  option {
    background-color: white;
    color: black;
    font-family: "ABeeZee", serif;
  }
</style>