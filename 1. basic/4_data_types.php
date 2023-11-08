<?php

//PHP hỗ trợ nhiều kiểu dữ liệu khác nhau để xử lý và lưu trữ dữ liệu. Dưới đây là một số kiểu dữ liệu phổ biến trong PHP:

//Kiểu số nguyên (Integer): Kiểu dữ liệu này được sử dụng để lưu trữ các số nguyên. Ví dụ:

$age = 25;

//Kiểu số thực (Float hoặc Double): Kiểu dữ liệu này được sử dụng để lưu trữ các số thập phân. Ví dụ:
$price = 19.99;


//Kiểu chuỗi (String): Kiểu dữ liệu chuỗi được sử dụng để lưu trữ văn bản. Chuỗi có thể được viết trong dấu nháy đơn hoặc nháy kép.
$name = "John Smith";

//Kiểu Boolean: Kiểu dữ liệu Boolean chỉ có hai giá trị: true hoặc false. Nó thường được sử dụng trong các biểu đồ điều kiện.
$isStudent = true;
$isAdmin = false;

//Kiểu mảng (Array): Kiểu dữ liệu mảng được sử dụng để lưu trữ nhiều giá trị trong một biến. Mảng có thể chứa các giá trị của các kiểu dữ liệu khác nhau.
$fruits = array("apple", "banana", "cherry");


//Kiểu đối tượng (Object): Kiểu dữ liệu này cho phép bạn tạo các đối tượng từ các lớp đã định nghĩa. Đối tượng chứa các thuộc tính và phương thức.
class Person {
    public $name;
    public $age;
}

$person = new Person();
$person->name = "Alice";
$person->age = 30;


//Kiểu không có giá trị (Null): Kiểu dữ liệu null đại diện cho một biến không có giá trị hoặc một biến đã được khởi tạo nhưng không có giá trị cụ thể.
$variable = null;