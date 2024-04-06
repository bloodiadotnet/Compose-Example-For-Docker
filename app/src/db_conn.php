<?php

// Get environment for Amazon ECS or Docker
$dbhost = getenv("MYSQL_HOST");
$dbuser = getenv("MYSQL_USER");
$dbpass = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");
$dbport = getenv("MYSQL_PORT");

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if table exists
$result = $conn->query("SHOW TABLES LIKE 'demo'");

if($result->num_rows == 0) {
    // Table does not exist, so create it
    $sql = "CREATE TABLE demo (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name varchar(191) NOT NULL,
        gender varchar(20) NOT NULL
    )";

    if($conn->query($sql) === TRUE) {
        echo "Table demo created successfully.";
    }
    else {
        echo "Error creating table: " . $conn->error;
    }
}

?>
