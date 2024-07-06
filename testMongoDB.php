<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/sus-amogus/sus-amogus.github.io/css/amogus.min.css">

<body>
    <div class="container">
        <p>
            <?php
                require 'vendor/autoload.php';

                error_reporting(E_ALL ^ E_WARNING);
                //ini_set('display_errors', 1);

                $servername   = $_POST["server"];
                //$database = $_POST["db"];
                $username = $_POST["username"];
                $password = $_POST["pw"];

                // Create connection
                $mongo = new MongoDB\Client('mongodb://' . $username . ':' . $password . '@' . $servername);

                // Check connection
                try {
                    $mongo -> listDatabases();
                } catch (\Exception $e){
                    die("<h3>Failed to connect to MongoDB</h3><samp>" . $e . "</samp>");
                }
                echo "<h3>Connected successfully</h3>";
            ?>
        </p>
    </div>
</body>
