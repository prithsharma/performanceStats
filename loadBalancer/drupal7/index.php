<?php
require_once('php5rp/ProxyHandler.class.php');


$proxy1 = new ProxyHandler('http://192.168.2.3/drupal7', 'http://192.168.2.10/drupal7');
$proxy2 = new ProxyHandler('http://192.168.2.3/drupal7', 'http://192.168.2.8/drupal7');

$line = file_get_contents('balance.txt');          // get info about server to which last request was directed.
$server = intval($line);

$server = 1 - $server;                             // use the other server this time
file_put_contents('balance.txt', strval($server));      // update the file with info of server serving this time


//redirect request to the appropriate server.
if( $server == 1)
        $proxy1->execute();
else{
        //echo 'hi';
        $proxy2->execute();
}


?>
