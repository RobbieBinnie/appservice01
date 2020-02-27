<?php

echo "<h1>hello people!</h1>";
echo "<h2>this should auto deploy</h2>";
echo "<p>I really am not good at making sites look good...</p>";
echo "if you are an admin, click <a href='https://testphpdeploymentadmin.azurewebsites.net'>here</a>to authenticate and do admin stuff";  
  
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://testphpdeploymentapi.azurewebsites.net/api.php?info=time");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$output = curl_exec($ch);

curl_close($ch);

$vars = json_decode($output, true);


echo "this part uses an API I wrote to get the time... somewhere in america... i think, maybe i should fix it...<br/><br/>";

echo $vars["data"];

echo "<br/>ahh, looks like the time stuff has been fixed now!";
echo "<br/> this is a new line!";

echo <<<EOL
  <h1>hello world</h1>

  <button type="button" onclick="loadDoc()">Request data</button>

  <p id="demo"></p>

  <script>
  function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "https://az-hubble-dev-func-read01.azurewebsites.net/api/layer/2", true);
    xhttp.withCredentials = true;
    xhttp.send();
  }
  </script>
EOL;


?>
