<?php
$servername = "localhost"; // XAMPP's default server name
$username = "root"; // Default username for MySQL
$password = ""; // Default password for MySQL is empty
$database = "pointofsale"; // Change this to the name you chose for your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['menu_name']) && isset($_POST['menu_description'])) {
        $menu_name = $_POST['menu_name'];
        $menu_description = $_POST['menu_description'];

        // Check if the fields are not empty
        if (!empty($menu_name) && !empty($menu_description)) {
            // Example SQL query to insert data into a table
            $table = "ref_menu"; // Replace with your table name
            $sql = "INSERT INTO `$table` (`menu_name`, `menu_desc`) VALUES ('$menu_name', '$menu_description')";

            if ($conn->query($sql) === TRUE) {
                echo "Data inserted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Both Menu Name and Menu Description are required.";
        }
    } else {
        echo "Menu Name and Menu Description are required.";
    }
}

$conn->close();
?>
