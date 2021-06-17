<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	
	
	$hasError=false;
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		
		else{
			$uname=$_POST["username"];
		}

		}
		
		
		if(!$hasError){
			echo $name."<br>";
			
			}
?>






<html>
<head></head>
<body>
  <fieldset>
  <form action="" method = "post">
    
	<table>
	
	<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" placeholder="Password"></td>
					</tr>
					
					<tr>
					
					<td>Confirm Password : </td>
					<td><input type="password" name="password" placeholder="Password"></td>
					
					</tr>
					
					<tr>
					
					<td>Email : </td>
					<td><input type="text" name="Email" placeholder="Email"></td>
					
					</tr>
					
					<tr>
					
					<td>Phone : </td>
					<td>
					
					 <table>
						  
						  <tr>
						      <td colspan="2"><input type="text" name="code" placeholder="code"></td>
						      <td colspan="2"><input type="text" name="code" placeholder="code"></td>
						  </tr>
						  
						  </table>
					
					</td>
					
					</tr>
					
					
					<tr>
					
					<td>Address :</td>
					<td>
					      <table>
						  
						  <tr>
						      <td colspan="5"><input type="text" name="code" placeholder="code"></td>
						  </tr>
						   <tr>
						      <td colspan="2"><input type="text" name="code" placeholder="code"></td>
							  <td><span>-</span></td>
							  <td colspan="2"><span><input type="text" name="code" placeholder="code"></span></td>
						  </tr>
						  
						  </table>
						  
					</td>
					</tr>
					
					

	         
	
	</table>
  
  
  </form>
  </fieldset>
</body>
</html>