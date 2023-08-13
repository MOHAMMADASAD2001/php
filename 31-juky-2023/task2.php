<!-- $colors = array('white', 'green', 'red') 
Write a PHP script that will display the colors as unordered list : 
Expected Output:  
•	green
•	red
•	white
 -->

 <?php
$colors = array('white', 'green', 'red');

echo '<ul>';
foreach ($colors as $color) {
    echo '<li>' . $color . '</li>';
}
echo '</ul>';
echo '<br>'; 
?>

<!-- $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
Expected Output:
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin 
 -->

 <?php
 $cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);
asort($cities);
foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital . <br>";
}
echo "<br>";
?>

<!-- $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

Write a PHP script to display the first element of the above array. 
Expected Output:  white
 -->

 <?php
 $color = array (4 => 'white', 6 => 'green', 11=> 'red');

 $firstElement = array_shift($color);
echo $firstElement;
echo "<br>";
?>


<!-- Write a PHP script to sort the following associative array depending on the key value [asc] :  

Sample Input: 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

Expected Output:

c = apple
b = banana
d = lemon
a = orange
 -->

 <?php
 $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

 ksort ($fruits);
 foreach ($fruits as $key => $value) {
    echo    $key . "= " . $value . "<br>";
 }
 echo "<br>";
 ?>

 <!-- Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 

The shortest array length is 1. The longest array length is 4.
 -->

<?php
  $words =  array("abcd","abc","de","hjjj","g","wer");
  $longest = $words[0];
  $shortest = $words[0];
  for ($i=0; $i < count($words); $i++) {
      if (strlen($words[$i]) > strlen($longest)) {
          $longest = $words[$i];       
      }
      if (strlen($words[$i]) < strlen($shortest)) {
          $shortest = $words[$i];
      }
  }
  echo "The shortest array length is " . strlen($shortest) . " The longest array length is " . strlen($longest) . "<br>";
?>
