<?php
include 'dataAcces.php';
class logic{
    private $dataAcess;

    public function __construct(){
        $this->dataAcess = new DataAcess();
    }


    public function getNavBarItems(){
        $navItems = $this->dataAcess->getNavBarItems();
        foreach ($navItems as $item) {
            if ($item['connected_name'] === NULL){
                if ($this->ifHasKids($item['name'], $navItems)){
                    echo '<div class="menu-deroulant" onmouseover="hoverMenu(this)" onmouseout="hideMenu(this)">
                        <div class="bouton-menu"><a href="./page.php?p='.$item['name'].'">'.$item['name'].' <span class="icone">▼</span></a></div>
                        <ul class="liste-liens menu">';
                    $this->writeNavBarChild($item['name'], $navItems);
                    echo '</ul></div>';
                }else{
                    echo '<div class="menu-deroulant"><a href="./page.php?p='.$item['name'].'">'.$item['name'].'</a></div>';
                }
            }
        }
    }

    function ifHasKids($name, $navItems){
        $hasKids = false;
        foreach ($navItems as $item) {
            if($name == $item['connected_name']){
                $hasKids = true;
            }
        }
        return $hasKids;
    }

    function writeNavBarChild($connected_name, $navItems){
        foreach ($navItems as $item){
            if($item['connected_name'] == $connected_name){
                if ($this->ifHasKids($item['name'], $navItems)){
                    echo '<li class="menu-deroulant" onmouseover="hoverMenu(this)" onmouseout="hideMenu(this)">
                    <div class="bouton-menu"><a href="./page.php?p='.$item['name'].'">'.$item['name'].' <span class="icone">▷</span></a></div>
                    <ul class="liste-liens menu sous-menu">';
                    $this->writeNavBarChild($item['name'], $navItems);
                    echo '</ul></li>';

                }else{
                    echo '<li class="menu-deroulant"><a href="./page.php?p='.$item['name'].'">'.$item['name'].'</a></li>';
                }
            }
        }
    }
    public function getNavBarTable(){
        return $this->dataAcess->getNavBarItems();
    }
}