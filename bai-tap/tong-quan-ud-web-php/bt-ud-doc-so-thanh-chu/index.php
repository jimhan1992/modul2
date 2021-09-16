<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Ứng dụng đọc số thành chữ</title>
</head>
<body>
<form action="" method="post" >
    <label>
        <input type="number" name="input" placeholder="Nhập số cần đọc">
        <input type="submit" id="submit" value="đọc">
    </label>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $inputNumber = $_POST["input"];
        switch ($inputNumber){
            case "0":
                echo "không";
                break;
            case "1":
                echo "một";
                break;
            case "2":
                echo "hai";
                break;
            case "3";
                echo "ba";
                break;
            case "4":
                echo "bốn";
                break;
            case "5":
                echo "năm";
                break;
            case "6":
                echo "sau";
                break;
            case "7":
                echo "bảy";
                break;
            case "8":
                echo "tám";
                break;
            case "9":
                echo "chín";
                break;
            default:
                echo "out of ability";
    }
}
?>
</body>
</html>