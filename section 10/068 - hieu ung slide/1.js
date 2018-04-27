document.addEventListener("DOMContentLoaded",function(){
	//Khai bao mot so doi tuowng can su dung
	var nut = document.querySelectorAll('.chuyenslide ul li');
	var slides = document.querySelectorAll('.cacslide ul li');
	//nut tra ve mot mang nut
	for (var i = 0; i < nut.length; i++) {
		nut[i].addEventListener('click',function(){
			//bo tat ca mau den di
			for (var i = 0; i < nut.length; i++) {
				nut[i].classList.remove('kichhoat');
			}
			this.classList.add('kichhoat');
			//het phan xu ly chuyen mau
			//console.log(this.previousElementSibling);
			var nutkichhoat = this;
			for (var vt = 0;nutkichhoat = nutkichhoat.previousElementSibling ; vt++) {
				// console.log(' bien i ' + i );
				// console.log(' phan tu nut kich hoat la ' + nutkichhoat);
			}
			//het vong lap bien i = so thu tu
			console.log(" vi tri cua phan tu co class la kich hoat: " + vt);
			for (var i = 0; i < slides.length; i++) {
				slides[i].classList.remove('active');
				slides[vt].classList.add('active');
			}
		})
	}// het su kien cho nut
	var thoigian = setInterval(function(){
		console.log('tadaa');
	}, 1000);
})