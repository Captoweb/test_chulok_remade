<link href="style.css" rel="stylesheet">
<link href="Skeleton/css/normalize.css" rel="stylesheet">
<link href="Skeleton/css/skeleton.css" rel="stylesheet">
<link href="Skeleton/images/newfavicon.png" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php

$pdo = new PDO('mysql:host=localhost;dbname=chulok;charset=utf8','root','');

$statement = $pdo->prepare('SELECT * FROM employees'); //подготовить
$statement->execute(); //выполнять

$all = $statement->fetchAll();

//var_dump($all);
?>


<div class="row">
  <div class="one column hid">1</div>
  
  <div class="ten columns block">
  
<nav><a href="index.php"><i class="fas fa-home"></i> Home</a></nav>
<h3>Table of emploers</h3>
<h4>4 вариант + Skeleton</h4>

<a class="button button-primary" href="add_emp.php"><i class="fas fa-plus"></i> Добавить работника</a>

<table>
   <tr class="header"> 
      <td>Имя</td><td>Фамилия</td><td>Отчество</td><td>Пол</td><td>Зарплата</td><td>Отдел</td><td>Изменить </td> 
   </tr>
      
      <?php foreach($all as $item): ?> 
        <tr>
           <td><?= $item['name'] ?></td> 
           <td><?= $item['family'] ?></td>
           <td><?= $item['patronymic'] ?></td>
           <td><?= $item['gender'] ?></td>
           <td><?= $item['salary'] ?></td>
           <td><?= $item['department'] ?></td>
           <td><a href=""><i class="far fa-eye"></i></a>
           <a href=""><i class="far fa-edit"></i></a>
           <a href=""><i class="far fa-trash-alt"></i></a></td>
        </tr> 
      <?php endforeach; ?>  
         
</table>
<p> херня с таблицей получается! наверное придется таблицу с бутстрапа брать</p>
</div> 
  <div class="one column hid">1</div>
  
</div><!--//row-->






