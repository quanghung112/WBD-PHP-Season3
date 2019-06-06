<?php


class StopWatch{
    private $starttime;
    private $endtime;
    public function __construct(){
        $this->starttime=microtime(true);
    }
    public function startTime(){
        $this->starttime=microtime(true);
    }
    public function endTime(){
        $this->endtime=microtime(true);
    }
    public function getElapsedTime(){
        $elapsedTime=$this->endtime-$this->starttime;
        return $elapsedTime;
    }
}