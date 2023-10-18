<?php
require_once("config.php");
class connect
{
    protected $link;
    function __construct()
    {
        $this->link = new mysqli(servername, username, password, databasename);
    }

}



?>