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
      <form action="form_result.php" medthod="post">
        <div class="inside-block">
          <h2>Within these 14 days, has the following history?</h2>
          <h2><input type="radio" name="history" value="infection" <?php echo ($_SESSION['history'] == "infection")? "checked":""; ?> required> You have been in close contact with who confirmed that infected by Covid-19 virus</h2>
          <h2><input type="radio" name="history" value="outbreak" <?php echo ($_SESSION['history'] == "outbreak")? "checked":""; ?> required> You have close contact with tourists that comes from countries with outbreaks</h2>
          <h2><input type="radio" name="history" value="traveling" <?php echo ($_SESSION['history'] == "traveling")? "checked":""; ?> required> You lived with a close person that have traveling from an outbreak country</h2>
          <h2><input type="radio" name="history" value="abroad" <?php echo ($_SESSION['history'] == "abroad")? "checked":""; ?> required> You are traveling from abroad</h2>
          <h2><input type="radio" name="history" value="no" <?php echo ($_SESSION['history'] == "no")? "checked":""; ?> required> No</h2>
        </div>
        <div class="button-block">
          <h2>
            <div class="">
              <a href="form_page_2.php">Back</a>
            </div>
            <input type="submit" name="next" value="Submit">
          </h2>
        </div>
      </form>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="main.js" charset="utf-8"></script>
</html>
