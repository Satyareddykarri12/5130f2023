<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_info";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        // Collect form data
        $current_location = $_POST['current_location'];
        $from = $_POST['from_'];
        $desired_location = $_POST['desired_location'];
        $family_origin = $_POST['family_origin'];
        $place_of_birth = $_POST['place_of_birth'];
        $current_residence = $_POST['current_residence'];
        $desired_residence = $_POST['desired_residence'];
        $significant_other_origin = $_POST['significant_other_origin'];
        $additional_fact_1 = $_POST['additional_fact_1'];
        $additional_fact_2 = $_POST['additional_fact_2'];

        // $message = "
        // <h1>User Information Form Submission</h1>
        // <p><strong>Current Location:</strong> $current_location</p>
        // <p><strong>From:</strong> $from</p>
        // <p><strong>Desired Location:</strong> $desired_location</p>
        // <p><strong>Family Origin:</strong> $family_origin</p>
        // <p><strong>Place of Birth:</strong> $place_of_birth</p>
        // <p><strong>Current Residence:</strong> $current_residence</p>
        // <p><strong>Desired Residence:</strong> $desired_residence</p>
        // <p><strong>Significant Other's Place of Birth:</strong> $significant_other_origin</p>
        // <p><strong>Hobbies:</strong> $additional_fact_1</p>
        // <p><strong>Contact Details:</strong> $additional_fact_2</p>
        // ";
    $sql = "INSERT INTO user_table (current_location, from_, desired_location', family_origin, place_of_birth, current_residence, desired_residence, significant_other_origin, additional_fact_1, additional_fact_2)
    VALUES ('$current_location', '$from_', '$desired_location', '$family_origin', '$place_of_birth', '$current_residence', '$desired_residence', '$significant_other_origin', '$additional_fact_1', '$additional_fact_2')";

    if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}


?>
