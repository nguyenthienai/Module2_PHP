<?php
class StopWatch
{
    private $startTime;
    private $endTime;
    function __construct()
    {
        $this->startTime = microtime(true);
    }
    public function get_startTime()
    {
        return $this->startTime;
    }
    public function get_endTime()
    {
        return $this->endTime;
    }
    public function start()
    {
        $this->startTime = microtime(true);
    }
    public function stop()
    {
        $this->endTime = microtime(true);
    }
    public function getElapsedTime()
    {
        $elapseTime = $this->endTime - $this->startTime;
        return round($elapseTime * 1000, 0);
    }
}