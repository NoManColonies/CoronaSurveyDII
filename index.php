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
      <form action="form_page_2.php" medthod="GET">
        <div class="inside-block">
          <h2>First Name : <input type="text" name="firstName" value="<?php echo $_SESSION['firstName']; ?>" required></h2>
          <h2>Last Name : <input type="text" name="lastName" style="margin-left: 1%;" value="<?php echo $_SESSION['lastName']; ?>" required></h2>
          <h2>Gender <input type="radio" name="gender" <?php echo ($_SESSION['gender'] == 'male')? "checked":""; ?> value="male" required> Male <input type="radio" name="gender" <?php echo ($_SESSION['gender'] == 'female')? "checked":""; ?> value="female" required> Female</h2>
          <h2>Age <input type="number" name="age" min="1" max="120" value="<?php echo $_SESSION['age']; ?>" required></h2>
          <h2>Congenital Disease</h2>
          <div style="margin-left: 5%;">
            <h2><input type="checkbox" name="noDisease" <?php echo ($_SESSION['noDisease'] == "true")? "checked":""; ?>>  No disease</h2>
            <h2><input type="checkbox" name="isHypertension" <?php echo ($_SESSION['isHypertension'] == "true")? "checked":""; ?>>  Hypertension</h2>
            <h2><input type="checkbox" name="isDiabets" <?php echo ($_SESSION['isDiabets'] == "true")? "checked":""; ?>>  Diabets</h2>
            <h2><input type="checkbox" name="isDyslipidemia" <?php echo ($_SESSION['isDyslipidemia'] == "true")? "checked":""; ?>>  Dyslipidemia</h2>
            <h2><input type="checkbox" name="isHearth" <?php echo ($_SESSION['isHearth'] == "true")? "checked":""; ?>>  Hearth disease</h2>
            <h2><input type="checkbox" name="isRenopathy" <?php echo ($_SESSION['isRenopathy'] == "true")? "checked":""; ?>>  Renopathy</h2>
            <h2><input type="checkbox" name="isPneumonopathy" <?php echo ($_SESSION['isPneumonopathy'] == "true")? "checked":""; ?>>  Pneumonopathy</h2>
          </div>
        </div>
        <div class="button-block">
            <h2><input type="submit" name="next" value="Next"></h2>
        </div>
      </form>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="main.js" charset="utf-8"></script>
</html>
