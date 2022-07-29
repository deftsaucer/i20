/*страница списка разделов*/
select c.id, c.category_name, count(*) as count
from categories as c 
	join categoryproducts as cp on cp.category_id = c.id
	join products as p on p.id = cp.product_id
where p.active_status = 1
group by c.id
having count > 0
order by count desc;



/*старница раздела с товарами*/
select c.category_name, c.category_description
from categories as c
where c.id = 4;

select p.name, c.category_id, ph.link, ph.alt
from products as p 
	join categoryproducts as cp on cp.product_id = p.id 
	join categories as c on c.id = cp.category_id 
	join photos as ph on ph.id = p.main_photo_id
where c.id = 4
limit 12, 12;
 


/*страница товара*/
select * from products
where id = 11;

select c.id, c.category_name
from products as p
	join categoryproducts as cp on p.id = cp.product_id
	join categories as c on c.id = cp.category_id
where p.id = 5;

select ph.id, ph.link, ph.alt
from products as p
	join productphotos as pph on p.id = pph.product_id
	join photos as ph on ph.id = pph.photo_id
where p.id = 5;