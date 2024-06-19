<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "success";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
} else {
    die("sorry we failed to connect : " .
    mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
}

$sql = "SELECT * FROM `signup` ";
$result = mysqli_query($conn,$sql);


// $num = mysqli_num_rows($result);
// echo "<br>";
// echo "number of rows = " . $num ;
$s=0;
while($row = mysqli_fetch_row($result)){
     if( $row[2]==$email && $row[3]==$pass)
     {
         $s=1;
        }
    }
    if($s==1){
    echo "you have logged in successfully .";
    include "index.php";

    }
    else{
        echo "login failed"; 
        
    }
?>
