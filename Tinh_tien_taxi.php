<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
<input type="text" name="km" placeholder="Nhập số km đi được">
    <input type="submit" value="Tính">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $S= $_REQUEST["km"];
    if($S<=0){
        echo "Vui long nhap do dai quang duong di";
    }else if($S>0&& $S<2){
        echo $S*15000 ."VND";
    }else if($S>=2&&$S<=5){
        echo 15000 + ($S-1) *13500 ."VND";
    }else if($S>5&&$S<120){
        echo (15000 + (4 *13500))+($S-5)*11000 ."VND";
    }else if($S>120){
        echo ((15000 + 4 *13500)+($S-5)*11000)*0.9;
    }
}
