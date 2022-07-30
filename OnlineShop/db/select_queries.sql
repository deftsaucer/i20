/*страница списка разделов*/
select c.id, c.category_name, count(*) as count
from categories as c 
	join categoryproducts as cp on cp.category_id = c.id
	join products as p on p.id = cp.product_id
where p.active_status = 1
group by c.id
order by count desc;



/*старница раздела с товарами*/
select c.category_name, c.category_description
from categories as c
where c.id = 4;

select p.name, cc.category_name, ph.link, ph.alt
from products as p 
	join categoryproducts as cp on cp.product_id = p.id 
	join categories as c on c.id = cp.category_id
    join categories as cc on cc.id = p.main_category_id
	join photos as ph on ph.id = p.main_photo_id
where c.id = 4
limit 5, 12;
 


/*страница товара*/
select * from products
where id = 11;

select c.id, c.category_name
from categoryproducts as cp
	join categories as c on c.id = cp.category_id
where cp.product_id = 5;

select ph.id, ph.link, ph.alt
from productphotos as pph
	join photos as ph on ph.id = pph.photo_id
where pph.product_id = 5;