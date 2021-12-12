<?php
   if( $_POST["uname"] || $_POST["pwd"] ) {
   //   if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
   //      die ("invalid name and name should be alpha");
   //   }
      echo "Welcome: ". $_POST['uname']. "<br />";
      echo "Password: ". $_POST['pwd']. ".";
      
      exit();
   }
?>
<!DOCTYPE html>
<head>
    <title>Auto Select Login</title>
    <link rel="stylesheet" href="twoFactor.css">
    <link rel="shortcut icon" href="favicon.png"/>
    <script src="./BluetoothSecondFactorAuth.js"></script>
</head>

<body>
    <div id="header">
        <img src="lock.png" alt="logo" width="50" height="50">
    </div>
    
    <div class="card">
        <center><div id="hotText">Login</div></center>
        <br>
        <center><img src="lock.png" alt="logo" width="75" height="75"></center>
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
            <input class="button1" type="button" onclick="authenticateUserButtonClick()" value="Authenticate Bluetooth Device">
            <br>
            <input class="button1" type="button" onclick="onDisconnectButtonClick()" value="Disconnect Bluetooth Device">
        </form>     
    </div>
    
    <div id="footer">
        <p>Bluetooth Two-Factor Technology | License Terms of Use | Privacy Policy </p>
    </div>
</body>