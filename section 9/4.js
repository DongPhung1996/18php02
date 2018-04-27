var x = 10;
var y = 6;
/**
	Name: sum
	Description: Tinh tong cua 2 gia tri truyyn vao
	Created by Dong
	Created on 14.4.2010
**/
function sum(x, y) {
	document.write("Tổng của x và y là: " + (x + y) + "<br>");
}

function brand(x,y){
	document.write("Hiệu của x và y là: " + (x - y) + "<br>");
}

function accomplishments(x,y){
		document.write("Tích của x và y là: " + (x * y) + "<br>");
}

function divide(x,y){
		document.write("Thương của x và y là: " + (x / y) + "<br>");
}

function residual(x,y){
	document.write("Chia lấy dư của x cho y là: " + (x % y) + "<br>");
}

sum(x, y)
brand(x,y)
accomplishments(x,y)
divide(x,y)
residual(x,y)