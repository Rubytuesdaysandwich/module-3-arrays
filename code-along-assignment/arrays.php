<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Arrays</title>
  </head>
  <body>
    <!-- navigation -->
<header>
  <ul>
    <li><a href="#">arrays</a></li>
    <li><a href="array_functions.php">array functions</a></li>
    <li><a href="assoc_arrays.php">assoc_arrays</a></li>
  </ul>
</header>
<!-- end navigation -->


<?php
$numbers = array(4,8,15,16,23,42);//array containing numbers
echo $numbers[0];//arrays start at 0
?>
<?php $mixed = array(6, "fox", "dog", array("x","y","z"));//mixed array with integers and strings?><br/>
<?php echo $mixed[2];//echo array position 2?><br/>
<?php //echo $mixed[3];?><br/>
<?php //echo $mixed; ?><br/>

<?php echo $mixed[3][1] //accessing the array on line 11 and echoing position 3 and 1 out-putting  y ?><br/>

<?php $mixed[2] = "cat";//set position 2 to cat?>
<?php $mixed[4] = "mouse";//put item into the fourth array position?>
<?php $mixed[] = "horse";//sets horse to the 5th array position or last position?>

<pre>
<?php echo print_r($mixed);//prints out array in table form so we can see them?>
</pre>


<?php
//php 5.4 added the short array syntax
$array = [1,2,3];
?>

  </body>
</html>
