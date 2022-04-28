<html>
<body style="background-color: aqua">
    <div style="text-align: center; margin-top: 40vh">
    <h1>
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
    echo "New resource added successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
    <br>
    <br>
    </h1>
    <h3>
    <a href="http://localhost/wp-project/index.php">Show Resources</a>
    </h3>
    </div>
</body>
</html>