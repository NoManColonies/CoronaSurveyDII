<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="index.css">
    <title>COVID19-FORM</title>
  </head>
  <body>
    <?php
    require_once('config.php');
    ?>
    <div class="outlet-block">
      <h1>COVID-19</h1>
      <h2>This screening form Is a risk assessment <br>Respiratory infections from the COVID-19 virus</h2>
      <form action="index.php" medthod="GET">
        <div class="inside-block">
          <?php
          if(isset($_SESSION['haveCough']) and isset($_SESSION['haveFever']))
          {
          $haveCough = $_SESSION['haveCough'];
          $haveFever = $_SESSION['haveFever'];
            if($haveCough == "YES" and $haveFever == "YES")
            {
              echo "<h3>Now you have a bad cough and fever</h3>";
            }
            else if($haveCough == "YES" and $haveFever == "NO")
            {
              echo "<h3>Now you only have a bad cough</h3>";
            }
            else if($haveCough == "NO" and $haveFever == "YES")
            {
              echo "<h3>Now you only have a fever</h3>";
            }
            else if($haveCough == "NO" and $haveFever == "NO")
            {
              echo "<h3>Now you do not have a bad cough and fever</h3>";
            }
          }
          else
          {
            echo "<h2>ERROR_ANSWER_NOT_VALID</h2>";
          }
          ?>
        </div>
        <div class="button-block">
            <h2><input type="submit" name="back" value="Home"></h2>
        </div>
      </form>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="main.js" charset="utf-8"></script>
</html>
