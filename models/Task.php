<?php

class Task
{
    protected $description;

    protected $completed = false;

    public function __construct($desc)
    {
        $this->description = $desc;
    }

    public  function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }
}
