
 <?php
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

echo $response  = '

{
    "licenseNumber": "10012011000168",
    "id": 12628,
    "getCategorizedProductList": "false",
    "result": 
    {
        "licenseNumber": "10012011000168",
        "entityName": "NESTLE INDIA LIMITED",
        "status": "ACTIVE",
        "licenseType": "CENTRAL LICENSE",
        "premissesAddress": 
        {
            "district": "NEW DELHI",
            "address": "100 / 101, WORLD TRADE CENTRE,BARAKHAMBA LANE,NEW DELHI - 110 001, CHANKYA PURI, NEW DELHI, DELHI - 110001",
            "state": "DELHI",
            "pincode": "110001"
        }
    }
}';

// print_r(($response));
// die;

?>



