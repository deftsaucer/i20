<?php
require 'func.php';
$title = selectCategory();
$items = selectAllProducts();
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
    <header class="header">
      <a href="#" class="header_logo"><h1>Интернет-магазин</h1></a>
      <nav>
        <a href="#" class="nav_link">На главную</a>
        <a href="form.html" class="nav_link">Обратная связь</a>
      </nav>
    </header>

    <button type="button" name="return" class="return_button">
      <img class="return_button_img" src="images/arrow.png" alt="Назад">
    </button>

    <h1 class="page-title"><?=$title[category_name] ?></h1>
    <h3 class="page-title"><?=$title[category_description] ?></h3>

    <div class="content">
<?php
foreach($items as $item) {
?>
      <div class="item">
        <figure>
          <img class="item_img" src="images/cat_img.png" alt="image">
          <a href="#" class="item_name"><?=$item[name]?></a>
        <figure>
      </div>
<?php }?>
    </div>
  </div>
</body>
</html>
