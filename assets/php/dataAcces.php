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

    public function getNavBarItems()
    {
        $sql = "SELECT * FROM navigation";
        $result = mysqli_query($this->conn, $sql);
        $navItems = [];
        while ($row = mysqli_fetch_assoc($result)) {
            if ($navItems === []) {
                if ($row['connected_name'] === NULL) {
                    $navItems[] = [
                        'connected_name' => "NULL",
                        'name' => [$row['name']]
                    ];
                } else {
                    $navItems[] = [
                        'connected_name' => $row['connected_name'],
                        'name' => [$row['name']]
                    ];
                }
            }else{
                for($i = 0; $i < count($navItems); $i++){
                    if ($navItems[$i]['connected_name'] === $row['connected_name']) {
                        array_push($navItems[$i]['name'], $row['name']);
                        break;
                    }elseif ($navItems[$i]['connected_name'] === "NULL" && $row['connected_name'] === NULL) {
                        array_push($navItems[$i]['name'], $row['name']);
                        break;
                    }elseif ($i === count($navItems) - 1) {
                        if ($row['connected_name'] === NULL) {
                            $navItems[] = [
                                'connected_name' => NULL,
                                'name' => [$row['name']]
                            ];
                        } else {
                            $navItems[] = [
                                'connected_name' => $row['connected_name'],
                                'name' => [$row['name']]
                            ];
                        }
                        break;
                    }
                    
                }
            }
        }
        return $navItems;
    }
}