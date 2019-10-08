<?php
class StopWatch
{
    private $startTime;
    private $endTime;
    public function __construct()
    {
        $this->startTime = date('h:i:s A');
        $this->endTime = date('h:i:s A');
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function start()
    {
        $this->startTime = date("H:i:s A");
        return $this->startTime;
    }
    public function stop()
    {
        $this->endTime = date("H:i:s A");
        return $this->startTime;
    }
    public function getElapsedTime()
    {
        return strtotime($this->endTime) - strtotime($this->startTime);
    }
}
