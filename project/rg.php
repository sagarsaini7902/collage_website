<?php

<ul>
	<li><a href="home.html">HOME</a></li>
	<li><a href="about.html">ABOUT US</a></li>
	<li><a href="login.html">LOGIN</a></li>
	<li><a href="help.html">HELP</a></li>
</ul>

	$sname="localhost";
	$user="root";
	$pass="password";
	
	echo "Registration form detail given blow. <br> <Br>";
	$name =$_REQUEST['name'];
	$uname =$_REQUEST['uname'];
	$email =$_REQUEST['email'];
	$mno =$_REQUEST['mno'];
	$g =$_REQUEST['gndr'];
	$password =$_REQUEST['password'];
	
	echo "Student name - <b>",$name,"</b>. <br>";
	echo "Father name - <b>",$uname,"</b>. <br>";
	echo "Email is - <b>",$email,"</b>. <br>";
	echo "Contact number - <b>",$mno,"</b>. <br>";
	echo "Gender - <b>",$g,"</b>. <br>";
	echo "Password - <b>",$password,"</b>. <br>";
	
	
	//creating database
	$sql="create database COER";
	if(mysqli_query($conn,$sql))
	{
		echo "Database Created";
	}
	else
	{
		echo "Error : ".mysql_error($conn);
	}
	mysqli_close($sql);	
	
	
	
	//creating table in database
	$conn1=mysqli_connect($name, $user, $pass,"COER");
	if(!$conn1)
	{
			die('connection failed '.mysqli_connect_error());
	}
	$query="create table Student1(Name varchar(30), FatherName varchar(30), Gender varchar(30), Mobile_No varchar(30), Email varchar(30))";
	$result=mysqli_query($conn,$query);
	mysqli_close($conn);	
	
	
	
	
	//sending data to database
	$conn= mysqli_connect($sname, $user, $pass, "coer");
	if(!$conn)
	{
		die('Connection failed.'.mysqli_connect_error());
	}
	$query="insert into student_data values('$name','$uname','$g','$mno','$email','$password')";
	$result=mysqli_query($conn,$query);
	mysqli_close($conn);
?>