<?php
$conn = mysqli_connect("localhost","root","","ttlab");

$dis=mysqli_query($conn,"SELECT name,branch FROM user_det");
$i=1;
echo "BEFORE DELETION:<br>";
while($display = mysqli_fetch_assoc($dis)){
    echo "Name " . $i . ": " . $display['name'] . " - Branch: ".$display['branch']." <br>";
    $i++;
}

$del=mysqli_query($conn,"DELETE FROM user_det WHERE branch = 'CSE'");

$dis=mysqli_query($conn,"SELECT name, branch FROM user_det");
$i=1;
echo "AFTER DELETION OF CSE STUDENTS:<br>";
while($display = mysqli_fetch_assoc($dis)){
    echo "Name " . $i . ": " . $display['name'] . " - Branch: ".$display['branch']." <br>";
    $i++;
}

// mysqli_query($conn,"UPDATE user_det SET branch = 'CSE' WHERE branch = 'CVL'");

// $dis=mysqli_query($conn,"SELECT name, branch FROM user_det WHERE 1");
// $i=1;
// echo "AFTER UPDATING OF CVL TO CSE STUDENTS :<br>";
// while($display = mysqli_fetch_assoc($dis)){
//     echo "Name " . $i . ": " . $display['name'] . " - Branch: ".$display['branch']." <br>";
//     $i++;
// }

?>