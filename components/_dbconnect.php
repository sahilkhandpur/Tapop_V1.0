  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tapop";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "connection Failed: " . $conn->connect_error;
    }
?>