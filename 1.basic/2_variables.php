<?PHP
/*  - Khai báo biến :
khai báo biến bằng cách sử dụng dấu $, theo sau là tên biến bạn muốn sử dụng

    - declare variable
you declare a variable by using the dollar sign ($) followed by the variable name.     
*/

$age;
$name = "Nguyễn Thanh Nhân<br>"; // biến name được gán giá trị khi khai báo   // the variable 'name' is assigned a value when declared.
echo $name;

/*
- Cập nhật giá trị biến : để cập nhật giá trị cho biến thì ta chỉ cần gán một giá trị mới cho biến đó
- Updating a variable's value: To update the value of a variable, you only need to assign a new value to that variable.
*/
$name = "Nhân Nguy Hiểm";
echo "biến name sau khi cập nhật có giá trị là " .$name;

/* 
Quy tắc đặt tên biến : 
    + Tên biến bắt đầu bằng dấu $: Mọi biến trong PHP phải bắt đầu bằng dấu $. 
    Ví dụ: $ten_bien.

    +  Tên biến phân biệt chữ hoa và chữ thường: nghĩa là $myVariable và $myvariable được coi là hai biến khác nhau.

    + Tên biến có thể chứa chữ cái, chữ số và dấu gạch dưới (_): 
    Ví dụ: $my_variable, $user123.

    + Tên biến không được bắt đầu bằng số, như $123user là không hợp lệ, trong khi $user123 là hợp lệ.

    + Tránh sử dụng các ký tự đặc biệt: Trong tên biến, tránh sử dụng các ký tự đặc biệt như khoảng trắng, dấu gạch ngang, dấu chấm, dấu cách, v.v. Ví dụ: $my-variable, $my variable không hợp lệ.

    + Sử dụng tên biến mô tả và dễ đọc: Đặt tên biến sao cho nó mô tả mục đích hoặc nội dung của biến. 
Việc sử dụng tên biến có ý nghĩa sẽ giúp mã của bạn dễ đọc và bảo trì hơn. Ví dụ: $userName thay vì $u hoặc $un.

    + Tránh sử dụng các từ khóa trong PHP: Tránh đặt tên biến trùng với các từ khóa có sẵn trong PHP như if, else, while, v.v.

    +Tuân theo quy tắc chung về quy ước đặt tên: 
Tuân theo các quy tắc về quy ước đặt tên biến như snake_case (sử dụng dấu gạch dưới) 
hoặc camelCase (viết hoa chữ cái đầu của từ thứ hai và sử dụng dấu gạch dưới hoặc không). 
Ví dụ: $user_name, $myVariable, $phoneNumber.


- Variable naming rules:

    + Variable names start with the dollar sign ($): Every variable in PHP must begin with a dollar sign. 
    For example: $variable_name.

    + Variable names are case-sensitive: 
This means that $myVariable and $myvariable are considered two different variables.

    + Variable names can contain letters, numbers, and underscores (_): For example, $my_variable, $user123.

    + Variable names cannot start with a number: Names like $123user are not valid, but $user123 is valid.

    + Avoid using special characters: In variable names, avoid using special characters like spaces, hyphens, periods, or other symbols. 
For example, $my-variable or $my variable are not valid.

    + Use descriptive and readable variable names: Choose variable names that describe the purpose or content of the variable. Using meaningful names makes your code more readable and maintainable. For example, use $userName instead of $u or $un.

    + Avoid using PHP keywords: Avoid naming variables with the same names as PHP keywords like if, else, while, etc.

    + Follow common naming conventions: Follow naming conventions for variables, such as snake_case (using underscores) or camelCase (capitalizing the first letter of subsequent words with or without underscores). For example: $user_name, $myVariable, $phoneNumber.
*/

/* 
- Để truy cập giá trị của một biến trong PHP, bạn sử dụng tên biến kèm theo dấu $
- Phạm vi truy cập của biến : 
    + Phạm vi cục bộ (Local Scope): Biến có phạm vi cục bộ chỉ có thể được truy cập và sử dụng trong phạm vi nơi nó được khai báo.
Phạm vi cục bộ bao gồm biến được định nghĩa trong hàm hoặc phương thức.
    + Phạm vi toàn cục (Global Scope): Biến có phạm vi toàn cục có thể được truy cập và sử dụng từ bất kỳ đâu trong mã PHP, 
bao gồm cả ngoài các hàm và phương thức.

*/
