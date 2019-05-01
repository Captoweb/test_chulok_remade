<link href="style.css" rel="stylesheet">
<?php

$pdo = new PDO('mysql:host=localhost;dbname=chulok;charset=utf8','root','');

$stmt = $pdo->prepare('SELECT * FROM employees'); //подготовить
$stmt->execute(); //выполнять

$allE = $stmt->fetchAll();
  
//var_dump($allE);  
?>
<nav><a href="index.php">Home</a></nav>
 
<h3>Table of emploers</h3>
<h4>Второй вариант</h4>
<table>
    <tr class="header"><td>Номер</td><td>Имя</td><td>Фамилия</td><td>Зарплата</td></tr>
    
    <?php foreach ($allE as $hz): ?>
        <tr>
            <td><?= $hz['id'] ?></td> 
            <td><?= $hz['name'] ?></td>
            <td><?= $hz['family'] ?></td> 
            <td><?= $hz['salary'] ?></td>
        </tr>  
    <?php endforeach; ?>
</table>
 

