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
      <form action="form_page_3.php" medthod="GET">
        <div class="inside-block">
            <h2>Have a bad cough or stuffy nose, runny nose, tired breathing and inhale?</h2>
            <h2><input type="radio" name="haveCough" value="YES" <?php echo ($_SESSION['haveCough'] == "YES")? "checked":""; ?> required>YES</h2>
            <h2><input type="radio" name="haveCough" value="NO"<?php echo ($_SESSION['haveCough'] == "NO")? "checked":""; ?> required>NO</h2>
            <h2>Do you feel fever or measure body temperature over 37.5 *C?</h2>
            <h2><input type="radio" name="haveFever" value="YES" <?php echo ($_SESSION['haveFever'] == "YES")? "checked":""; ?> required>YES</h2>
            <h2><input type="radio" name="haveFever" value="NO" <?php echo ($_SESSION['haveFever'] == "NO")? "checked":""; ?> required>NO</h2>
        </div>
        <div class="button-block">
            <h2>
              <button type="button" name="back"><a href="index.php">Back</a></button>
              <input type="submit" name="next" value="Next">
            </h2>
        </div>
      </form>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="main.js" charset="utf-8"></script>
</html>
