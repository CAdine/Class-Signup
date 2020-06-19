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
		
	<center>
	<h1> Student Menu - Remove Courses</h1>
	<h3>View Courses</h3>
        <form action="course_reg.php" method ="POST">
             <table> 
				<tr>
               		<th>Course ID</th>
               		<th>Course Name</th>
					<th>teacherID</th>
					<th>Start Time</th>
					<th>End Time</th>
					<th>Semster</th>
					<th>CRN</th>
				</tr>	
		</form>
	<?php
		//only displays course if user is logged in
            if(isset($_SESSION['username'])){
		
				$sql = "SELECT * FROM courses"; 
					$result = $connect->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					//add output into table row
					while($row = $result->fetch_assoc()) {
						
					echo "<tr><td>" . $row["courseID"]. "</td><td>". 
					$row["courseName"]. "</td><td>".
					$row["teacherID"]. "</td><td>".		
					$row["startTime"]. "</td><td>".
					$row["endTime"]. "</td><td>".
					$row["semester"]. "</td><td>".
					$row["CRN"]. "</td></tr>";					
					}	
					echo"</table>";

				}
			}
	?>
	
	<h3>To remove courses enter the Student ID and Course sectionID </h3>
        <form action = "drop_course.php" method ="POST">
            <table> 
            <tr><td> Student ID:</td><td><input type="text" id="studentID" name="studentID"required></td>
			<tr><td> CRN number:</td><td><input type="text" id="secID" name="secID"required></td></tr>	
               		
            
    				
            </table>
			
			<center><br><br><td><input type="submit" id="submit" name="submit" value="Submit"></center>
               		
            <?php
				 
					if(isset($_POST['studentID'], $_POST['secID'])){
						
						
							$stuID = $_POST['studentID'];
							$secID =$_POST['secID'];
							 
							//UPDATE QUERY
							$sql = "DELETE FROM registration
							WHERE studentID =$stuID AND CRN =$secID"; 
							
							$result = $connect->query($sql); 
							if($connect->query($sql)==TRUE){
							echo "Records has been deleted!";
							
							}else{
								echo "ERROR! No records has been deleted!";
							}
							
						
					}
				?>
				
	</table><br>
        <a href="registration.php">Register for Courses</a></li>
         </form>
               		
	</center>
	</main>
	
	</div>


<footer><i>Copyright @ 2017 School Registration </footer>
</div>       
</body>

</html>