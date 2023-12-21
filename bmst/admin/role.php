<?php 

include("../config/config.php");


if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
    $message='<p>'.$Session['status'].'</p>';
    unset($_SESSION['status']);
}

//$query="select id,name,status from roll";
$roleHtml='';
$result = $conn->query("select * from role");
if($result->num_rows > 0){
   
   while($row = $Result->fetch_assoc()){
      $id = $row['id'];
    $roleHtml .= '
    <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['description'].'</td>
            <td><a href="role_manage.php?id='.$row['id'].'">Edit</a> /<button>Delete</button>/<button>Delete</button></td>
    
</tr>';
    
   }
   
    

        
    

    
}

?>

<h2>Role</h2>
<a href="role_manage.php">Add New Role</a>
<table border="1" style="width:100%">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
          
</tr>
</thead>
<tbody>
<tr>
            <td>1</td>
            <td>Admin</td>
            <td>This is boss</td>
            <td><button>Edit</button>/<button>Delete</button></td>
    
</tr>
</tbody>
</table>
<?php ?>
