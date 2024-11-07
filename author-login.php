<?php
    require_once 'db.php';

    // Insert data
    $sql = "INSERT INTO authors (first_name, last_name, email) VALUES ('John', 'Doe', 'john.doe@example.com')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Select data
    $sql = "SELECT id, first_name, last_name FROM authors";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();

?>