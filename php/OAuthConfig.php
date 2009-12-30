<?
function doHttpRequest($urlreq)
{
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "$urlreq");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);

// grab URL and pass it to the browser
$request_result = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);

return $request_result;
} ?>