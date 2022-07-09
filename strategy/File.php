<?php

class File implements Writer
{
    public function error($msg)
    {
        echo 'Error: Escrevendo no arquivo ' . $msg . '<br>';
    }

    public function warning($msg)
    {
        echo 'Warning: Escrevendo no arquivo ' . $msg . '<br>';
    }
}
