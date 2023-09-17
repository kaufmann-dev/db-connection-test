<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/sus-amogus/sus-amogus.github.io/css/amogus.min.css">

<body>
    <div class="container">
        <p>
            <?php
		echo "in php";
                require 'vendor/autoload.php';
		echo "require sucessful";
                
                // error_reporting(E_ALL ^ E_WARNING);

                $servername   = $_POST["server"];
                $database = $_POST["db"];
                $username = $_POST["username"];
                $password = $_POST["pw"];
		echo "get post suicess";

                // Create connection
                $mongo = new MongoDB\Client('mongodb://' . $username . ':' . $password . '@' . $servername);
		echo "connection suicess";

                // Check connection
                try {
                    if ($_POST["db"]) {
                        $mongo -> selectDatabase($database);
                    } else {
                        $mongo -> getWriteConcern();
                    }
                }
                catch (\MongoDB\Driver\Exception\ConnectionTimeoutException $connectionTimeoutException) {
                    die("<h3>Failed to connect to MongoDB</h3><samp>" . $connectionTimeoutException . "</samp>");
                }
                echo "<h3>Connected successfully</h3>";
		echo "connection test suicess";
            ?>
        </p>
    </div>
</body>