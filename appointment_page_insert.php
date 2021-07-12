<?php


session_start();

	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

if (isset($_POST['submit'])) {
    if (isset($_POST['username']) &&
        isset($_POST['gender']) && isset($_POST['age']) &&
        isset($_POST['hospital']) && isset($_POST['timings'])) {
        
        $username = $_POST['username'];
        $email = $user_data['email'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $hospital = $_POST['hospital'];
        $timings = $_POST['timings'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "ht";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM appointment WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO appointment(username, email, gender, age, hospital, timings) values(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$username, $email, $gender, $age, $hospital, $timings);
                if ($stmt->execute()) {
                    header("Location: appointment_success.php", true, 301);
                    exit();
                }
                else {
                    echo $stmt->error;
                }
           
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>