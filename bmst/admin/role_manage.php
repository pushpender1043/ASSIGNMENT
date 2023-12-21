<?php include("footer.php");?>


<?php  
include('../config/config.php');
include('header.php');

$id='';
    $title='';
    $description='';
     if(isset($_GET['id'])&& $_GET['id']>0){           
             $id = $_GET['id'];

    $a = $conn->query("select name,description from role where id=".$id);
         
     if($a->num_rows >0){
        $c = $a->fetch_assoc();
            $title=$c['name'];
            $description=$c['description'];

       }
         

     }





















$description="";
$title="";
if(isset($_GET['id']) && $_GET['id']>0){
    //edit
    $result =$conn->query("select * from role where id=".$_GET['id']);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        print_r($row);
        $title=$row['name'];
        $description=$row['description'];
    }
}

?>

<h2>Role Manage<h2>
<a href="role_manage.php">Add New Role</a>
<form method="Post" action="callback/role.php" enctype="multipart/form-data"><!--multimedia content dollar underscore files me milta h-->
<input type="text" name="title" value="<?php echo $title; ?>" required>
<textarea name="description" ><?php echo $description; ?></textarea>
<input type="submit">
</form>
<?php  include('footer.php'); ?>