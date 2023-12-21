<?php
include("header.php");

?>

<H2>Employee</H2>
<form method="POST" action="employee_manage.php" enctype="multipart/form">
<input type="text" name="username">
<input type="password" name="password">
<input type="submit">
</form>
<?php
include("footer.php");
?>