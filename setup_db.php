<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS ciblog";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully\n";
} else {
  echo "Error creating database: " . $conn->error . "\n";
}

$conn->select_db("ciblog");

// Create table
$sql = "CREATE TABLE IF NOT EXISTS blogs (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
description TEXT NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table blogs created successfully\n";
} else {
  echo "Error creating table: " . $conn->error . "\n";
}

// Check if table is empty
$result = $conn->query("SELECT count(*) as count FROM blogs");
$row = $result->fetch_assoc();

if ($row['count'] == 0) {
    // Insert sample data
    $sql = "INSERT INTO blogs (title, description) VALUES ('First Blog', 'This is my first blog post'), ('Second Blog', 'Another interesting post')";
    if ($conn->query($sql) === TRUE) {
        echo "Sample data inserted successfully\n";
    } else {
        echo "Error inserting sample data: " . $conn->error . "\n";
    }
} else {
    echo "Table already has data\n";
}

$conn->close();
?>
