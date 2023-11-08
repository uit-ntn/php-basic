<?php
// - Trong PHP, các toán tử được sử dụng để thực hiện các phép tính trên các biến và giá trị.
/*
- PHP chia các toán tử thành bảy nhóm chính như sau:
Toán tử số học.
Toán tử gán.
Toán tử so sánh.
Toán tử tăng / giảm.
Toán tử luận lý (toán tử logic)
Toán tử chuỗi.
Toán tử gán có điều kiện.
*/


// TOÁN TỬ SỐ HỌC

// Phép cộng (+)
$a = 5;
$b = 3;
$c = $a + $b; // $c sẽ bằng 8

// Phép trừ (-)
$a = 10;
$b = 4;
$c = $a - $b; // $c sẽ bằng 6

// Phép nhân (*)
$a = 6;
$b = 7;
$c = $a * $b; // $c sẽ bằng 42

// Phép chia (/)
$a = 20;
$b = 5;
$c = $a / $b; // $c sẽ bằng 4

// Phép chia lấy dư (%)
$a = 10;
$b = 3;
$c = $a % $b; // $c sẽ bằng 1

// Phép tăng lên một đơn vị (++): Có hai cách sử dụng toán tử này, trước hoặc sau biến. Ví dụ:
$a = 5;
$a++; // thực hiện các phép toán khác trước rồi mới tăng a
++$a; // tăng a trước rồi mới thực hiện các phép toán khác

// Phép giảm xuống một đơn vị (--): Tương tự như (++);
$a = 8;
$a--; // Sau phép này, $a sẽ bằng 7
--$a; // Sau phép này, $a sẽ bằng 6

// Phép lũy thừa (**)
$a = 2;
$b = 3;
$c = $a ** $b; // $c sẽ bằng 8 (2^3)



// TOÁN TỬ GÁN

// Toán tử gán (=)
$a=2;
$b=3; 
$a = $b; // a sẽ bằng b

// Toán tử gán cộng (+=)
$a=2;
$b=3; 
$a+=$b; // a = a + b

// Toán tử gán trừ (-=)
$a=2;
$b=3; 
$a-=$b; // a = a - b;

// Toán tử gán nhân (*=)
$a=2;
$b=3; 
$a*=$b; // a = a * b

// Toán tử gán chia (/=)
$a = 2;
$b = 3;
$a /=$b; // a = a / b

// Toán tử gán dư (%=)
$a = 2;
$b = 3;
$a %=$b; // a = a % b



// TOÁN TỬ SO SÁNH
/*
Toán tử	    Tên	                Ví dụ	            Kết quả	
==	        Bằng	            $x == $y	        Trả về TRUE nếu $x bằng $y	
===	        Giống hệt nhau	    $x === $y	        Trả về TRUE nếu $x bằng $y (chúng phải có chung kiểu)	
!=	        Không bằng	        $x != $y	        Trả về TRUE nếu $x không bằng $y	
<>	        Không bằng	        $x <> $y	        Trả về TRUE nếu $x không bằng $y	
!==	        Không giống nhau	$x !== $y	        Trả về TRUE nếu $x không bằng $y, hoặc chúng khác kiểu	
>	        Lớn hơn	            $x > $y	            Trả về TRUE nếu $x lớn hơn $y	
<	        Nhỏ hơn	            $x < $y	            Trả về TRUE nếu $x nhỏ hơn $y	
>=	        Lớn hơn hoặc bằng	$x >= $y	        Trả về TRUE nếu $x lớn hơn hoặc bằng $y	
<=	        Nhỏ hơn hoặc bằng	$x <= $y	        Trả về TRUE nếu $x nhỏ hơn hoặc bằng $y	
<=>		                        $x <=> $y	        Trả về các giá trị -1, 0, hay 1 tùy thuộc vào việc $x nhỏ hơn, bằng, hay lớn hơn $y
*/



// TOÁN TỬ LOGIC
/*
Toán tử	    Tên	        Ví dụ	            Kết quả	
and	        And	        $x and $y	        Trả về TRUE nếu cả $x và $y đều đúng	
or	        Or	        $x or $y	        Trả về TRUE nếu có ít nhất $x hoặc $y đúng	
xor	        Xor	        $x xor $y	        Trả về TRUE nếu chỉ có $x đúng, hoặc chỉ có $y đúng	
&&	        And	        $x && $y	        Trả về TRUE nếu cả $x và $y đều đúng	
||	        Or	        $x || $y	        Trả về TRUE nếu có ít nhất $x hoặc $y đúng	
!	        Not	        !$x	                Trả về TRUE nếu $x không đúng
*/




// TOÁN TỬ CHUỖI 
/*
Toán tử	    Tên	                Ví dụ	                Kết quả	
.	        Nối chuỗi	        $txt1 . $txt2	        Nối chuỗi $txt1 và chuỗi $txt2 lại với nhau	
.=	        Gán nối chuỗi	    $txt1 .= $txt2	        Trả về chuỗi $txt1 với giá trị của nó được nối thêm chuỗi $txt2 vào phía sau
+           Nối chuỗi           $txt1 + $txt2	        Nối chuỗi $txt1 và chuỗi $txt2 lại với nhau	
*/



// TOÁN TỬ GÁN CÓ ĐIỀU KIỆN 
// $biến = (điều_kiện) ? giá_trị_nếu_đúng : giá_trị_nếu_sai;

$age = 25;
$message = ($age >= 18) ? "Người trưởng thành " : "Chưa trưởng thành";

?>