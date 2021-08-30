<?php


namespace Log\write_read;


use Journal\journal;

class FromLog implements journal
{
    public $read = 'README';
    public $write = 'writeME';

    public function readFromLog()
    {
        return $this->read;
    }

    public function writeToLog()
    {
        return $this->write;
    }
}