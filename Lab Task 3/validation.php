<html>
  <head></head>
  <body>
   <?php
    $uname="";
	$err_uname="";
	$password="";
	$err_password="";
	$gender="";
	$err_gender="";
	$hobbies="";
	$err_hobbies="";
	$profession="";
	$err_profession="";
	$bio="";
	$err_bio="";
	
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	 if(empty($_POST["uname"])){
	   $err_uname = "*Username Required";
	   }
	 else if(strlen($_POST["uname"]) < 6){
	   $err_uname = "*Username should be at least 6 characters";
	   }
	 else{
	   $uname = $_POST("uname");
	   }
	 if(empty($_POST["pass"])){
	   $err_password = "*Password Required";
	   }
	 else{
	   $password = $_POST("pass");
	   }
	 if(isset($_POST["gender"])){
	    echo  "Gender: ". $_POST["gender"];
	   }
     if(isset($_POST["hobbies"]))
       	  echo  "Hobbies: ". $_POST["hobbies"];
     if(isset($_POST["profession"]))
       	  echo  "Profession: ". $_POST["profession"];	  
	 if(empty($_POST["bio"])){
	   $err_bio = "*Bio Required";
	   }
	 else{
	   $bio = $_POST("bio");
	   }
	}
    
  ?>
  
	
	<form action="" method="post">
			<table>
				<tr>
					<td rowspan="2"><span>User access</span></td>
					<td>:<input type="text" placeholder="Username" value="<?php echo $uname;?>" name="uname">
					<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<!--<td ><span>Password </span></td>-->
					<td>:<input type="password" placeholder="Password" name="pass">
					<span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
					<span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td><span>Hobbies</span></td>
					<td>:<input type="checkbox" value="Movies" name="hobbies[]">Movies 
					     <input type="checkbox" value="Music" name="hobbies[]">Music 
						 <input type="checkbox" value="Games" name="hobbies[]">Games
						 <span><?php echo $err_hobbies;?></span></td>
				</tr>
				<tr>
					<td><span>Profession</span></td>
					<td>:
						<select name="profession">
							<option>Teaching</option>
							<option>Business</option>
							<option>Service</option>
						</select> 
                    <span><?php echo $err_profession;?></span></td>
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea name="bio"></textarea>
					<span><?php echo $err_bio;?></span></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit"></td>
				</tr>
				
			</table>
			 
			
		</form>

  </body>

</html>