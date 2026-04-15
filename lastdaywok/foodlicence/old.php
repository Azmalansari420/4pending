<!-- <?php
header('Access-Control-Allow-Origin: *');

$licenceno = $_POST['licenseNumber'];
$url = 'https://api-preproduction.signzy.app/api/v3/fssai/verification';
$headers = array(
    'Content-Type: application/json',
    'Authorization: oTeK8EGlJ8Hp4oeOZzE5AUaZ3HmhJ1pp'
);
$data = json_encode(array('licenseNumber' => $licenceno, 'getCategorizedProductList' => 'false'));

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
echo curl_error($ch); // Check for curl errors
curl_close($ch);

// print_r($response);
// die;

echo json_encode($response);
?>



 -->