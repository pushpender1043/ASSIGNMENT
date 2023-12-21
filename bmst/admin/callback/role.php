<?php
//include("../../config/config.php");
//insert update delete//isset check ki ye array m h ya nhi
//trim extra space ko htaa deta h//agr kuch data h tbhi submit hoga//required mandatory krdeta h file ko upload krna
if(isset($_POST['title']) && trim($_POST['title'])!=''){
$title=$_POSTS['title'];
$description=$_POST['description'];
// $query="insert into 'role'('name')values('1')";
$query="INSERT INTO roll(name,description)VALUES('title','$description')";

$checkResult=$conn->query($query);
if($checkResult){
    $_SESSION['status']='sucess';
    header("location:../role.php");
    echo'pass';
}
else{
    $_SESSION['status']='fail';
    header("location:../role.php");
    echo 'fail';
}
}
?>