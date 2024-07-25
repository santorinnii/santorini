<?php 
/* Принимаем данные из формы */ 
  $name = $_POST["name"];  
  $phone = $_POST["phone"]; 
 
 
/* Подключаемся к базе данных */ 
  $link = mysqli_connect("localhost", "root", ""); 
  mysqli_select_db($link, "vertex"); 
 
/* Записывает данные */  
$sql = "INSERT INTO f(Name, Phone) VALUES ('$name', '$phone')"; 
$result=mysqli_query($link, $sql); 
 
/* Делаем редирект обратно */ 
header("Location: ".$_SERVER["HTTP_REFERER"]);  
exit; 
?>