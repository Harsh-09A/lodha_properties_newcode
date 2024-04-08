<?php
header('Access-Control-Allow-Origin: *');

$ch = curl_init();
$url = 'https://crm.divine-homes.in/leads_api.php';
$headers = array(
    'Content-Type: application/json',
    'x-api-key: EGReFW*J8dfgtn@iuitr45dsAckrigoG',
);

$lead_name = htmlspecialchars($_POST['user_name'], ENT_QUOTES); // required 
$lead_ccode = "91";//required
$lead_number = htmlspecialchars($_POST['contact_number'], ENT_QUOTES); // required
$lead_email = htmlspecialchars($_POST['user_email'], ENT_QUOTES); // required
// $lead_pname = "Lodha Amara"; // required
$lead_pname = htmlspecialchars($_POST['company_name'], ENT_QUOTES); // required

$post_data = array(
    "source_type" => "Direct",
    "source" => "Google",
    "name" => $lead_name,
    "ccode" => $lead_ccode,
    "number" => $lead_number,
    "email" => $lead_email,
    "pname" => $lead_pname,
    "other_details" => ""
);

$json_data = json_encode([$post_data]);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
if ($response) {
    echo $response;
} else {
    echo 'No response received.';
}
?>