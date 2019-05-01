<?php
  
require_once("connect.php");  

    
$name = $_POST['name']; // не работает  
$id = $_POST['id']; 
//$name = $item['name']; // не работает    
// $id = 5; // а так работает!!! 
//$name = 'Ходжиакбар'; // а так работает!!! 
//$id = $_POST['id']; // не работает 
 
//$query = $pdo->prepare( "DELETE FROM employees WHERE name = '$name'"); 
     //$query->execute();  
 
 
 
$pdo->exec("DELETE FROM employees WHERE id = '$id'"); 

var_dump($pdo);

//$sql = "DELETE FROM employees WHERE name = '$id'";

//$res = $pdo->query($sql); //эта строка нужна
 
//$res = $query->fetchAll(); 
//var_dump($res);   
 
/*$sql = "DELETE FROM employees WHERE id = :id"; 
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);   
$stmt->execute(); // тоже не работает!
   
      $res = $stmt->fetchAll();   */

     //var_dump($res); 

 /* $stmt = $pdo->prepare("SELECT id, title FROM department"); 
              $stmt->execute();
              $res = $stmt->fetchAll(); */
               
             // var_dump($res); exit;

 /* try{
     
    if(isset($_POST['delete'])){ 
        
      
 }   
}

catch(PDOException $e){
    $e->getMessage();
}  */