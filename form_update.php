<?php
if (isset($_REQUEST['firstName'])) {
  $_SESSION['firstName'] = $_REQUEST['firstName'];
}
if (isset($_REQUEST['lastName'])) {
  $_SESSION['lastName'] = $_REQUEST['lastName'];
}
if (isset($_REQUEST['age'])) {
  $_SESSION['age'] = $_REQUEST['age'];
}
if (isset($_REQUEST['gender'])) {
  $_SESSION['gender'] = $_REQUEST['gender'];
}
if (isset($_REQUEST['noDisease'])) {
  $_SESSION['noDisease'] = $_REQUEST['noDisease'];
}
if (isset($_REQUEST['isHypertension'])) {
  $_SESSION['isHypertension'] = $_REQUEST['isHypertension'];
}
if (isset($_REQUEST['isDiabets'])) {
  $_SESSION['isDiabets'] = $_REQUEST['isDiabets'];
}
if (isset($_REQUEST['isDyslipidemia'])) {
  $_SESSION['isDyslipidemia'] = $_REQUEST['isDyslipidemia'];
}
if (isset($_REQUEST['isHearth'])) {
  $_SESSION['isHearth'] = $_REQUEST['isHearth'];
}
if (isset($_REQUEST['isRenopathy'])) {
  $_SESSION['isRenopathy'] = $_REQUEST['isRenopathy'];
}
if (isset($_REQUEST['isPneumonopathy'])) {
  $_SESSION['isPneumonopathy'] = $_REQUEST['isPneumonopathy'];
}
if (isset($_REQUEST['haveCough'])) {
  $_SESSION['haveCough'] = $_REQUEST['haveCough'];
}
if (isset($_REQUEST['haveFever'])) {
  $_SESSION['haveFever'] = $_REQUEST['haveFever'];
}
if (isset($_REQUEST['history'])) {
  $_SESSION['history'] = $_REQUEST['history'];
}
echo "done";
?>
