<?php
require_once "dbgen.php";

class search_Like
{
    private $con;

    public function __construct()
    {
        $this->con=dbgen::instance()->connection();
    }

    /*
     *  % is any data or no limit
     *  _ is one data find
     */
    public function search($data)
    {
        $data="%$data%";
        $stmt=$this->con->prepare("SELECT * FROM customers WHERE country LIKE :code");
        $stmt->bindParam(":code",$data);
        $stmt->execute();
        $results=$stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($results as $result){
            echo $result->id.'<br>'.$result->name.'<br>'.$result->address.'<br>'.$result->city.'<hr>';
        }
    }
}
?>
