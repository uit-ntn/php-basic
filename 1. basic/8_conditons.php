<?php
// if...else


/* Câu lệnh if...else cho phép bạn thực hiện một khối mã nếu điều kiện là true và một khối mã khác nếu điều kiện là false. 
Cú pháp như sau:
    if (điều kiện) {
        // Thực hiện mã nếu điều kiện là true
    } else {
        // Thực hiện mã nếu điều kiện là false
    }
 */   
$age = 15;
if ($age < 18) {
    echo "Bạn là trẻ em.";
} else {
    echo "Bạn là người trưởng thành.";
}

$score = 80;
if ($score >= 90) {
    echo "Bạn đạt điểm A.";
} elseif ($score >= 80) {
    echo "Bạn đạt điểm B.";
} else {
    echo "Bạn đạt điểm C hoặc thấp hơn.";
}




// switch
/*Câu lệnh switch cho phép bạn kiểm tra một biểu thức với nhiều giá trị khác nhau và thực hiện khối mã tương ứng với giá trị được tìm thấy. 
Cú pháp như sau: 
switch (biểu thức) {
    case giá_trị1:
        // Thực hiện mã nếu biểu thức trùng với giá trị1
        break;
    case giá_trị2:
        // Thực hiện mã nếu biểu thức trùng với giá trị2
        break;
    // ...
    default:
        // Thực hiện mã nếu không có giá trị nào trùng khớp
}

*/
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Hôm nay là thứ Hai.";
        break;
    case "Tuesday":
        echo "Hôm nay là thứ Ba.";
        break;
    // ...
    default:
        echo "Hôm nay không phải là ngày nào trong tuần.";
}



