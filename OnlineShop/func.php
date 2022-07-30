<?php
require 'config.php';


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

function selectCategory() {
  $sql = "select c.category_name, c.category_description
          from categories as c
          where c.id = 4;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_array($result, MYSQLI_ASSOC);
  return $items;
}

function selectAllProducts() {
  $sql = "select p.name, (select nc.category_name
				  from categories as nc
 					    join products as np on np.main_category_id = nc.id
				  where np.id = p.id) as category_name, ph.link, ph.alt
          from products as p
              join categoryproducts as cp on cp.product_id = p.id
	            join categories as c on c.id = cp.category_id
	            join photos as ph on ph.id = p.main_photo_id
          where c.id = 4
          limit 5, 12;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  return $items;
}

function selectProduct() {
  $sql = "select * from products
          where id = 11;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_array($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  return $items;
}

function selectProductCategories() {
  $sql = "select c.id, c.category_name
          from categoryproducts as cp
    	       join categories as c on c.id = cp.category_id
          where cp.product_id = 5;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  return $items;
}

function selectProductPhotos() {
  $sql = "select ph.id, ph.link, ph.alt
          from productphotos as pph
	           join photos as ph on ph.id = pph.photo_id
          where pph.product_id = 5;";
  global $link;
  $result = mysqli_query($link, $sql);
  $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  return $items;
}

?>
