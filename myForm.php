<html>
<body>
    <?php 
        $name = $_POST["name"];
        $email = $_POST["email"];
        $title = $_POST["title"];
        $url = $_POST["url"];
    ?>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "resourcedetails";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO resources (`sr_no`, `name`, `email`, `title`, `url`)
    VALUES ('','$name', '$email', '$title', '$url')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
    <br>
    <br>
    <a href="http://localhost/wp-project/index.php">Show Resources</a>
</body>
</html>