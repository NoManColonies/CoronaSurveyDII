<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="index.css">
    <title>COVID19-FORM</title>
</head>
    <body>
        <div class="outlet-block">
            <h1>COVID-19</h1>
            <h2>This screening form Is a risk assessment <br>Respiratory infections from the COVID-19 virus</h2>
            <form action="index.php" medthod="GET">
            <?php
                            $notYet = "";
                            if(isset($_GET['haveCough']) and isset($_GET['haveFever']))
                            {
                                $notYet = "false";
                            }
                            else
                            {
                                $notYet = "true";
                            }
                        ?>
                <?php
                    $style = "";
                    $style2 = "";
                    $style3 = "";
                    $button = "";
                    $button2 = "";
                    $button3 = "";
                    $button4 = "";
                    $button5 = "";
                    $radio1 = "";
                    if(!isset($_GET["next1"]) or isset($_GET["back1"]))
                    {
                        $style = "style=display:block;";
                        $style2 = "style=display:none";
                        $style3 = "style=display:none";
                        $button = "display:none";
                        $button2 = "display:inline";
                        $button3 = "display:none";
                        $button4 = "display:none";
                        $button5 = "display:none";
                    }
                    if(isset($_GET["next1"]) or isset($_GET["back2"]))
                    {
                        $style = "style=display:none;";
                        $style2 = "style=display:block";
                        $style3 = "style=display:none";
                        $button = "display:inline";
                        $button2 = "display:none";
                        $button3 = "display:inline";
                        $button4 = "display:none";
                        $button5 = "display:none";
                    }
                    if(isset($_GET["next2"]) and $notYet == "false")
                    {
                        $style = "style=display:none;";
                        $style2 = "style=display:none";
                        $style3 = "style=display:block";
                        $button = "display:none";
                        $button2 = "display:none";
                        $button3 = "display:none";
                        $button4 = "display:inline";
                        $button5 = "display:inline";
                    }
                    else if(isset($_GET["next2"]) and $notYet == "true")
                    {
                        $style = "style=display:none;";
                        $style2 = "style=display:block";
                        $style3 = "style=display:none";
                        $button = "display:inline";
                        $button2 = "display:none";
                        $button3 = "display:inline";
                        $button4 = "display:none";
                        $button5 = "display:none";
                    }
                ?>
                <div class="inside-block">
                    <div <?php echo "$style" ?>>
                        <h2>First Name : <input type="text" name="firstName"></h2>
                        <h2>Last Name : <input type="text" name="lastName" style="margin-left: 1%;"></h2>
                        <h2>Gender <input type="radio" name="gender"> Male <input type="radio" name="gender"> Female</h2>
                        <h2>Age <input type="number" name="age" min="1" max="120"></h2>
                        <h2>Congenital Disease</h2>
                            <div style="margin-left: 5%;">
                                <h2><input type="checkbox" name="noDisease">  No disease</h2>
                                <h2><input type="checkbox" name="isHypertension">  Hypertension</h2>
                                <h2><input type="checkbox" name="isDiabets">  Diabets</h2>
                                <h2><input type="checkbox" name="isDyslipidemia">  Dyslipidemia</h2>
                                <h2><input type="checkbox" name="isHearth">  Hearth disease</h2>
                                <h2><input type="checkbox" name="isRenopathy">  Renopathy</h2>
                                <h2><input type="checkbox" name="isPneumonopathy">  Pneumonopathy</h2>
                            </div>
                    </div>
                    <div <?php echo "$style2" ?>>
                        <h2>Have a bad cough or stuffy nose, runny nose, tired breathing and inhale?</h2>
                        <h2><input type="radio" name="haveCough" value="YES"> YES</h2>
                        <h2><input type="radio" name="haveCough" value="NO"> NO</h2>
                        <h2>Do you feel fever or measure body temperature over 37.5 *C?</h2>
                        <h2><input type="radio" name="haveFever" value="YES"> YES</h2>
                        <h2><input type="radio" name="haveFever" value="NO"> NO</h2>
                    </div>
                    <div <?php echo "$style3"?>>
                        <?php
                            $notYet = "";
                            if(isset($_GET['haveCough']) and isset($_GET['haveFever']))
                            {
                            $haveCough = $_GET['haveCough'];
                            $haveFever = $_GET['haveFever'];
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
                                $notYet = "true";
                                echo "<h2>Answer must fill</h2>";
                            }
                        ?>
                        <h2>Within these 14 days, has the following history?</h2>
                        <h2><input type="radio" name="history" value="infection"> You have been in close contact with who confirmed that infected by Covid-19 virus</h2>
                        <h2><input type="radio" name="history" value="outbreak"> You have close contact with tourists that comes from countries with outbreaks</h2>
                        <h2><input type="radio" name="history" value="traveling"> You lived with a close person that have traveling from an outbreak country</h2>
                        <h2><input type="radio" name="history" value="abroad"> You are traveling from abroad</h2>
                        <h2><input type="radio" name="history" value="no"> No</h2>
                    </div>
                </div>
                <div>
                    <div class="button-block">
                        <h2><input type="submit" name="back1" value= "Back" style="<?php echo "$button" ?>"> <input type="submit" name="next1" value="Next" style="<?php echo "$button2"?>"> <input type="submit" name="next2" value="Next" style="<?php echo "$button3" ?>"></h2>
                        <h2><input type="submit" name="back2" value= "Back" style="<?php echo "$button5" ?>"> <a href="www.google.com"><input type="submit" name="submit" value= "Submit" style="<?php echo "$button4" ?>"></a></h2>
                    </div>
            </div>
            </form>
        </div>
    </body>
</html>