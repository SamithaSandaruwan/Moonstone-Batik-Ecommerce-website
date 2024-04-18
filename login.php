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
    
$username = filter_input(INPUT_POST, 'name1');
$password = filter_input(INPUT_POST, 'password1');

$sql = "SELECT `username`, `pasword` FROM account where username='$username' and pasword='$password' ";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count==1){
    header("Location:index.html");
}
else{
    echo "faild";
}
$conn->close();
?>