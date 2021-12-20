<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/sus-amogus/sus-amogus.github.io/css/amogus.min.css">

<body>
    <div class="container">
        <p>
            <?php
                error_reporting(E_ALL ^ E_WARNING);

                $servername   = $_POST["server"];
                $database = $_POST["db"];
                $username = $_POST["username"];
                $password = $_POST["pw"];

                // Create connection
                if ($_POST["db"]) {
                    $mysqli = new mysqli($servername, $username, $password, $database);
                } else {
                    $mysqli = new mysqli($servername, $username, $password);
                }
                
                // Check connection
                if ($mysqli -> connect_error) {
                    die("<h3>Failed to connect to MySQL</h3><samp>" . $mysqli -> connect_error . "</samp>");
                }
                echo "<h3>Connected successfully</h3>";
            ?>
        </p>
    </div>
</body>