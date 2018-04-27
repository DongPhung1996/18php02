var x = prompt("Nhap vao gia tri cua x la: ");
var y = prompt("Nhap vao gia tri cua y la: ");
Number(x);
Number(y);
z = x%y;
if (z == 1) {
	document.write("ONE");
}else if(z == 2){
	document.write("TWO");
}else if(z == 3){
	document.write("THREE");
}else{
	document.write("OTHER");
}