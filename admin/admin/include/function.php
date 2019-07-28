<?php
include_once('../../connetion.php');
function smsApi($phone,$named,$message) {
    echo $phone,'<br>';
    echo $named,'<br>';
    echo $message,'<br>';
    $url = "http://rslr.connectbind.com:8080/bulksms/bulksms?username=infk-kiza&password=smsap@20&type=0&dlr=1&destination=250$phone&source=$named&message=".urlencode($message);

	$ch = curl_init();
	curl_setopt_array($ch, [
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $url,
		CURLOPT_USERAGENT => 'YSMS'
	]);
	// Send the request & save response to $resp
    $data = curl_exec($ch);
    var_dump($url);
	// Close request to clear up some resources
	curl_close($ch);
}
// function of request the customer to pay sms so that she he can start to use sms

function Deposit ($number,$monay,$hash){
    $curl = curl_init();
    $phone = $number;
    $amount = $monay;
    $time = time();
    $hash = hash('sha256', ($time.''.$phone.''.$amount));
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://uplus.rw/bridge/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "action=deposit&amount=$amount&phonenumber=$phone&clienttime=$time&appToken=c6f476c54c01fc18545b&hash=$hash",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/x-www-form-urlencoded"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      var_dump($response);
    }

}

// function of requesting call backer of pay ment
function callback(){

}

