<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $symbols = $_POST['symbols'];
  header("Location: graph.php");
}
else
{
  header("Location: index.php");
  exit;
}
$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest';

$parameters = [
  'convert' => 'USD',
  'symbol' => $symbols
];

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: API_KEY' // API KEY
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            // set the request URL
  CURLOPT_HTTPHEADER => $headers,     // set the headers 
  CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
$json_data = json_decode($response, true);

$symbol_array = explode(",", $symbols);
$num_of_symbols = count($symbol_array);
$price_array = array();

for ($i = 0; $i < $num_of_symbols; $i++)
{
  $price_array[$i] = $json_data['data'][$symbol_array[$i]]['quote']['USD']['price'];
}

curl_close($curl); // Close request

session_start();
$_SESSION['symbols'] = $symbol_array;
$_SESSION['price'] = $price_array;
$_SESSION['length'] = $num_of_symbols;

?>