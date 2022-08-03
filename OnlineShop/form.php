<?php
require 'func.php';

/*insertFormFeedback();*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style_list.css">
  <title>Интернет магазин</title>
</head>
<body>
  <div class="container">

    <form action="" method="post" class="form_content">

      <?php checkFormFeedback(); ?>

      <label for="name">Имя:</label><br>
      <input class="form_input name" required type="text" id="name" name="name"><br>

      <label for="email">E-mail:</label><br>
      <input class="form_input email" required type="email" id="email" name="email"><br>

      <label for="date">Дата рождения:</label><br>
      <input class="form_input" required type="date" id="date" name="date"><br>

      <label for="gender">Пол:</label><br>
      <input type="radio" required value="male" id="male" name="gender">
      <label for="male">Мужской</label>

      <input type="radio" value="female" id="female" name="gender">
      <label for="female">Женский</label>

      <input type="radio" value="none" id="none" name="gender">
      <label for="none">Не указывать</label><br>

      <label for="theme">Тема обращения:</label><br>
      <input class="form_input" required type="text" id="" name="theme"><br>

      <label for="question">Основное сообщение:</label><br>
      <textarea class="form_input" required rows="4" id="" name="question"></textarea><br>

      <input type="checkbox" id="agreement" name="agreement" required>
      <label for="agreement">Согласие на обработку</label><br>

      <input class="form_input" type="submit">
    </form>
  </div>
</body>
</html>
