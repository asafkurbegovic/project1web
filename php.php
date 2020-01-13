
<?php 


session_start();
header('location:kontkat.html');

$con = mysqli_connect('localhost' , 'root' , '');

mysqli_select_db($con , 'poruke');

$name = $_POST ['mail'];
$pass = $_POST ['message'];

$s = " select * from mail where name = '$name'";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if($num > 0) {
    echo "Username taken";
}
else {
    $reg = "insert into poruke(mail ,poruka) values ('$name'  , '$pass' )";
    mysqli_query($con , $reg);
    echo "Registration succesfull";
}

?>
