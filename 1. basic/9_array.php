<?php
// MẢNG



// MẢNG 1 CHIỀU (MẢNG LIÊN TỤC)
/* Mảng liên tục là mảng trong đó các phần tử được truy cập thông qua một chỉ mục (index) số nguyên, bắt đầu từ 0.
Để khai báo một mảng liên tục, bạn có thể sử dụng các hàm như array() hoặc dấu ngoặc vuông [] */
$colors = array("Red", "Green", "Blue");
// Hoặc
$fruits = ["Apple", "Banana", "Orange"];



// MẢNG KẾT HỢP
/* Mảng kết hợp là mảng trong đó các phần tử được truy cập thông qua các khóa (keys) thay vì chỉ mục số nguyên.
Khóa có thể là chuỗi hoặc số và thường được sử dụng để biểu diễn thông tin mô tả về các giá trị.*/

$person = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
);

//Hoặc

$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
];




// Truy cập vào phần tử của mảng

/* Mảng liên tục : truy cập theo chỉ mục (index)*/
$colors = array("Red", "Green", "Blue");
$firstColor = $colors[0]; // $firstColor sẽ chứa "Red"
$secondColor = $colors[1]; // $secondColor sẽ chứa "Green"
$thirdColor = $colors[2]; // $thirdColor sẽ chứa "Blue"

/*Mảng kết hợp : truy cập theo khóa (key)*/
$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
];

$firstName = $person["first_name"]; // $firstName sẽ chứa "John"
$lastName = $person["last_name"]; // $lastName sẽ chứa "Doe"
$age = $person["age"]; // $age sẽ chứa 30




// Các hàm xử lý mảng

/*Thêm phần tử vào mảng*/
$fruits = ["Apple", "Banana", "Orange"];
array_push($fruits, "Mango", "Grapes"); // Thêm 1 hoặc nhiều phần tử vào cuối mảng
print_r($fruits); // In ra: Array ( [0] => Apple [1] => Banana [2] => Orange [3] => Mango [4] => Grapes )

/* Xóa phần tử của mảng*/
$fruits = ["Apple", "Banana", "Orange"];
array_shift($fruits); // xóa phần tử đầu tiên
array_pop($fruits); // xóa phần tử cuối cùng
unset($fruits[0]); // xóa phần tử theo chỉ mục
    
/*Đếm số phần tử trong mảng */
$fruits = ["Apple", "Banana", "Orange"];
$count = count($fruits); // đếm số phần tử trong mảng
$size = sizeof($fruits);


/*Gộp mảng*/
$combinedArray1 = array_merge($colors, $fruits);
$combinedArray2 = $colors + $fruits;


/*Tìm kiếm phần tử trong mảng*/
//Sử dụng in_array() để kiểm tra xem một giá trị có tồn tại trong mảng hay không
$fruits = array("apple", "banana", "cherry", "date");
$search = "banana";
if (in_array($search, $fruits)) {
    echo "$search tồn tại trong mảng.";
} else {
    echo "$search không tồn tại trong mảng.";
}

//Sử dụng array_search() để tìm kiếm giá trị và trả về chỉ số của nó trong mảng (nếu tồn tại)
$index = array_search("cherry", $fruits);
if ($index !== false) {
    echo "Cherry tồn tại tại chỉ số $index trong mảng.";
} else {
    echo "Cherry không tồn tại trong mảng.";
}


/* Loại bỏ phần tử trùng lặp */
$numbers = array(1, 2, 2, 3, 4, 4, 5);
$uniqueNumbers = array_unique($numbers);
print_r($uniqueNumbers); // In ra mảng sau khi loại bỏ trùng lặp

/* Chia một chuỗi thành mảng dựa trên một ký tự ngăn cách */
$fruitsString = "apple,banana,cherry,date";
$fruitsArray = explode(",", $fruitsString);
print_r($fruitsArray); // In ra mảng sau khi chia chuỗi

