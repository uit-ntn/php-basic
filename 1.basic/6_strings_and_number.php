<?php
// CHUỖI
/*
Điểm khác nhau giữa " " và ' '
- Đối với chuỗi được đặt bên trong cặp dấu nháy kép,
 nếu chuỗi đó có chứa cụm từ "gọi tên biến" thì khi ta hiển thị chuỗi này lên màn hình, 
 nó sẽ hiển thị giá trị của biến.

- Đối với chuỗi được đặt bên trong cặp dấu nháy đơn, 
nếu chuỗi đó có chứa cụm từ "gọi tên biến" thì khi ta hiển thị chuỗi này lên màn hình, 
nó sẽ KHÔNG hiển thị giá trị của biến.
*/
$name = "Nguyễn Thanh Nhân";
$text_1 = "Tên của tôi là $name";
$text_2 = 'Tên của tôi là $name';
echo $text_1;
echo $text_2;


// Nối chuỗi 
$text = "Tài liệu học " . "ngôn ngữ lập trình" . " PHP";
echo $text;

$text = 'Tài liệu học ' . 'ngôn ngữ lập trình' . " PHP";
echo $text;

$a = "Tài liệu học ";
$b = " PHP";
$text = $a . 'ngôn ngữ lập trình' . $b;
echo $text;


// Lấy độ dài của chuỗi
$text = "HTML and CSS";
$a = strlen($text); //biến $a sẽ có giá trị là 12
$b = strlen("JavaScript"); //biến $b sẽ có giá trị là 10
$c = strlen('MySQL & PHP'); //biến $c sẽ có giá trị là 11

// Lấy số từ trong chuỗi
$a = str_word_count("HTML"); //biến $a sẽ có giá trị là 1
$b = str_word_count("HTML CSS"); //biến $b sẽ có giá trị là 2
$c = str_word_count("HTML CSS JavaScript"); //biến $c sẽ có giá trị là 3
$d = str_word_count("HTML CSS JavaScript MySQL"); //biến $d sẽ có giá trị là 4
$e = str_word_count("HTML CSS JavaScript MySQL PHP"); //biến $e sẽ có giá trị là 5

// Chuyển toàn bộ ký tự trong chuỗi về dạng chữ in hoa
$text_1 = "Tai lieu hoc PHP";
$text_2 = strtoupper($text_1); //biến $text_2 sẽ có giá trị là chuỗi TAI LIEU HOC PHP

// Chuyển toàn bộ ký tự trong chuỗi về dạng chữ thường
$text_1 = "Tai lieu hoc PHP";
$text_2 = strtolower($text_1); //biến $text_2 sẽ có giá trị là chuỗi tai lieu hoc php

// Tìm kiếm và thay thế
$str = 'Chuỗi mẫu';
$pos = strpos($str, 'mẫu'); // Kết quả: 6
$newStr = str_replace('mẫu', 'thay thế', $str); // Kết quả: 'Chuỗi thay thế'


// Đảo ngược thứ tự của các ký tự trong chuỗi

$text_1 = "123456789";
$text_2 = strrev($text_1); //biến $text_2 sẽ có giá trị là chuỗi 987654321




// SỐ

// Các hàm toán học 
$num = 9;
$squareRoot = sqrt($num); // Kết quả: 3
$power = pow($num, 3); // Kết quả: 729
$absoluteValue = abs(-7); // Kết quả: 7
$rounded = round(3.7); // Kết quả: 4
$ceiled = ceil(3.2); // Kết quả: 4
$floored = floor(3.7); // Kết quả: 3
$minValue = min(4, 7, 2); // Kết quả: 2
$maxValue = max(4, 7, 2); // Kết quả: 7
$randomNumber = rand(1, 100); // Số ngẫu nhiên từ 1 đến 100


// Định dạng số
$number = 1234567.89;
$formatted = number_format($number, 2); // Kết quả: 1,234,567.89


// Chuyển đổi chuỗi thành số 
$str = "123";
$intVal = intval($str); // Kết quả: 123
$floatVal = floatval($str); // Kết quả: 123.0

// Phương thức kiểm tra

/* Kiểm tra xem một biến có phải là một số hoặc một chuỗi số hợp lệ hay không. 
Nó trả về true nếu biến là một số hoặc một chuỗi số hợp lệ, ngược lại trả về false*/
$var1 = 42;
$var2 = "3.14";
$var3 = "Hello";
$isNumeric1 = is_numeric($var1); // Kết quả: true
$isNumeric2 = is_numeric($var2); // Kết quả: true
$isNumeric3 = is_numeric($var3); // Kết quả: false


/*
Hàm is_int() kiểm tra xem một biến có phải là một số nguyên hay không, trong khi hàm is_float() kiểm tra xem một biến có phải là một số thực hay không. 
Cả hai trả về true nếu biến thỏa mãn kiểu dữ liệu tương ứng, ngược lại trả về false.
*/
$var1 = 42;
$var2 = 3.14;
$var3 = "Hello";
$isInt = is_int($var1); // Kết quả: true
$isFloat = is_float($var2); // Kết quả: true
$isNaN = is_nan($var3);
