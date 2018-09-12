<?php

echo "<h1>hello people!</h1>";
echo "<h2>this should auto deploy</h2>";
echo "<p>I really am not good at making sites look good...</p>";


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://testphpdeploymentapi.azurewebsites.net/api.php?info=time");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$output = curl_exec($ch);

curl_close($ch);

$vars = json_decode($output, true);


echo "this part uses an API I wrote to get the time... somewhere in america... i think, maybe i should fix it...<br/><br/>";

echo $vars["data"];

?>
