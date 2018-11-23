<?php 
$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['email'];
$d=$_POST['pass'];
$severname="localhost";
$username="root";
$password="";
$dbname="planner";
$conn=mysqli_connect($severname,$username,$password,$dbname);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
else
{
    $sql="insert into `user`(`fname`,`lname`,`email`,`password`)values('$a','$b','$c','$d');";
    $var=mysqli_query($conn,$sql);
    if($var)
    {
        $_SESSION["name"]=$a;
        $_SESSION["lname"]=$b;
        header('location: index.php');

    }
    else
    {
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }
}
mysqli_close($conn); ?>