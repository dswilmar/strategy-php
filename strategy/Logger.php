<?php

class Logger
{
    private $writer;

    public function __construct(Writer $writer)
    {
        $this->writer = $writer;
    }

    public function error($msg)
    {
        $this->writer->error($msg);
    }

    public function warning($msg)
    {
        $this->writer->warning($msg);
    }
}
