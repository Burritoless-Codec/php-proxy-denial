<!DOCTYPE html5>
<html>
<head>
</head>
<body>
      <center>
      <h2>Checking for Proxy!</h2>
           <?php
             $ports = array(8080,80,81,1080,6588,8000,3128,553,554,4480);
                  foreach($ports as $port) {
                        if (@fsockopen($_SERVER['REMOTE_ADDR'], $port, $errno, $errstr, 30)) {
                              die("Sorry you are using a proxy!");
                        }else{
                              header('location: yourpage.php');
                        }
                  }
            ?>
      </center>
</body>
</html>