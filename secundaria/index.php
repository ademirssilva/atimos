<?php
echo "<br>Pasta Atual: ".__DIR__."<br>";

echo "<br><br>REALPATH: ".realpath(dirname(__FILE__));

echo "<br><br>ARRAY SERVER:<pre>".print_r($_SERVER,1)."</pre>";

$pathLib = dirname($_SERVER["DOCUMENT_ROOT"]);



require $pathLib."/lib_ext/autoload.php";

//use AtimosBrasil\Email;

//$novoEmail = new Email;

//$novoEmail->sendMail();


