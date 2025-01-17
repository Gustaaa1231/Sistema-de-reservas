<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="InputStyle.php">
</head>
<body>
    <form action="foo.php" method="post">
        <label for="nome">
            Nome:
            <br>
            <input type="text" name="username" /><br />
        </label>
        <label for="">
            Email:
            <br>
            <input type="text" name="email" /><br />
        </label>
        <label for="">
            Telefone:
            <br>
            <input type="tel" name="telefone" /><br />
        </label>
    </form>
</body>
</html>

<style>

    input{
        color: black;
        width: 20%;
        height: 100%;
        border-radius: 4px;
    }
    input:focus{
        background-color: cornflowerblue;
    }
</style>                                      