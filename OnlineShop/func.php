<?php
require 'config.php';

function clearStr($str) {
  global $link;
  $str = trim(strip_tags($str));
  return mysqli_real_escape_string($link, $str);
}

function clearInt($int) {
  return abs((int)$int);
}

function correctCategory($c_id) {
  $sql = "select id from categories
          where id = $c_id";
  global $link;
  $result = mysqli_query($link, $sql);
  $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
  if(!isset($result)){
    header('Location: http://localhost/OnlineShop/error_404.php');
  }
}

function correctProduct($p_id) {
  $sql = "select id from products
          where id = $p_id and active_status = 1";
  global $link;
  $result = mysqli_query($link, $sql);
  $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
  if(!isset($result)){
    header('Location: http://localhost/OnlineShop/error_404.php');
  }
}

function selectAllCategories() {
  $sql = "select c.id, c.category_name, count(*) as count
          from categories as c
          	join categoryproducts as cp on cp.category_id = c.id
          	join products as p on p.id = cp.product_id
          where p.active_status = 1
          group by c.id
          order by count desc;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  return $items;
}

function selectCategory($c_id) {
  $sql = "select c.category_name, c.category_description
          from categories as c
          where c.id = $c_id;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_array($result, MYSQLI_ASSOC);
  return $items;
}

function selectAllProducts($c_id, $st, $on_page) {
  $sql = "select p.name, p.id, p.main_category_id, cc.category_name, ph.link, ph.alt
          from products as p
          	join categoryproducts as cp on cp.product_id = p.id
          	join categories as c on c.id = cp.category_id
            join categories as cc on cc.id = p.main_category_id
          	join photos as ph on ph.id = p.main_photo_id
          where c.id = $c_id and active_status = 1
          limit $st, $on_page;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  return $items;
}

function selectProduct($id) {
  $sql = "select * from products
          where id = $id;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_array($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  return $items;

}

function selectMainPhoto($id) {
  $sql = "select p.main_photo_id, ph.link, ph.alt
          from products as p
            join photos as ph on p.main_photo_id = ph.id
          where p.id = $id;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_array($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  return $items;

}

function selectProductCategories($id) {
  $sql = "select c.id, c.category_name
          from categoryproducts as cp
    	       join categories as c on c.id = cp.category_id
          where cp.product_id = $id;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  return $items;
}

function selectProductPhotos($id) {
  $sql = "select ph.id, ph.link, ph.alt
          from productphotos as pph
	           join photos as ph on ph.id = pph.photo_id
          where pph.product_id = $id;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  return $items;
}

function pageRef($first, $second) {
  if(isset($first)) {
    $urlback = htmlspecialchars($first);
  }
  else {
    $urlback = htmlspecialchars("products.php?c_id=$second");
  }
  echo "<a class='header_return_link' href='$urlback'>Назад</a>";
}

function paging($c_id) {
  $on_page = 12;

  global $page;

  $sql = "select count(*) as count
          from products as p
          	join categoryproducts as cp on cp.product_id = p.id
          where cp.category_id = $c_id and active_status = 1
          group by cp.category_id;";

  global $link;
  $result = mysqli_query($link, $sql);
  $count = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = $count['count'];
  $num_pages = ceil($count / $on_page);

  if(isset($_GET['page']) and ($_GET['page'] > 0) and ($_GET['page'] <= $num_pages)) {
    $page = $_GET['page'];
  }
  else {
    $page = 1;
  }

  $st = ($page - 1) * $on_page;

  return selectAllProducts($c_id, $st, $on_page);
}

function insertFormFeedback() {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $gender = $_POST['gender'];
  $theme = $_POST['theme'];
  $question = $_POST['question'];
  if(!empty($_POST)) {
    $sql = "insert into feedback (name, email, date, gender, theme, question)
            values (?, ?, ?, ?, ?, ?)";
    global $link;
    if ($stmt = mysqli_prepare($link, $sql)) {
      mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $date, $gender, $theme, $question);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      echo "<p style='color:#10c906'>Обращение отправленно</p>";
      return true;
    }
    else {
      return false;
    }
  }
}

function checkFormFeedback() {
  if(!preg_match('/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/', $_POST['name'])) {
    echo "<p style='color:#ff4242'>Некорректное имя. Допустимы символы латинского алфавита верхнего и нижнего регистра, цифры. Длина имени от 2 до 20 символов.</p>";
    echo "<style>.form_input.name{background-color: #ff7e7e;}</style>";
    return false;
  }

  if(!preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i', $_POST['email'])) {
    echo "<p style='color:#ff4242'>Некорректный адрес электронной почты</p>";
    echo "<style>.form_input.name{background-color: #ff7e7e;}</style>";
    return false;
  }

  return insertFormFeedback();
}
?>
