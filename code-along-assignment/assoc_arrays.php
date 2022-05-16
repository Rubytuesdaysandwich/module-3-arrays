<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Associative arrays</title>
  </head>
  <body>
    <!-- navigation -->
  <header>
  <ul>
    <li><a href="arrays.php">arrays</a></li>
    <li><a href="array_functions.php">array functions</a></li>
    <li><a href="#">assoc_arrays</a></li>
  </ul>
</header>
<!-- end navigation -->
  <?php
  $assoc = array("first_name"=>"Kevin", "last_name"=>"Skoglund");//associative array containing first name and last names?>
<?php echo $assoc ["first_name"];//echo first name?><br/>
<?php echo $assoc ["first_name"] . " " . $assoc["last_name"];//echo first and last name in a concatenated form?><br/>
<?php $assoc ["first_name"] = "Larry";//giving a new name in the first name category assigning variable ?>
<?php echo $assoc ["first_name"] . " " . $assoc["last_name"];//echo first and last name updated from last variable assignment?><br/>

<?php //echo $assoc[0];------?This will not work. It is looking for a file name ?><br/>

<?php $numbers = array(4,8,15,16,23,42);//normal array?>
<?php $numbers = array(0=>4,1=>8,2=>15,3=>16,4=>23,5=>42);//associative array;?>
<?php echo $numbers[0];//echo number position 0 ?>

  
  </body>
</html>
