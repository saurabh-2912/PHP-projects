<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "success";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
    echo "connection  with database is successfully established";
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
   echo "<br>";
     if( $row[2]==$email && $row[3]==$pass)
     {
         $s=1;
    }
  }

echo "<br>";
echo "<br>";
if($s==1){
    require 'index.php';
}
else{
    echo "login failed"; 

}

?>