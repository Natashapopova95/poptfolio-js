<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" media="screen" href="styles/styles.css" />
  <link rel="stylesheet" media="screen" href="styles/main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <title>Web development</title>
</head>

<body>
  <form action="index.php" method="post" id="forms" target="_blank" id="forms" class="form">
    <div class="form__item">
      <label for="formName" class="form__ladel">Ф.И.О.*</label>
      <input required type="text" id="formName" class="form__input" name="username" placeholder="Укажите ваши Ф.И.О." />
    </div>
    <div class="form__item">
      <label for="formPhone" class="form__ladel">Телефон*</label>
      <input required type="tel" id="formPhone" class="form__input" name="message" placeholder="Укажите ваш телефон" />
    </div>
    <div class="form__item">
      <label for="formEmail" class="form__ladel">E-mail*</label>
      <input required type="email" id="formEmail" class="form__input" name="email" placeholder="Укажите ваши E-mail" />
    </div>
    <input type="submit" class="link" value="Отправить заявку"></input>
  </form>
  <?php 
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


if (trim($name) == "") 
  echo "Вы не ввели имя пользователя";
else if(strlen(trim($name)) <= 1)
  echo "Такого имени не существует";
else if(trim($email) == "" || trim($password) == "" || "" || trim($_POST["message"]) == "")
  echo "Введите все двнные";
else {
  $_POST['password'] = md5($password);
  echo "<h1>Все данные</h1>";
  foreach ($_POST as $key => $value) 
    echo "<p>$value</p>";
}


if (mail("nat4shail@yandex.ru", "Заказ с сайта", "ФИО:".$name.". E-mail: ".$email))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>
</body>

</html>
