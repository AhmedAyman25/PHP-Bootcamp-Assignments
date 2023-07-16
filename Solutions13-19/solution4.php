<?php
echo $_SERVER['DOCUMENT_ROOT']; // C:/xampp/htdocs
 echo '<br>';
 echo $_SERVER['SERVER_NAME']; // localhost
 echo '<br>';
 echo $_SERVER['HTTP_HOST']; // localhost
 echo '<br>';
 echo $_SERVER['HTTP_SEC_CH_UA_PLATFORM']; // windows
 echo '<br>';
echo $_SERVER['OPENSSL_CONF']; // C:/xampp/apache/bin/openssl.cnf
 echo '<br>';


echo '<pre>';
print_r($_SERVER);
echo '</pre>';
