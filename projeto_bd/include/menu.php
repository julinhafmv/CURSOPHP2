<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        nav ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        nav ul li {
            display: inline;
            margin-right: 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="servicos.php">Serviços</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>
</body>
</html>