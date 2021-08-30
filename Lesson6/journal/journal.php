<?php


namespace Journal;


interface journal
{
    public function readFromLog();
    public function writeToLog();
}