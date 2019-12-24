<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paypal Integration Test - Success</title>
</head>
<body>
    <?php
        require_once('./functions.php');
        // print_r($_GET);
        updatePayment($_GET, $conn);
    ?>
	<h1>Successful Payment</h1><br><br><br>
    <a href="index.php">HOME</a>
</body>
</html>
