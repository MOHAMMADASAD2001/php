<!-- 1.	Write a PHP script to see if the specified year is a leap year or not.
Sample Input: 2013
Sample Output: ‘This year is not a leap year’
 -->
 <?php 
 $year = 2013;
 if ($year % 4 == 0 ) {
 echo "This year is a leap year";
 }
 else {
    echo "This year is not a leap year";
 }
 echo "<br>"
?>
<!-- 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
Sample Input: 27
Sample Output: ‘It is summertime!’
 -->

 <?php 
 $temperature = 27 ;
 if ($temperature < 20) {
    echo "we are in winter";
 }
 else {
    echo "It is summertime!";
 }
 echo "<br>"
?>
<!-- 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
Sample Output: ( 2 + 2 ) * 3 = 12
 -->

 <?php
 $num1 = 2;
 $num2 = 2;

if ($num1 == $num2) {
    $sum = ($num1 + $num2) * 3;
    echo "($num1 + $num2)*3 = $sum";
}
else {
    $sum = $num1 + $num2;
    echo "$num1 + $num2 = $sum";
}
echo "<br>"; 
?>

<!-- 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’
 -->

 <?php
 $num1 = 10;
 $num2 = 10;

 if (($num1+$num2)== 30) {
    echo "true";
 }
else {
    echo "false";
}
echo "<br>";
?>

<!-- 5.	Write in PHP script to check if the given positive number is a multiple of 3.
Sample Input: number = 20
Sample Output: ‘false’
 -->

 <?php
 $number = 20;
 if ($number % 3 == 0 ) {
    echo "true";
 }
 else {
    echo "false";
 }
echo "<br>";
?>

<!-- 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
Sample Input: number = 50
Sample Output: ‘true’
 -->

 <?php 
 $number1 = 50;
 if ($number1 <=50 && $number1 >=20) {
    echo "true";
 } 
else {
    echo "false";
}
echo "<br>";
?>

<!-- 7.	Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9
 -->
 <?php
 $num1 = 1;
 $num2 = 5;
 $num3 = 9;

 if ($num1 > $num2 && $num1 > $num3){
echo $num1;
 }
 else if ($num2 > $num3 && $num2 > $num1){
    echo $num2;
 }
 else {
    echo $num3;
 }
 echo "<br>";
 ?>

 <!-- 8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
a.	For first 50 units – 2.50 JOD/Unit
b.	For next 100 units – 5.00 JOD/Unit
c.	For next 100 units – 6.20 JOD/Unit
d.	For units above 250 – 7.50 JOD/Uni
 -->

<?php
$x = 500 ;
if ($x <= 50) {
   $JD = $x * 2.5 ;
   echo "$JD JOD"; 

}
else if ($x <= 150){
   $sumJD = $x -50 ;
   $Y = $sumJD *5 ;
   $JD = $Y + (50 * 2.5);
   echo "$JD JOD";
} 
else if ($x <= 250 ) {
   $sumJD = $x -50-100 ;
   $Y = $sumJD *6.2 ;
   $JD = $Y + (50 * 2.5)+ (100* 5 );
   echo "$JD JOD";
}
else if ($x > 250 ) { 
   $sumJD = $x -50-100-100 ;
   $Y = $sumJD *7.5;
   $JD = $Y + (50 * 2.5)+ (100* 5 )+(100*6.2);
   echo "$JD JOD";
} 
echo "<br>";
?>








 <!-- 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

Sample Input: 15
Sample Output: ‘is no eligible to vote’
 -->

 <?php
 $input = 15;
 if ($input <=18) {
    echo "is no eligible to vote";
 }
 else {
    echo "is  eligible to vote";
 }
 echo "<br>";
 ?>

 <!-- 10.	Write php script  to check whether a number is positive, negative or zero

Sample Input: -60
Sample Output: ‘Negative’
 -->

 <?php
 $input = -60;
 if ($input > 0) {
    echo    "positive";
 }
 else if ($input < 0) {
    echo    "negative";

 }
 else {
    echo "Zero";
 }
 echo "<br>";
 ?>

<!-- 11.	Write php script to make a calculator, the calculator should contain the four main operations 

e.	Addition
f.	Subtraction
g.	Multiplication
h.	Division
 -->









 <!-- 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D
-->

<?php
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
if ($scores <60) {
   echo "F";
}
elseif ($scores >60 && $scores <70) {
   echo "D";
} 
elseif ($scores >70 && $scores < 80) {
   echo "C";
}
elseif ($scores >80 && $scores < 90) {
   echo "B";
}
elseif ($scores >90 && $scores < 100) {
   echo "A"; 
}
?>         