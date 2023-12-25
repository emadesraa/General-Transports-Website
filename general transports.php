<?php
$From=$_REQUEST['From'];
$To=$_REQUEST['To'];
$Time=$_REQUEST['Time'];
$FullName=$_REQUEST['FullName'];
$Email=$_REQUEST['Email'];

if(isset($_POST['btnset']))

{
   $host="localhost";
   $user="root";
   $password="";
   $db="products";

   $conn=mysqli_connect($host,$user,$password,$db)
   $insert="insert into user values('$From,$To,$Time,$FullName,$Email')";
   
   $mysqli_query($conn,$insert);
   if($conn){
    echo("<h1 style='color:green;'>Successfully</h1>");
   }
   else{
    echo("<h1 style='color:red;'>Failed</h1>");


   }

}
?>