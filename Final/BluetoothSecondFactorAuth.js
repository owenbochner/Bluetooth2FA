var bluetoothDevice;

function authenticateUserButtonClick() {
  let options = {filters: []};

  options.filters.push({namePrefix: 'dh'});

  //alert('Options: ' + JSON.stringify(options));

  bluetoothDevice = null;
  //alert('Requesting Bluetooth Device...');
  navigator.bluetooth.requestDevice(options)
  .then(device => {
    bluetoothDevice = device;
    connect();
    document.getElementById("devicename").value = bluetoothDevice.name;
    document.getElementById("twofactor").submit();
    if (bluetoothDevice.gatt.connected) {
       bluetoothDevice.gatt.disconnect();
    }
  })
  .catch(error => {
    document.getElementById("devicename").value = 'xxx';
    document.getElementById("twofactor").submit();
  });
}

function connect() {
  //alert('Connecting to Bluetooth Device...');
  return bluetoothDevice.gatt.connect()
  .then(server => {
    //alert('Bluetooth Device connected ' + bluetoothDevice.name);
  });
}
