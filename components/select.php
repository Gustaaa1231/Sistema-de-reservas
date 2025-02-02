<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">

</head>
<body>
  
  </html>
  
</body>
<style>
option{
  background-color: white;
    color: black;
    font-family: "ABeeZee", serif;
}



</style>
<?php
function SelectComponent($name, $selectedValue = '') {
    $options = [
        1 => 'Tenis',
        2 => 'Volei',
        3 => 'Basquete',
        4 => 'Futsal'
    ];

    echo "<select style='font-family: ABeeZee, serif; width:100%; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #CCCCCC' name='$name'>";
    foreach ($options as $value => $label) {
        $selected = $value == $selectedValue ? 'selected' : '';
        echo "<option style='background-color: white; color: black; font-family: ABeeZee, serif;' value='$value' $selected>$label</option>";
    }
    echo "</select>";
}

function renderSelect($name, $selectedValue = '') {
    SelectComponent($name, $selectedValue);
}