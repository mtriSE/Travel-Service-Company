<?php
class TourModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

}
