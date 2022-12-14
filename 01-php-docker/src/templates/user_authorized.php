<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello <?php if(isset($login)) echo 'Hello '.$login ?></title>
</head>
<body>

    <?php if(isset($login)) echo 'Hello '.$login ?>
    <a href='logout.php'>Log out</a>

    <style>
        a{
            padding: 7px 15px;
            background: pink;
            font-size: 20pt;
            border-radius: 5px;
            text-decoration: none;
            border: solid 2px violet;
            margin: 30px;
        }
        
        a:hover{
            background: violet;
        }
    </style>

</body>
</html>
