<?php
// VÒNG LẶP 


/* Vòng lặp for
 Vòng lặp for được sử dụng để lặp qua một dãy số cố định một số lần. Cú pháp của vòng lặp for như sau:
    for (biểu thức khởi tạo; điều kiện lặp; biểu thức tăng) {
    // Thực hiện tác vụ lặp ở đây
}
    */
for ($i = 1; $i <= 5; $i++) {
    echo "Số $i<br>";
}



/*
Vòng lặp while lặp đi lặp lại cho đến khi điều kiện lặp không còn đúng nữa. Cú pháp của vòng lặp while như sau:
    while (điều kiện) {
    // Thực hiện tác vụ lặp ở đây
}
*/
$i = 1;
while ($i <= 5) {
    echo "Số $i<br>";
    $i++;
}




/*
Vòng lặp do...while tương tự như vòng lặp while, nhưng nó luôn thực hiện ít nhất một lần trước khi kiểm tra điều kiện. 
Cú pháp của vòng lặp do...while như sau:
    do {
    // Thực hiện tác vụ lặp ở đây
} while (điều kiện);
*/
$i = 1;
do {
    echo "Số $i<br>";
    $i++;
} while ($i <= 5);




/*
Vòng lặp foreach được sử dụng để lặp qua mảng hoặc các cấu trúc dữ liệu tương tự. 
Nó lặp qua từng giá trị của mảng và gán chúng vào biến trong quá trình lặp. Cú pháp của vòng lặp foreach như sau:
    foreach ($mang as $gia_tri) {
    // Thực hiện tác vụ lặp ở đây với $gia_tri
}
*/
$mang = array("Một", "Hai", "Ba", "Bốn");
foreach ($mang as $gia_tri) {
    echo $gia_tri . "<br>";
}



$mang = array("Một", "Hai", "Ba", "Bốn");
foreach ($mang as $chi_so => $gia_tri) {
    echo "Phần tử thứ $chi_so: $gia_tri<br>";
}