<?php
  
require_once("connect.php"); 
 
try{
    if(empty($_POST['name'])) exit ('Не заполнено поле "Имя!"');
    if(empty($_POST['family'])) exit ('Не заполнено поле "Фамилия!"'); 
    if(empty($_POST['salary'])) exit (' "Где моя зарплата?!"');
    else echo 'Форма успешно заполнена.';
    
    $arr = [ 
    "name"=> $_POST['name'],   
    "family"=> $_POST['family'],
    "patronymic"=> $_POST['patronymic'],    
    "department"=> $_POST['department'],
    "salary"=> $_POST['salary'], 
    "gender"=> $_POST['gender'], 
   ];
    
      $query = "INSERT INTO employees (name, family, patronymic, department, salary, gender)
        VALUES (:name, :family, :patronymic, :department, :salary, :gender)";  
    
        $stmt = $pdo->prepare($query);  
        $res = $stmt->execute($arr);      
 
    
}
      
catch(PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
} 



