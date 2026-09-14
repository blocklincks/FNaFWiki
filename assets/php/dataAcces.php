<?php
class DataAcess
{
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'fnafwiki');
        if (!$this->conn) {
        die('Erreur de connexion : ' . mysqli_connect_error());
        }
    }

    public function getNavBarItems(){
        $sql = "SELECT * FROM navigation";
        $result = mysqli_query($this->conn, $sql);
        $navItems = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $navItems[] = $row;
        }
        return $navItems;
    }
}