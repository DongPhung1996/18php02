/*CANVAS THỨ NHẤT*/
var canvas = document.getElementById('myCanvas1');
var context = canvas.getContext('2d');

// Tiến hành vẽ
context.beginPath();        // Khai báo vẽ đường thẳng mới
context.moveTo(10, 10);     // Điểm bắt đầu
context.lineTo(400, 10);    // Điểm kết thúc
context.lineWidth = 5;     // rộng 15px
context.strokeStyle = '#9c8383';// Màu xanh
context.lineCap = 'butt';
context.stroke();           // Tiến hành vẽ