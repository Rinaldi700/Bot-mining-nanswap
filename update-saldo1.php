<?php
while(TRUE){
$url = "https://api.nanswap.com/get-amount-withdrawable?paymentAddress=nano_1ectchtin6fan63mqy7zcppagpks9zbf6po4qegnctjws6f4atbgmcopyeb8";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
echo $result;
echo "\n\n";
sleep(60);
}








//$auto_tarik = explode('<div style="margin-top:16px;margin-bottom:8px" id="withdraw">', $result);
//$auto_tarik1 = explode('<br/>', $auto_tarik[1]);

//echo $auto_tarik1[0];
