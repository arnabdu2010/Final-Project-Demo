

<!DOCTYPE html>
<html>
<head>
   <title> Registration in webtech </title>
   
   </head>
   <body>
   <form action="" method="POST">
     <fieldset>
	     <legend> Registration </legend>
		 
		 Username:
		 <input type="text" name="username" value=""/><br><br>
		 Password:
		 <input type="password" name="password" value=""/><br><br>
		 Email:
		 <input type="email" name="email" value=""/><br><br>
		 DOB:
		 <input type="date" name="dob" ><br><br>
		 
		<select id="type" name="type" value="SElect">
 
  <option value="customer">customer</option>
</select>
		 
		 
		 <input type="submit" name="submit" value="registration"/><br><br>
		 

   </fieldset>
   </form>
   <?php
    $db = mysqli_connect("localhost", "root", "", "webtech");

   if (isset($_POST['submit'])){
	   
	   $un =$_POST['username'];
	   $ps =$_POST['password'];
	   $em =$_POST['email'];
	   $da =$_POST['dob'];
	   $cs =$_POST['type'];
	   if($un!="" && $ps!=""&& $em!="" && $da!="" &&$cs!=""){
		  $sql = "INSERT INTO users (username,password,email,dob,type) VALUES ('$un','$ps','$em','$da','$cs')";

  if(mysqli_query($db, $sql)){
			echo "data succesfully save ";
		}else{
			return false;
		}
		   
	   }
	   else{
		   echo "data not inserted ";
	   }
   }
   ?>
   </body>
   </html>
    		 
		 
   	
	