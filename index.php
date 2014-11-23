<!DOCTYPE HTML>
<html>
<head>
    <title>Praktikum 4</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type"text/css" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <span>Kasutajanimi: </span>
        <input type="text" name="username"><br>
        <span>Parool: </span>
        <input type="password" name="password"><br>
        <input type="submit" name="submit"><br>
    </form>
    <?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    ?>
    <pre>
    <?php
    print_r($_POST);
    ?>
    </pre>
    <br><br>
</body>
</html>