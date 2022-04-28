<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Resource Library</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div style="margin-top: 3rem">
    <h1>Learning Resource Library</h1>
    <div style="margin: 2rem auto">
        <a href="http://localhost/wp-project/form.html">Create Resource</a>
    </div>

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

        $sql = "SELECT `title`, `url` FROM resources";
        
        echo "<table>
                <tr>
                    <th>Resource</th>
                    <th>Link</th>
                </tr>";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $url = $row['url'];
            echo "<tr><td>" . $row["title"] . "</td>" . '<td><a target="_blank" rel="noopener noreferrer" href="'.$row['url'].'">Let`s Learn</a></td>' . "</tr>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
    ?>
</div>

</body>

</html>