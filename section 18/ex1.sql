-- Câu 1:

SELECT * 
FROM products 
INNER JOIN categories 
ON categories.categoryID  =  products.categoryID 
WHERE products.listPrice > 500 AND categories.categoryName = 'Guitars';

--Câu 2

SELECT * 
FROM products 
WHERE products.discountPercent > 30 AND products.dateAdded LIKE '2014-02%'

--Câu 3

SELECT *
FROM addresses
INNER JOIN customers
ON addresses.customerID = customers.customerID
WHERE customers.emailAddress LIKE '%@gmail.com';

--Câu 4
