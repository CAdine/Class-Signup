<?php
	include('connect_db.php'); 
	include('sessions.php');
	echo 'Welcome! ' .$_SESSION['username'];
?>
<!DOCTYPE html>

<head>
    <title>Student - Main Menu</title>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="myCSS.css">
</head>
<body>
<div id="wrapper">
<header> 
<a href ="index.php"><img src = "booklogo.jpg" 
		alt = InfoSchool></a>
		<a href ="index.php">
		<a href ="index.php"> School - Student Menu</a>

</header>	
	<nav>
		<ul>
			<b>
            <li><a href="index.php">Home</a>&nbsp;&nbsp;<a href="logout.php">Logout</a></li>
			</b>
		</ul>
	</nav> 
	<div id="rightcol"> 
	<main>
		
	<center><h1>Student Menu - Edit Profile</h1>
		<form action="edit_Student_Info.php" method ="POST">
               		<table> 
               		<tr><td> Name:</td><td><input type="text" id="studentName" name="studentName"required></td>
               		
               		<tr><td> Password:</td><td><input type="password" id="pass_word" name="pass_word"required></td>
               		
               		<tr><td> Address:</td><td><input type="text" id="studentAddress" name="studentAddress"required></td></tr>
               		
               		<tr><td> Phone Number:</td><td><input type="text" id="studNum" name="studNum"required></td></tr>
               		
               		<tr><td> Email:</td><td><input type="text" id="studentEmail" name="studentEmail"required></td></tr>
               		<td><input type="submit" id="submit" name="submit" value="Submit">
               		
               		
               		<br><br><a href="view_Student_Information.php">View Contact Information</a>
    			
        </table>
        <?php
			
			if(isset($_POST['studentName'], $_POST['pass_word'],
					$_POST['studentAddress'],$_POST['studNum'],$_POST['studentEmail'])){
						 
						//UPDATE QUERY
						$sql = "UPDATE students SET studentName='".$_POST['studentName']."',
						password='".$_POST['pass_word']."',
						studentAddress='".$_POST['studentAddress']."',
						studentPhone='".$_POST['studNum']."',
						studentEmail='".$_POST['studentEmail']."'
						WHERE studentID = '".$_SESSION['username']."' ";
						$result = $connect->query($sql); 
						
						//Display if records have been updated
						if($connect->query($sql)==TRUE){
							echo "Records Updated!";
							
						}else{
							echo "Error! No records updated";
						}
				
        			}
			
		?>
           
	</center>
	</main>
   
	
</div>

<footer><i>Copyright @ 2017 School Registration </footer>
</div>       
</body>

</html>