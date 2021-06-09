<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form action="" method="POST">
        @csrf
        <input type="email" id="email" name="email" placeholder="Email">
        <input type="password" id="password" name="password" placeholder="Пароль">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="Повторите пароль">
        <button type="submit" value="signup">Зарегистрироваться</button>
    </form>
</body>
</html>