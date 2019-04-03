<?php
require_once "search_Like.php";

class index
{
    private $con;

    public function __construct()
    {
        $this->con=new search_Like();
    }

    /*
     * for search database method
     */
    public function search($data)
    {
        $this->con->search($data);
    }
}

$obj=new index();
$obj->search("anm");

?>
