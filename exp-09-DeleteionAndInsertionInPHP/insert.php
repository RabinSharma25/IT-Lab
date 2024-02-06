<?php
$conn = mysqli_connect("localhost","root","","ttlab");

$array1=array("Shankhalp","20CSEC12","VII","CSE");
$array2=array("Shank","20CSEC13","VII","CSE");
$array3=array("Sparsh","20CSEC14","VII","CSE");
$array4=array("Satyam","20CSEC12","VII","CVL");


for ($i=1; $i <=4; $i++) { 
    $name = ${'array'.$i}[0];
    $rollno = ${'array'.$i}[1];
    $sem = ${'array'.$i}[2];
    $bran = ${'array'.$i}[3];
    $ins = mysqli_query($conn,"INSERT INTO user_det(name,roll_no,sem,branch) VALUES ('$name','$rollno','$sem','$bran')");
    if($ins){
        echo "Row ".$i." inserted successfully <br>";
    }else{
        echo "Row ".$i." not inserted";
    }
}
?>