<link href="style.css" rel="stylesheet">
<link href="Skeleton/css/normalize.css" rel="stylesheet">
<link href="Skeleton/css/skeleton2.css" rel="stylesheet">


<div class="container">
<div class="row">
      <a href="test.php">Назад</a>
<h3>Добавить нового работника</h3>

<form action="action_emp.php" method="post">
 
  <div class="row">
    <div class="six columns">
      <label for="name">Имя</label>
      <input class="u-full-width" type="text" placeholder="enter name" name="name">
    </div>
    
    <div class="six columns">
      <label for="family">Фамилия</label>
      <input class="u-full-width" type="text" placeholder="enter family" name="family">
    </div>
    </div><!--//row-->
    
    <div class="row">
    <div class="six columns">
      <label for="patronymic">Отчество</label>
      <input class="u-full-width" type="text" placeholder="enter patronymic" name="patronymic">
    </div>
    
    <div class="six columns">
    <label for="gender">Пол</label>
     <select class="u-full-width" name="gender">
            <option value="муж">Мужской</option>
            <option value="жен">Женский</option>
      
        </select>
    </div>
    </div><!--//row-->
    
    
    <div class="row">
    <div class="six columns">
    
      <label for="department">Отдел</label>
         
          <select class="u-full-width" name="department">
          
           
          <?php 
              
              require_once("connect.php"); 
              $stmt = $pdo->prepare("SELECT id, title FROM department");
              $stmt->execute();
              $res = $stmt->fetchAll();
               
             // var_dump($res); exit;
              
              foreach($res as $item){
                  echo "<option value='$item[id]'>$item[title]</option>";
              } 
              
              ?>
           
          </select>
    </div>
    
    <div class="six columns">
      <label for="salary">Зарплата</label>
      <input class="u-full-width" type="number" placeholder="salary" name="salary">
    </div>
  </div><!--//row-->
  
  <input class="button-primary" type="submit" value="Сохранить" name="submit">
</form>

 <p>департамент передается!</p>
 <p>ура!</p>
</div><!--//row-->
</div>



