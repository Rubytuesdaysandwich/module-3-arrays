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
part 2:
    <?php $citys = array("Tokyo" => "Japan", "Mexico City" => "Mexico", "New York City" => "USA", "Mumbai" => "India", "Seoul" => "South Korea" , "Shanghai" =>  "China", "Lagos" => "Nigeria", "Buenos Aires" => "Argentina", "Cairo" => "Egypt", "London" => "England");
    //associative array contains cities and countries?>
    <?php echo $citys["Tokyo"] ;?>
</body>
</html>
<!-- We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. 
Then came sunshine with a few clouds and some rain. At least we didn't get any hail or sleet. -->


<!-- Tokyo, Japan
Mexico City, Mexico
New York City, USA
Mumbai, India
Seoul, South Korea
Shanghai, China
Lagos, Nigeria
Buenos Aires, Argentina
Cairo, Egypt
London, England. -->