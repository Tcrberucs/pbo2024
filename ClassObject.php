<?php
class makanan {
    public $menu;
    public $cara;

    public function __construct($menu, $cara)
    {
       $this->menu = $menu;
       $this->cara = $cara; 
    }

    public function tampilkanmenu() {
        echo "menu: " . $this->menu;
        echo "\n";
        echo "cara:" . $this->cara;
    }
}

$menusaya = new makanan("ayam", "goreng");

$menusaya->tampilkanmenu()
?>
