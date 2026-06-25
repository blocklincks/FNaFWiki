<?php
include 'dataAcces.php';
class logic{
    private $dataAcess;

    public function __construct(){
        $this->dataAcess = new DataAcess();
    }

    public function getNavBarItems(){
        $navItems = $this->dataAcess->getNavBarItems();
        foreach($navItems as $item){
            if($item['connected_name'] === "NULL"){
                echo '<table id="nav-table">';
                foreach($item['name'] as $name){
                    echo '<td><a href="page.php?name='.$name.'">'.$name.'</a></td>';
                }
                echo '</table>';
            }else{
                echo '<table class="nav-table"><tr>';
                echo '<td><ul>';
                foreach($item['name'] as $name){
                    echo '<li><a href="page.php?name='.$name.'">'.$name.'</a></li>';
                }
                echo '</ul></td></tr></table>';
            }
        }
    }
}