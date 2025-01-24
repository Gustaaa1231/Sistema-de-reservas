<style>
    .button {
        background-color: #2779B8; /* Azul escuro */
        color: #ffffff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 16px;
        font-family: "ABeeZee", serif;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .button:hover {
        background-color: #0056b3; /* Azul ainda mais escuro */
    }
    .button:active {
        background-color: #004494; /* Azul ainda mais escuro quando clicado */
    }
</style>
<?php function ButtonComponent($onclick,$type, $title) {

    echo"<button style='margin-top: 3px; width: 100%;' onclick='$onclick' class='button' type='$type'>$title</button>";
}
?>