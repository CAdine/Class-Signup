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
            <li><a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="logout.php">Logout</a></li>
			</b>
		</ul>

	</nav>
	
	<div id="rightcol"> 
	<main>
		
	<center><h1>&nbsp;&nbsp;&nbsp;Student Menu</h1>
        <h3>&nbsp;&nbsp;&nbsp;View Profile</h3>
            <ul>
				<li><a href="view_student_information.php">View basic information</a></li>
				<li><a href="edit_Student_Info.php">Edit basic information</a></li>
                <li><a href="view_student_timetable.php">View timetable</a></li>
				<li><a href="view_teacher_contact.php">View teacher contact</a></li>
			</ul>
			
		
        <h3>&nbsp;&nbsp;&nbsp;Registration</h3>
            <ul>
				<li><a href="search_course.php">Search for Courses</a></li>
				<li><a href="view_courses.php">View Courses</a></li>
				<li><a href="registration.php">Add Courses</a></li>
				<li><a href="drop_course.php">Drop Courses</a></li>
				<li><a href="payment.php">Payment</a></li>
				<br><br>
                    
            </ul>
     </div>  
	</center>
	</main>
   
	


<footer><i>Copyright @ 2017 School Registration </footer>
</div>       
</body>

</html>