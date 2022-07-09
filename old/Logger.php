<?php

class Logger
{
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function error($msg)
    {
        if ($this->type === 'console') {
            echo 'Error: Escrevendo no console ' . $msg . '<br>';
        }

        if ($this->type === 'file') {
            echo 'Error: Escrevendo no arquivo ' . $msg . '<br>';
        }
    }

    public function warning($msg)
    {
        if ($this->type === 'console') {
            echo 'Warning: Escrevendo no console ' . $msg . '<br>';
        }

        if ($this->type === 'file') {
            echo 'Warning: Escrevendo no arquivo ' . $msg . '<br>';
        }
    }
}
