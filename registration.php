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
      <form action="/registration/signup.php" method="post" enctype="multipart/form-data">
        <a href="/index.php" class="btn btn--reg">Extours</a>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Email</label>
        <input type="email" name="email" placeholder="Введите Email">
        <label>Пароль</label>
        <input type="password" name="pass" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Подтверрдить!</button>
        <p>
          Уже есть аккаунт? - <a href="/authorization.php">Авторизация</a>!
        </p>
    </div>
</body>
</html>
