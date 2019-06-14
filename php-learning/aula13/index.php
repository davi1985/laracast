<?php

class Task
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
//        $this->completed = $completed;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish this course'),
    new Task('Clean my table'),
];

$tasks[0]->complete();

//var_dump($tasks);

require __DIR__.'/index.view.php';