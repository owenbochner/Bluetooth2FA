<?php
   if( $_POST["uname"] || $_POST["pwd"] ) {
      ob_start();
      header("Location: http://localhost/TwoFactor/secondFactorBluetooth.php");
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
        <center><div id="hotText">Login</div></center>
        <br>
        <center><img src="bluetooth.png" alt="logo" width="75" height="75"></center>
        <br>
        <form action="" method="post">    
            <label><b>User Name:</b></label>
            <br>
            <br> 
            <input required type="text" name="uname" style="font-family:'Courier New', Courier, monospace;" class="uname" size="32" maxlength="32" pattern="([a-zA-Z\s]){2,}">   
            <br>
            <br>
            <label><b>Password:</b></label>
            <br>
            <br> 
            <input required type="password" name="pwd" style="font-size: 20px;" class="uname" size="32" maxlength="32" pattern="([a-zA-Z\s]){2,}">
            <p>By continuing, you agree to our Terms of Service, Privacy policy.</p>   
            <br>
            <input class="button" type="submit" value="Sign In">
            <br>
    </div>
    
    <div id="footer">
        <p>Bluetooth Two-Factor Technology | License Terms of Use | Privacy Policy </p>
    </div>
</body>