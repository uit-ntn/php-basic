<?php

/* Trong PHP, hằng số là một giá trị không thay đổi trong suốt quá trình thực thi của chương trình. 
Hằng số khác với biến, bởi vì giá trị của hằng số không thể thay đổi sau khi đã được định nghĩa.
Điều này thường được sử dụng để lưu trữ các giá trị cố định như các giá trị không thay đổi trong toàn bộ ứng dụng, 
như URL của cơ sở dữ liệu hoặc phiên bản ứng dụng.
Để định nghĩa một hằng số trong PHP, bạn sử dụng hàm define() như sau:
define("TEN_HANG_SO", "GIA_TRI_HANG_SO");
Trong đó:
"TEN_HANG_SO" là tên của hằng số.
"GIA_TRI_HANG_SO" là giá trị của hằng số.
*/
define("PI", 3.14159);
define("DATABASE_URL", "mysql://username:password@localhost/database");
// Sau khi định nghĩa, bạn có thể sử dụng hằng số bằng cách gọi tên của nó:

echo PI; // In ra giá trị của hằng số PI
/*Lưu ý rằng tên hằng số phải viết hoa và có thể bao gồm chữ cái, 
số và dấu gạch dưới, nhưng không thể chứa dấu cách hoặc ký tự đặc biệt. 
Hằng số không cần sử dụng ký tự đô la ($) như biến.*/