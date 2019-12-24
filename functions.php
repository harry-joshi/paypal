<?php

/**
 * Verify transaction is authentic
 *
 * @param array $data Post data from Paypal
 * @return bool True if the transaction is verified by PayPal
 * @throws Exception
 */

$conn = mysqli_connect("localhost", "root", "", "paypal");

function verifyTransaction($data) {
	global $paypalUrl;

	$req = 'cmd=_notify-validate';
	foreach ($data as $key => $value) {
		$value = urlencode(stripslashes($value));
		$value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i', '${1}%0D%0A${3}', $value); // IPN fix
		$req .= "&$key=$value";
	}

	$ch = curl_init($paypalUrl);
	curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
	curl_setopt($ch, CURLOPT_SSLVERSION, 6);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
	$res = curl_exec($ch);

	if (!$res) {
		$errno = curl_errno($ch);
		$errstr = curl_error($ch);
		curl_close($ch);
		throw new Exception("cURL error: [$errno] $errstr");
	}

	$info = curl_getinfo($ch);

	// Check the http response
	$httpCode = $info['http_code'];
	if ($httpCode != 200) {
		throw new Exception("PayPal responded with http code $httpCode");
	}

	curl_close($ch);

	return $res === 'VERIFIED';
}

/**
 * Check we've not already processed a transaction
 *
 * @param string $txnid Transaction ID
 * @return bool True if the transaction ID has not been seen before, false if already processed
 */
function checkTxnid($txnid, $conn) {
	global $db;
	$sql = 'SELECT * FROM `payments` WHERE txnid = \'' . $txnid . '\'';
	$res = mysqli_query($conn, $sql);
	if ($res) {
		return ! mysqli_num_rows($res);
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		die();
	}
	return ! 0;
}

/**
 * Add payment to database
 *
 * @param array $data Payment data
 * @return int|bool ID of new payment or false if failed
 */
function addPayment($data, $conn) {
	global $db;

	if (is_array($data)) {
		$status="pending";
		$sql = 'INSERT INTO `payments` (`first_name`, `last_name`, `payer_email`, `phoneno`, `noofperson`, `location`, `payment_status`, `createdtime`) VALUES("'.$data['first_name'].'","'.$data['last_name'].'","'.$data['payer_email'].'","'.$data['phoneno'].'","'.$data['noofperson'].'","'.$data['location'].'","'.$status.'","'.date("Y-m-d H:i:s").'")';
		if (mysqli_query($conn, $sql)) {
			return mysqli_insert_id($conn);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			die();
		}
	}

	return;
}

function updatePayment($data, $conn) {
	global $db;

	if (is_array($data)) {
		$sql = 'UPDATE `payments` set `txnid`="'.$data['tx'].'", `payment_amount`="'.$data['amt'].'", `payment_status`="'.$data['st'].'" where `id`="'.$data['item_number'].'"';
		if (mysqli_query($conn, $sql)) {
			return mysqli_insert_id($conn);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			die();
		}
	}

	return;
}