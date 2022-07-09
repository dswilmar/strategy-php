<?php

require_once 'Logger.php';

$logger = new Logger('console');
$logger->error('Deu erro aqui');
$logger->warning('Deu alerta aqui');
