<?php
class ContactModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }
}
