<?php
function sum($num1,$num2){
    return $num1 +$num2;
}



if(isset($_GET['submit'])){
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    $result= sum($num1, $num2);
    header("location:calc.php?result=$result");
}else{
    header("location:calc.php");
}
?>