# Bluetooth Two Factor Authentication User Manual

***

Youtube Video Link: [YouTube](https://www.youtube.com/watch?v=Wi18U6SkAJo "YouTube")

---
---

## Instructions
1. Please install the necessary files within the designated GitHub repository link
	* GitHub Link: [GitHub](https://github.com/owenbochner/Bluetooth2FA "GitHub")

2. Setup
	* OS Platform: Winsdows 10, Web Server: IIS, Web Browser: Chrome version 96 or greater
	* Create a physical directory under c:\inetpub\wwwroot\ called "TwoFactor"
	* Copy over the inported files into the TwoFactor directory just created
	* Install PHP extension for IIS
	* Create virtual directory in IIS for the TwoFactor directory
	* In Chrome enable both "Experimental Web Platform Features" and "Use the new permissions backend for Web Bluetooth"
	  using the URL, chrome://flags/
	* Use an iPhone with Bluetooth 4.0 or greater and make sure Bluetooth is enabled, and in range of your computer
	* In Chrome visit the URL chrome://bluetooth-internals/#devices
	* On this page click on the "Start Scan" button in the upper right hand corner
	* The page will start to populate with Bluetooth devices within range
	* Click the "Inspect" link for your device. Your iPhone will show up with a manufacturer code of 0x004c. 
	  If you picked the correct device then the display will populate with suppported services and the device name.
	* You'll need to edit the BluetoothSecondFactorAuth.js file prior to running the demo. Change the following line
	  options.filters.push({namePrefix: 'dh'}); by changing the namePrefix to match the first two characters of your
	  device name.
3. Login
	* Open up a Chrome tab and enter the following URL, http://localhost/TwoFactor/Login.php
	* Create username by filling form under "User Name:" section
	* Create password by filling form under "Password:" section
	* Click "Sign in"
4. Second Factor Challenge
	* Click "Authenticate Bluetooth Device" 
5. Choose Bluetooth Device
	* In the upper left hand corner, a dialog box will appear, prompting you to pair with a listed device  \( you're phone's name \)
	* Choose your phone name and click pair
6. Upon page load
	* If you are guided to a success screen, congratulations you have successfully used Bluetooth 2FA with your computer and mobile device
	* If you are prompted with a "Try again?" you have failed to pair with your mobile device and need to repeat steps 5 and 6.
	
### Thank you for testing our 2FA method. We hope you enjoyed. 
