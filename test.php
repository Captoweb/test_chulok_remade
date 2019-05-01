<link href="test.css" rel="stylesheet">
<link href="Skeleton/css/normalize.css" rel="stylesheet">
<link href="Skeleton/css/skeleton2.css" rel="stylesheet">
<link href="Skeleton/images/favicon111.png" rel="stylesheet">  

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<?php
  require_once("connect.php"); 


$statement = $pdo->prepare('
SELECT employees.id, employees.name, employees.family, employees.salary, department.title FROM employees 
JOIN department ON employees.department=department.number_employees;'); //подготовить
$statement->execute(); //выполнять

$all = $statement->fetchAll(); 

//var_dump($all);




?>

<div class="container">
<div class="row"> 
  
<nav><a href="index.php"><i class="fas fa-home"></i> Home</a></nav>
<h3>Table of employees</h3>
<h4>5 вариант + Skeleton</h4>

<a class="button button-primary" href="add_emp.php"><i class="fas fa-plus"></i> Добавить работника</a>
   
  <form action="del_action.php" method="post">
 <table class="u-full-width">
  <thead>
    <tr>
       <th>id</th><th>Имя Фамилия</th> <th>Зарплата</th><th>Отдел</th> <th>Изменить</th>
    </tr>
  </thead>
  
  <tbody>
   <?php foreach($all as $item): ?>  
      <tr>
       <?php echo "<input type='hidden' name='id' value=". $item['id'] .">"; ?>
        
         <td name="id"><?= $item['id'] ?>
          <td ><?= $item['name'] ?> 
          <?= $item['family'] ?></td>
          <td><?= $item['salary'] ?></td>
          <td><?= $item['title'] ?></td>
          <td><input type="submit"  value="DEL" class="btn" >  
          
          <input type="button"  value="EDIT" class="btn" > 
          
          </td>
      </tr>  
    <?php endforeach; ?>  
  </tbody> 
     
</table>  
    </form>
 
<p>удаление не получалось из за форм экшн, который связан с кнопкой сабмит! теперь надо редактирование</p>
<p>удаление не правильное!!! удаляются те которы снизу, а не те на которые нажимаешь</p>

<p>может в книге по джей квери есть? AJAX</p>
<br><br>

 
</div><!--//row-->
</div><!--//container-->





