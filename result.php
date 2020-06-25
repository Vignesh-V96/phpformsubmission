<?php 
include 'connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
echo '<br>';
echo "Welcome "  .$name ."<br>";
echo "your email id " .$email . "<br>";
echo "your phone no: " .$phone . "<br>";
$insertquery =" insert into  formregistration (name,email,phone) values('$name','$email','$phone')";


$res = mysqli_query ($conn, $insertquery);

if($res){
	?>
<script>alert('data inserted properly');</script>
<?php
}else{
	?>
	<script>alert('data not inserted properly');</script>
	<?php
}
?>


