<?php
/*
echo "<br>Pasta Atual: ".__DIR__."<br>";

echo "<br><br>REALPATH: ".realpath(dirname(__FILE__));

echo "<br><br>ARRAY SERVER:<pre>".print_r($_SERVER,1)."</pre>";
*/
$pathLib = dirname($_SERVER["DOCUMENT_ROOT"]);


//echo "<br>./: ".__DIR__."<br>";

require $pathLib."/lib_ext/autoload.php";

use AtimosBrasil\Email;

$novoEmail = new Email;

$novoEmail->sendMail("Assunto de teste","<p>Este é um e-mail de <b>teste</b></p>","gustavo@gustavoweb.me", "Gustavo WEB"
    ,"ademirssilva2109@gmail.com","Ademir S. da Silva");


/*
use AtimosBrasil\Email;

$novoEmail = new Email;

$novoEmail->sendMail();
*/

