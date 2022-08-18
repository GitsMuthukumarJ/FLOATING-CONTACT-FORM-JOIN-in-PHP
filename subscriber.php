<?php 
$con=mysqli_connect("localhost","root","","subscriber") or die(mysqli_error());

if((isset($_POST['submit'])))
{

$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$Phone = $con->real_escape_string($_POST['phone']);
$Message = $con->real_escape_string($_POST['message']);

$sql="INSERT INTO subscriber (name, email, phone, message, created_date) VALUES ('".$Name."','".$Email."', '".$Phone."', '".$Message."','" . date('Y-m-d') . "')";

if($result = $con->query($sql)){
//die('Error occured [' . $con->error . ']');

echo "<script>
alert('Thank you! We will get in touch with you soon');
window.location.href='https://drgalen.org';
</script>";
}
}

?>
