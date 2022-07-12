<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>gubkinmult.ru</title>
        <link rel="stylesheet" href="$css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link href="static\css\main.css" rel="stylesheet">
        <link href="static\css\login.css" rel="stylesheet">
    </head>
<body>
<?php require_once 'header.php'?>
    <div>
    <div>
        <form id = 'form-cont' action = 'newuser' method="post">
            <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="form-label">Введите email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = 'email'>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Введите имя пользователя</label>
                <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='username'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name = 'password'>
            </div>
            <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
        </form>
    </div>
    </div>
</body>