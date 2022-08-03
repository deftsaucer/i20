<?php
require 'func.php';
$items = selectAllCategories();
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
      <a href="index.php" class="header_logo"><h1>Интернет-магазин</h1></a>
      <nav>
        <a href="index.php" class="nav_link">На главную</a>
        <a href="form.php" class="nav_link">Обратная связь</a>
      </nav>
    </header>

    <h1 class="page-title">Категории</h1>

    <div class="content">

      <?php foreach ($items as $item) { ?>
      <div class="category_item">
        <a href="products.php?c_id=<?=$item['id']?>" class="category_item_name"><?=$item['category_name']?></a>
        <p class="item_count"><?=$item['count']?></p>
      </div>
      <?php } ?>

    </div>
  </div>
</body>
</html>
