<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_qatouch_new";
	$project_id = '113';

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}


$sql = "SELECT * FROM qa_cases where project_id= $project_id ";
$result = mysqli_query($conn, $sql);

//var_dump($result);exit;

if (mysqli_num_rows($result)  > 0) 
{
	$i = 1;
    // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $i . '-'. $row["case_id"];
		echo "<br>";
		$caseid = $row["case_id"];
		$sql = "UPDATE qa_cases SET case_code='".$i."' WHERE case_id=$caseid";
		mysqli_query($conn, $sql);
		
		//echo $i;
		$i++;
    }
} 
mysqli_close($conn);


/*
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

*/
?>