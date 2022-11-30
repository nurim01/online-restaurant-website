
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','desilicious');

// get the post records
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['number'];
$txtMessage = $_POST['address'];

// database insert SQL code
$sql = "INSERT INTO `FoodOrder` (`id`, `name`, `number`, `email`, `address`) VALUES ('0', '$txtName',  '$txtPhone', '$txtEmail', '$txtMessage')";

// insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
