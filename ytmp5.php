$url = 'https://mhankbarbar.herokuapp.com/api/ytv?url=https://youtu.be/6l5V3BWDcMw&apiKey=ApiKeyInHere';
   $curl = curl_init($url);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
   ]);
   $response = curl_exec($curl);
   curl_close($curl);
   echo $response . PHP_EOL; // aparece a resposta
