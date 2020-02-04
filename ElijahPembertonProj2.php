<?php 

$x = 18;


if(isset($_POST['FirstName'])){

    $FirstName = htmlentities($_POST['FirstName']);


  }

  if(isset($_POST['LastName'])){

    $LastName = htmlentities($_POST['LastName']);


  }
  if(isset($_POST['age'])){

    $age = htmlentities($_POST['age']);


  }


  


  if($age == $x)
  {echo "hello my name is: " $FirstName $LastName "I am: " $age " and I am old enough to vote In the United States."}
  else{echo "hello my name is: " $FirstName $LastName "I am: " $age " and I am not old enough to vote In the United States."}


?>

<!DOCTYPE html >
<html>
 <head>
     <title> Example Page </title>
     
</head>

<body>  
    <form method="GET" action="ElijahPembertonProj2.php">
		<div>
			<label>FirstName</label><br>
			<input type="text" name="FirstName">
		</div>
		<div>
			<label>LastName</label><br>
			<input type="text" name="LastName">
        </div>	
        <div>
			<label>Age</label><br>
			<input type="text" name="age">
		</div>	
		<input type="submit" value="Submit">
	</form>
	
	<h1><?php echo "{$name}'s Profile"; ?></h1>

</body> 


</html>