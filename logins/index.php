<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
$servername = "localhost";
$username = "W01184547";
$password = "Victoriacs!";a
$dbname = "W01184547";

if(isset($_REQUEST["submit"])){
 $conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
 die("Connection failed: " . $conn->connect_error);
}
 $u_Name = $_POST['UserName'];
 $_SESSION["userName"] = $u_Name;
 $u_Password = $_POST['Password'];
 $u_final = $u_Name . ':' . $u_Password;
 $u_Hash = password_hash($u_final, PASSWORD_DEFAULT);
 $u_dbPass = "";
 $sql = "SELECT `Password` FROM `userTable` WHERE userName='$u_Name'";
 $result = $conn->query($sql);
if($result->num_rows > 0){
 while($row= $result->fetch_assoc())
 {
   $u_dbPass =$row["Password"];
 }
}
if (password_verify($u_final, $u_dbPass)){
 header('Location: http://icarus.cs.weber.edu/~va84547/userGame.php');
}
else {
 echo 'invalid password.';
}
$conn->close();
}
?>
<body>
<p> Please Login, if you are a new user create a new account </p>
<form id="userForm" method="post">
      UserName: <input type="text" name="UserName" id="uName">
     Password: <input type="password" name="Password" id="uPass">
   <input type="submit" name="submit" value="LOGIN"/>
 </form>
<br> </br>
<button onclick="window.location='http://icarus.cs.weber.edu/~va84547/newUser.php'">Create New Account</button>
<script>
</script>

</body>
</html>
