<?php

while(TRUE){
$url = "https://api.nanswap.com/withdraw?paymentAddress=nano_1ectchtin6fan63mqy7zcppagpks9zbf6po4qegnctjws6f4atbgmcopyeb8";
$data = "paymentAddress: nano_1ectchtin6fan63mqy7zcppagpks9zbf6po4qegnctjws6f4atbgmcopyeb8";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
echo "[$] STATUS WD LU [=>] $result \n";
echo "[?] Silakan cek Akun lu saldo sudah di wd semua \n";
echo "[?] Bot ini akan auto wd dalam durasi 10 menit ";
echo "\n\n";
sleep(600);

}
