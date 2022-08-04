/*страница списка всех разделов*/
select c.id, c.category_name, count(cp.product_id) as count
from categories as c 
	left join categoryproducts as cp on cp.category_id = c.id
group by c.id
order by count desc;


/*страница списка разделов с количеством товара больше двух*/
select c.id, c.category_name, count(*) as count
from categories as c 
	join categoryproducts as cp on cp.category_id = c.id
	join products as p on p.id = cp.product_id
where p.active_status = 1
group by c.id
having count > 2
order by count desc;

