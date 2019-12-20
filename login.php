<html>
<head>
<title>Login
</title>
<style>
.cursor {
cursor: pointer;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
	border-radius: 8px;
	border: 2px solid #4CAW50;
	padding: 15px 235px;
}
a {
border: 0;
outline: 0;
cursor: pointer;
background-color: transparent;
text-decoration: none;
}
</style>
</head>
<body bgcolor="lightblue">
<table bgcolor="#efefef" class="posit" width=1100px align=center>
<tr>
    <td width=80%><a href="index.html"><img src="logo.png" width=120 height=60></a></td>
    <td><table><tr><td bgcolor="#fe610c" class="cursor txt" width=85 height=35 align=right style="border-radius:10px"><font color=white><center>Free Listing</center></font></td></tr></table></td>
    <td align=right><a href="login.php">Login </a>/<a href="signup.php"> Sign Up <a> &nbsp</td>
    </tr>
   </table>
   <table width="82.5%" align=center bgcolor=white border rules=none>
   <tr><td bgcolor="brown" align=center height="70" valign="bottom"><h2><font color="white" face="Comic Sans Ms">Login</font></h2></td></tr>
   <tr><td><hr NOSHADE></td></tr>
   <tr><td align="center"><font face="Comic Sans Ms" size=5 >
		<form name="f1" method="post" ACTION="<?php echo $_SERVER["PHP_SELF"];?>">
			<table cellspacing="3">
			
			<tr align=><td><font color=blue>Phone</font><br></td></tr>
			<tr><td><input type="text" name="phone" id="phone" size="70" placeholder="+91 Mobile No." style="height:40"><br></td></tr>
			<tr align=><td><font color=blue>Password</font><br></td></tr>
			<tr><td><input type="password" name="pswd" id="pswd" size="70" placeholder="Choose Your Password" style="height:40"><br></td></tr>
			<tr align=center><td><input type="submit" name="btnsubmit" id="btnsubmit" size="70" size=40 value="signin" class="button cursor"><br></td></tr>
			<tr align=center><td><br></td></tr>
			<tr align=center><td><br></td></tr>
			<tr align=center><td><br></td></tr>
			<tr align=center><td><br></td></tr>
			<tr align=center><td><hr color=grey></td></tr>
			<tr align=center><td><font color=grey>Copyrights </font><a href="index.html"><font color=grey>blackbox.com</font></a><br></td></tr>
		</td>
		</form>
   </tr>
   </table>
   
   <?php
   
	 
	 /*...............................*/

$conn = new mysqli("localhost","root","","myschool");
 	   		

if($conn ->connect_error){
		   die("connection failed".$conn->connect_error);
	   }
	   $sql = "SELECT * FROM mystudent";
	   $result = $conn->query($sql);
	   $b = $_POST["phone"];
			$d = $_POST["pswd"];

	   	   if($result->num_rows>0)
	   {
		   
		   //output data of each row
		   while($row = $result->fetch_assoc())
		   {
			   $e = $row["uname"];
			   $a = $row["phone"];
			   $c = $row["pswd"];
				if($a==$b && $c==$d){
				   header("location:loggedin.html");
				   session_start();
				}
		   }
	   }
	  
	   else
	   {
		   echo "no records found.....";
	   }
	   $conn->close();
	   
   ?>
   
   
	</body>
	</html>
			
