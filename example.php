<h1>PHP PDO CRUD using MySQL and Bootstrap</h1> 
<<span class="pl-ent">a</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>btn btn-primary<span class="pl-pds">"</span></span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>addStudent.php<span class="pl-pds">"</span></span> <span class="pl-e">style</span>=<span class="pl-s"><span class="pl-pds">"</span>float:right<span class="pl-pds">"</span></span>>Add Student</<span class="pl-ent">a</span>>       
 <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th> First Name </th>
              <th> Last Name</th>
              <th> Username</th>
              <th> Email</th>
              <th class="td-actions"> </th>
            </tr>
          </thead>
          <tbody>
            <?php
				foreach($all as $item)
				{
				  ?>
            <tr id="row_num_<?php echo $col['student_id'];   ?>">
              <td><?php echo $item['first_name'];  ?></td>
              <td><?php echo $item['last_name'];  ?></td>
              <td><?php echo $item['user_name'];  ?></td>
              <td><?php echo $item['email'];  ?></td>
              <td class="td-actions"><a class="btn btn-small btn-success" href="editStudent.php?student_id=<?php echo $item['student_id'];   ?>"><i class="icon-large icon-edit"> </i></a><a class="btn btn-danger btn-small" onClick="getStudentId(<?php echo $item['student_id'];   ?>)"   href="javascript:void(0)"><i class="btn-icon-only icon-remove"> </i></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <p>похоже н индийский говнокод</p>
        <!--https://phpclicks.com/php-pdo-crud-tutorial/ -->