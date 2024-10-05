<?php
$url = 'https://api.coindesk.com/v1/bpi/currentprice/USD.json';
$response = file_get_contents($url);
if ($response == FALSE) {
    die('EROR BOR');
}

$data = json_decode($response, true);
// print_r($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhafa Ganteng</title>
</head>
<body>
    <h1>DHAFA COWOK GANTENG SEDUNIA</h1>
    <p>USD : <?php echo $data ['bpi']['USD']['rate']; ?> </p>
    <p>GBP : <?php echo $data ['bpi']['USD']['rate']; ?></p>
    <p>EUR : <?php echo $data ['bpi']['USD']['rate']; ?></p>
</body>
</html>