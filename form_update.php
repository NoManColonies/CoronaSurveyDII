<?php
session_start();
if (!empty($_REQUEST['firstName'])) {
  $_SESSION['firstName'] = $_REQUEST['firstName'];
}
if (!empty($_REQUEST['lastName'])) {
  $_SESSION['lastName'] = $_REQUEST['lastName'];
}
if (!empty($_REQUEST['age'])) {
  $_SESSION['age'] = $_REQUEST['age'];
}
if (!empty($_REQUEST['gender'])) {
  $_SESSION['gender'] = $_REQUEST['gender'];
}
if (!empty($_REQUEST['noDisease'])) {
  $_SESSION['noDisease'] = $_REQUEST['noDisease'];
}
if (!empty($_REQUEST['isHypertension'])) {
  $_SESSION['isHypertension'] = $_REQUEST['isHypertension'];
}
if (!empty($_REQUEST['isDiabets'])) {
  $_SESSION['isDiabets'] = $_REQUEST['isDiabets'];
}
if (!empty($_REQUEST['isDyslipidemia'])) {
  $_SESSION['isDyslipidemia'] = $_REQUEST['isDyslipidemia'];
}
if (!empty($_REQUEST['isHearth'])) {
  $_SESSION['isHearth'] = $_REQUEST['isHearth'];
}
if (!empty($_REQUEST['isRenopathy'])) {
  $_SESSION['isRenopathy'] = $_REQUEST['isRenopathy'];
}
if (!empty($_REQUEST['isPneumonopathy'])) {
  $_SESSION['isPneumonopathy'] = $_REQUEST['isPneumonopathy'];
}
if (!empty($_REQUEST['haveCough'])) {
  $_SESSION['haveCough'] = $_REQUEST['haveCough'];
}
if (!empty($_REQUEST['haveFever'])) {
  $_SESSION['haveFever'] = $_REQUEST['haveFever'];
}
if (!empty($_REQUEST['history'])) {
  $_SESSION['history'] = $_REQUEST['history'];
}
echo "done";
?>
