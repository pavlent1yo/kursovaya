<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration</title>
    <link rel="stylesheet" href="/css/regstyle.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
 </head>
<body>
    <div class="regform">
      <form action="/registration/login.php" method="post" enctype="multipart/form-data">
        <a href="/index.php" class="btn btn--reg">Extours</a>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="pass" placeholder="Введите пароль">
        <button type="submit">Подтвердить</button>
        <p>
        Нет аккаунта? - <a href="/registration.php">Регистрация</a>!
        </p>
    </div>
</body>
</html>
