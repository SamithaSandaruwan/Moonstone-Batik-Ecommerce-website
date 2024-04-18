<?php
$host="localhost";
$username="id20417394_root";
$password="^d2cckF*8og@0j?x";
$dbname="id20417394_account";

$conn=mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno())
    echo "success".mysqli_connect_errno();
else
    echo "unsuccess";
    
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$msg = filter_input(INPUT_POST, 'msg');

$sql = "INSERT INTO feedback (username,email,message) values ('$username','$email','$msg')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
?>