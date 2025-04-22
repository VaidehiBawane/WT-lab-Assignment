<?php
	$servername="127.0.0.1";
	$username="root";
	$password="";
	
	$conn= new mysqli($servername,$username,$password,"test");
	if($conn->conect_error){
		die("Connection failed".$con->connect_error);
	}
	echo"Success";
	echo "<br>";
	$sql="SELECT * from student";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		echo "Got theuser data";
		while($row=$result->fetch_assoc()){
			echo "id".$row["id"]."Name:".$row["name"];
		}
		$conn->close();
	}
?>
