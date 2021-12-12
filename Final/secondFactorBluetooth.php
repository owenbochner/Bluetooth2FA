<?php
   if( $_POST["device"] ) {
      ob_start();
      if ($_POST["device"] == "dhelsper iPhone") {
         header("Location: http://localhost/TwoFactor/loginSuccess.php");
      }
      else {
         header("Location: http://localhost/TwoFactor/loginFailed.php");
      }
      ob_end_flush();
      exit();
   }
?>
<!DOCTYPE html>
<head>
    <title>Auto Select Login</title>
    <link rel="stylesheet" href="twoFactor.css">
    <link rel="shortcut icon" href="favicon.png"/>
    <script src="BluetoothSecondFactorAuth.js"></script>
</head>

<body>
    <div id="header">
        <img src="lock.png" alt="logo" width="50" height="50">
    </div>
    
    <div class="card">
        <center><div id="hotText">Second Factor Challenge</div></center>
        <br>
        <center><img src="bluetooth.png" alt="logo" width="75" height="75"></center>
        <br>
        <form id="twofactor" action="" method="post">    
            <br>
            <input class="button1" type="button" onclick="authenticateUserButtonClick()" value="Authenticate Bluetooth Device">
            <br>
            <input id="devicename" type="hidden" name="device" value="xxxxx">
        </form>     
    </div>
    
    <div id="footer">
        <p>Bluetooth Two-Factor Technology | License Terms of Use | Privacy Policy </p>
    </div>
</body>
