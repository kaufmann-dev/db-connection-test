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
                $mysqli = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($mysqli -> connect_error) {
                    die("Failed to connect to MySQL: " . $mysqli -> connect_error);
                }
                echo "Connected successfully";
            ?>
        </p>
    </div>
</body>