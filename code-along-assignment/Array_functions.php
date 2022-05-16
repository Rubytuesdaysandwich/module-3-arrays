<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Array functions</title>
  </head>
  <body>
  
  <?php $numbers = array(8,23,15,42,16,4);//assign array to $numbers?>

  Count:<?php echo count($numbers);//counts the number of item in an array?><br/>
  Max Value:<?php echo max($numbers);//finds the max value?><br/>
  Min value:<?php echo min($numbers);//find the min value?><br/>
<br/>
<pre>
  Sort: <?php echo sort($numbers); print_r($numbers);//sorts smallest to biggest?><br/>
  Reverse sort: <?php echo rsort($numbers); print_r($numbers);//sort biggest to smallest?><br/>
</pre>
<br/>
  Implode: <?php echo $num_string = implode(" * ", $numbers);//create a string. No longer array?><br/>
  Explode: <?php print_r(explode(" * ", $num_string));//rebuilds the array ?><br/>
  <br/>
  15 in the array?:<?php echo in_array(15,$numbers);//returns T/F?><br/>
  19 in the array?:<?php echo in_array(19,$numbers);//returns T/F?><br/>

  </body>
</html>
