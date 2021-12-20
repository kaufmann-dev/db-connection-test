<!DOCTYPE html>
<html>
  <head>
    <title>Test MySQL connection</title>
    <meta charset="utf-8">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="useful_javascript_functions.js"></script>

    <link rel="stylesheet" type="text/css" href="amogus.min.css">
  </head>
<body>

  <div class="container pt-lg">
    <h1 class="d-inline align-middle mr-lg">Test MySQL connection</h1>
    <button id="changeDB">MongoDB</button>

    <form action="testMySQL.php" method="POST" class="mt-lg" id="connectionDetails">
      <label for="server">Server address:</label>
      <input type="text" id="server" name="server" placeholder="localhost" required><br>

      <label for="db">Database (optional):</label>
      <input type="text" id="db" name="db" placeholder="insy"><br>

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

    $('#changeDB').clickToggle(function() {
      $('#connectionDetails').attr('action', 'testMongoDB.php');
      $('h1').text("Test MongoDB connection");
      $('#changeDB').text("MySQL");
    }, function() {
      $('#connectionDetails').attr('action', 'testMySQL.php');
      $('h1').text("Test MySQL connection");
      $('#changeDB').text("MongoDB");
    });
  </script>

</body>
</html>