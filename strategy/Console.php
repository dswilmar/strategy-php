<?php

require_once 'Writer.php';

class Console implements Writer
{
    public function error($msg)
    {
        echo 'Error: Escrevendo no console ' . $msg . '<br>';
    }

    public function warning($msg)
    {
        echo 'Warning: Escrevendo no console ' . $msg . '<br>';
    }
}
