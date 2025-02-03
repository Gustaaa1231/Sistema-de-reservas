
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<style>

.input-field { padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 20px; 
}
.input-field:focus{
    border: 1px solid #2779B8;
    box-shadow: 0.1px 0rem 5px 0rem#2779B8;
    outline: none;
}
</style>
<?php 
function InputComponent($typ, $place, $name, $value, $read  ){
    echo "<input style='font-family: ABeeZee, serif;'name='$name' type='$typ' class='input-field' placeholder='$place' value='$value' $read>";
}
?>