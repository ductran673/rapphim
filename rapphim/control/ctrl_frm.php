<?php
require_once("connect.php");
class ctrl_frm extends connect
{
    function getCategory()
    {
        $sql = "select * from category";
        return $this->link->query($sql);
    }

    function getFilmByCategory($type)
    {
        $sql = "select * from movies where categoryID = $type";
        return $this->link->query($sql);

    }

    function getFilm()
    {

        $sql = "select * from movies";
        return $this->link->query($sql);
    }
    function getSchedule()
    {

        $sql = "select * from schedule";
        return $this->link->query($sql);
    }

}
?>