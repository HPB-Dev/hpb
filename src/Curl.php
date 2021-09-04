<?php
/*
HPB - Developed by FoxWorn3365
Curl.php - hpb\Curl
*/

namespace hpb;

class Curl{
  
  public function new($d, $url) {
   if ($d === "default") {
    // inizializzo cURL
    $ch = curl_init();

    // imposto la URL della risorsa remota da scaricare
    curl_setopt($ch, CURLOPT_URL, $url);

    // imposto che non vengano scaricati gli header
    curl_setopt($ch, CURLOPT_HEADER, 0);

    // eseguo la chiamata
    curl_exec($ch);

    // chiudo cURL
    curl_close($ch);
   } else {
     die("Non ho capito di che cosa si tratta! Possibili protocolli: default - uso: $curl->new('default', 'https://dev.hpbdev.cf/');
  }
}











