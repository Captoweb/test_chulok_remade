<link href="test.css" rel="stylesheet">
<link href="Skeleton/css/normalize.css" rel="stylesheet">
<link href="Skeleton/css/skeleton2.css" rel="stylesheet">
<link href="Skeleton/images/favicon111.png" rel="stylesheet">  

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<div class="container">

<?php
  require_once("connect.php"); 


$statement = $pdo->prepare('
SELECT employees.id, employees.name, employees.family, employees.salary, department.title FROM employees 
JOIN department ON employees.department=department.number_employees;'); //подготовить
$statement->execute(); //выполнять

 $all = $statement->fetchAll(); 

    
    
foreach ($all as $item){
     echo " {$item['employee']}";
     echo "<form action='del_action.php' method='post'>";
     
     echo "<input type='hidden' name='id' value=". $item['id'] .">";
    
     echo "<p><label>Имя: </label><input type='text' name='name' value=".$item['name']."></p>";
    
     echo "<p><label>Фамилия: </label><input type='text' name='family' value=".$item['family']."></p>";
     echo "<p><label>Отчество: </label><input type='text' name='patron' value=".$item['patronymic']."></p>";
     
     echo "<p><label>Зарплата: </label><input type='text' name='salary' value=".$item['salary']."></p>";
      
     echo "<p><label>Отдел:</label> </p>";
        
   
     echo "<p><label>Пол: </label><input type='text' name='gender' value=".$item['gender']."></p>";
     
     echo '<hr>';
     echo '<a href="del_action.php"><i class="far fa-trash-alt"></i></a>';
    
     echo '<input type="submit"  value="Удалить" class="btn">';
    
     echo"</form>";
    echo '<input type="submit"  value="Ниже формы" class="btn">';
  }
 
   ?>  
   
   
    <table class="u-full-width" action='del_action.php'>
    <form action='del_action.php' method='post'>
  <thead>
    <tr>
       <th>Имя Фамилия</th> <th>Зарплата</th><th>Отдел</th> <th>Изменить</th>
    </tr>
  </thead>
  
  <tbody>
  
   <?php foreach($all as $item): ?>  
    
      <tr>
       
       
        <input type='hidden' name='id' value=<?= $item['id']; ?>>
          <td ><?= $item['name'] ?> 
          <?= $item['family'] ?></td>
          <td><?= $item['salary'] ?></td> 
          <td><?= $item['title'] ?></td>
          <td> 
           <input type="submit"  value="Удалить" class="btn">
          <a href="del_action.php"><i class="far fa-trash-alt"></i></a></td>
      </tr> 
    <?php endforeach; ?>  
  </tbody> 
      </form>
</table>
   
   <br><br><br><br>  
    </div>
  
<td id="<?php echo $item['id'];   ?>">