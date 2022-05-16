<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

part 1:
    <?php $weather = array ("rain","sunshine","clouds","hail","sleet","snow","wind");//builing an array of different weather conditions?><br/>
    <?php echo $line1 = "we've seen all kinds of weather this month. At the beginning of the month, we had  {$weather[5]} and {$weather[6]}.";//line 1 of phrase?><br/>
    <?php echo $line2 = "Then came {$weather[1]} with a few {$weather[2]} and some {$weather[0]}.";//line 2 of phrase?>
    <?php echo $line3 ="At least we didn't get any {$weather[3]} or {$weather[4]}.";//line 3 of phrase?><br/>
    <!-- <?php echo $line1 .$line2 .$line3;// echoing line 1 line2 and line3 three together with concatenation.?> -->
    <br/>
part 2:
    <?php $citys = array("Japan" => "Tokyo", "Mexico" => "Mexico City" ,"USA" =>  "New York City", "India" => "Mumbai", "South Korea" => "Seoul" , "China" =>"Shanghai"  , "Nigeria" =>"Lagos" , "Argentina" => "Buenos Aires", "Egypt" =>"Cairo" , "England" => "London");
    //associative array contains cities and countries?>
    <?php  $keyscountry = (array_keys($citys));//pulling the array keys from the associative array which allow them to be accessed by numbered position below?>
    <?php  $valuescity = (array_values($citys));//pulling out the values of the array which allows them to be accessed by numbered position below?>
<br/>
<?php echo $valuescity[0] . ", " . $keyscountry[0];//these are pulling the items from the array keys and values on line 18 and 19?><br/>
<?php echo $valuescity[1] . ", " . $keyscountry[1];?><br/>
<?php echo $valuescity[2] . ", " . $keyscountry[2];?><br/>
<?php echo $valuescity[3] . ", " . $keyscountry[3];?><br/>
<?php echo $valuescity[4] . ", " . $keyscountry[4];?><br/>
<?php echo $valuescity[5] . ", " . $keyscountry[5];?><br/>
<?php echo $valuescity[6] . ", " . $keyscountry[6];?><br/>
<?php echo $valuescity[7] . ", " . $keyscountry[7];?><br/>
<?php echo $valuescity[8] . ", " . $keyscountry[8];?><br/>
<?php echo $valuescity[9] . ", " . $keyscountry[9];?><br/>










</html>