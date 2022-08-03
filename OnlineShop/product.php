<?php
require 'func.php';

correctProduct(clearInt($_GET['id']));

$product = selectProduct(clearInt($_GET['id']));
$product_cat = selectProductCategories(clearInt($_GET['id']));
$product_main_ph = selectMainPhoto(clearInt($_GET['id']));
$product_ph = selectProductPhotos(clearInt($_GET['id']));
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Интернет-магазин</title>
  <link rel="stylesheet" href="style_page.css">
</head>
<body>
  <div class="header_container">
    <header class="header">
      <a href="index.php" class="header_logo">Интернет-магазин</a>
      <nav>
        <a href="index.php" class="nav_link">На главную</a>
        <a href="form.php" class="nav_link">Обратная связь</a>
      </nav>
    </header>
    <?php pageRef($_SERVER['HTTP_REFERER'], $product['main_category_id']) ?>
  </div>

  <div class="container">

    <div class="list_photo">
      <?php
      foreach ($product_ph as $photo) {
      ?>
      <img src="<?=$photo['link'] ?>" alt="<?=$photo['alt'] ?>" class="object list_photo_image1">
      <?php } ?>
    </div>

    <div class="main_photo">
      <img src="<?=$product_main_ph['link']?>" alt="<?=$product_main_ph['alt']?>" class="main_photo_image">
    </div>

    <div class="content">
      <h1 class="product_name"><?=$product['name']?></h1>

      <div class="product_category">

        <?php foreach ($product_cat as $cat) { ?>
        <a href="products.php?c_id=<?=$cat['id']?>" class="product_category_link"><?=$cat['category_name']?></a>
        <?php } ?>
      </div>

      <div class="product_price">
        <span class="line_through_price"><?=$product['price']?></span>
        <span class="price"><?=$product['new_price']?></span>
        <span class="sale_price"><?=$product['sale_price']?></span>
        <span class="sale_label"> - с промокодом</span>
      </div>

      <div class="product_availability">
        <div class="product_availability_text">
          <img src="images/check.png" alt="check" class="check">
          <span>В наличии в магазине <a class="product_availability_link" href="#">Lamoda</a></span>
        </div>
        <div class="product_availability_text">
          <img src="images/delivery.png" alt="delivery" class="delivery">
          <span>Бесплатная доставка</span>
        </div>
      </div>

      <div class="product_buttons">
        <button class="in_store_button">Купить</button>
        <button class="in_favourite_button">В избранное</button>
      </div>

      <div class="product_count_buttons">
        <button class="product_count_minus">-</button>
        <input type="text" class="product_count_display" value="1">
        <button class="product_count_plus">+</button>
      </div>

      <div class="product_info">
        <p class="product_description"><?=$product['description']?></p>
      </div>

      <div class="social_networks">
        <span class="social_networks_share">Поделиться:</span>

        <a href="#">
          <img class="social_networks_images" src="images/vk.png" alt="VK">
        </a>

        <a href="#">
          <img class="social_networks_images" src="images/google.png" alt="Google+">
        </a>

        <a href="#">
          <img class="social_networks_images" src="images/facebook.png" alt="Facebook">
        </a>

        <a href="#">
          <img class="social_networks_images" src="images/twitter.png" alt="Twitter">
        </a>

        <div class="social_networks_counter">123</div>
      </div>
    </div>
  </div>
  <script src="js/main.js" type="text/javascript"></script>
  <script src="js/jquery-3.6.0.js" type="text/javascript"></script>
  <script src="js/notify.js" type="text/javascript"></script>
</body>
</html>
