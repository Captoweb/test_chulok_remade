<link href="style.css" rel="stylesheet">
<?php

$pdo = new PDO('mysql:host=localhost;dbname=chulok;charset=utf8','root','');

$stm = $pdo->prepare('SELECT * FROM employees');
$stm->execute();

$allEmpl = $stm->fetchAll();

//var_dump($allEmpl);
?>

<nav>
<a href="index2.php">2 </a>
<a href="index3.php"> 3</a> 
<a href="index4.php"> 4</a>
<a href="test.php"> test</a>
</nav>
<h3>Table of emploers</h3>
<h4>Первый вариант</h4>
<table border="1">
   <tr> <td>id</td><td>Name</td><td>Family</td> <td>Salary</td></tr>
     
      <?php foreach ($allEmpl as $empl): ?>
        <tr>
           <td><?= $empl['id'] ?></td>
           <td><?= $empl['name'] ?></td>
           <td><?= $empl['family'] ?></td>
           <td><?= $empl['salary'] ?></td>
        </tr>
     <?php endforeach; ?> 
</table>
<p>Тут я просто вывел форичем из таблицы работников</p>
<p>и тут же PDO</p>
<a href='index2.php'>index 2</a>
<a href='index3.php'>index 3</a>
