<?php
require_once __DIR__ . "/../backend/controller/ReservaController.php";
$ReservaController = new ReservaController();
$clientes = $ReservaController->getClientes();
?>
<select style="font-family: ABeeZee, serif; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #CCCCCC" name="id_cliente">
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