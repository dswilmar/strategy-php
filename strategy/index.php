<?php

require_once 'Console.php';
require_once 'Logger.php';

$console =  new Console();
$logger = new Logger($console);
$logger->error('Deu erro aqui');
$logger->warning('Deu warning aqui');
