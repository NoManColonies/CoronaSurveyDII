<?php
if (isset($_GET['firstName'])) {
  $_SESSION['firstName'] = $_GET['firstName'];
}
if (isset($_GET['lastName'])) {
  $_SESSION['lastName'] = $_GET['lastName'];
}
if (isset($_GET['age'])) {
  $_SESSION['age'] = $_GET['age'];
}
if (isset($_GET['gender'])) {
  $_SESSION['gender'] = $_GET['gender'];
}
if (isset($_GET['noDisease'])) {
  $_SESSION['noDisease'] = $_GET['noDisease'];
}
if (isset($_GET['isHypertension'])) {
  $_SESSION['isHypertension'] = $_GET['isHypertension'];
}
if (isset($_GET['isDiabets'])) {
  $_SESSION['isDiabets'] = $_GET['isDiabets'];
}
if (isset($_GET['isDyslipidemia'])) {
  $_SESSION['isDyslipidemia'] = $_GET['isDyslipidemia'];
}
if (isset($_GET['isHearth'])) {
  $_SESSION['isHearth'] = $_GET['isHearth'];
}
if (isset($_GET['isRenopathy'])) {
  $_SESSION['isRenopathy'] = $_GET['isRenopathy'];
}
if (isset($_GET['isPneumonopathy'])) {
  $_SESSION['isPneumonopathy'] = $_GET['isPneumonopathy'];
}
if (isset($_GET['haveCough'])) {
  $_SESSION['haveCough'] = $_GET['haveCough'];
}
if (isset($_GET['haveFever'])) {
  $_SESSION['haveFever'] = $_GET['haveFever'];
}
if (isset($_GET['history'])) {
  $_SESSION['history'] = $_GET['history'];
}
echo "done";
?>
