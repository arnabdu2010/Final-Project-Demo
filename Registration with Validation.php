

<!DOCTYPE html>
<html>
<head>
   <title> Registration in webtech </title>
   <script>
     function validateform(){
		 var username=document.myform.username.value;
		 var password=document.myform.password.value;
		 var email=document.myform.email.value;
		 var dob =document.myform.dob.value;
		 if(username==null || username==""){
			 alert("name can not be blank");
			 return false;
		 }else if(password.length<2){
			 alert("password must be atleast 2 characters long.");
			 return false;
		 }else if(email==""||email==email.indexof('@')<=0){
			 alert("please fill up the email correctly");
			 return false;
		 }
			 
	 }
	 </script>
    
		 
   
   </head>
   <body>
   <form  name="myform"  action="" method="POST" onsubmit="return validateform()">
     <fieldset>
	     <legend> Registration </legend>
		 
		 Username:
		 <input type="text" name="username" value="" /><br><br>
		 Password:
		 <input type="password" name="password" value=""/><br><br>
		 Email:
		 <input type="email" name="email" value=""/><br><br>
		 DOB:
		 <input type="date" name="dob"value="" ><br><br>
		 
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
    		 
		 
   	
	