<?php

require 'func.php';

correctCategory(clearInt($_GET['c_id']));
$title = selectCategory(clearInt($_GET['c_id']));
$items = paging(clearInt($_GET['c_id']));

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
        <a href="form.html" class="nav_link">Обратная связь</a>
      </nav>
    </header>
    <a href = "index.php">Назад</a>

    <h1 class="page-title"><?=$title[category_name] ?></h1>
    <h3 class="page-title"><?=$title[category_description] ?></h3>

    <div class="content">

      <?php foreach($items as $item) { ?>
      <div class="item">
        <div class="item_img"><img src="<?=$item[link]?>" alt="<?=$item[alt]?>"></div>
        <div class="item_name">
          <a href="product.php?id=<?=$item[id]?>"><?=$item[name]?></a>
        </div>
        <div class="item_name">
          <a href="products.php?c_id=<?=$item[main_category_id]?>"><?=$item[category_name]?></a>
        </div>
      </div>
      <?php }?>
    </div>
    <div class="paging">
      <a href="products.php?c_id=<?=$_GET['c_id']?>&page=<?=$page-1?>" class="page_back paging_button">Назад</a>
      <a href="products.php?c_id=<?=$_GET['c_id']?>&page=<?=$page+1?>" class="page_forward paging_button">Вперёд</a>
    </div>
  </div>
</body>
</html>
