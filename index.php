<!DOCTYPE html>
<html>
  <head>
    <title>Test MySQL connection</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/sus-amogus/sus-amogus.github.io/css/amogus.min.css">
  </head>
<body>

  <div class="container">
    <h1>Test MySQL connection</h1>

    <form action="testconnection.php" method="POST">
      <label for="server">Server address:</label>
      <input type="text" id="server" name="server" placeholder="localhost" required><br>

      <label for="db">Database:</label>
      <input type="text" id="db" name="db" placeholder="insy" required><br>

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="michael" required><br>

      <label for="pw">Password:</label>
      <input type="password" id="pw" name="pw" placeholder="1234" required><br>

      <input type="submit" value="Submit">
    </form>

    <h2 id="loadingMsgContainer"></h2>
  </div>

  <script>
    $("form").submit(function(){
      var dots = window.setInterval( function() {
        var wait = document.getElementById("loadingMsgContainer");
        if ( wait.innerHTML.length > 3 ) 
            wait.innerHTML = "";
        else 
            wait.innerHTML += ".";
        }, 100);
      });
  </script>

</body>
</html>