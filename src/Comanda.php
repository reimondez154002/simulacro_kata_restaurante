<?php

class Comanda{

    private Menu $menu;
    public function __construct(Menu $menu){
        $this->menu = $menu;
    }

    public function ejecutar(string $instruccion):string{

    }
}

interface Menu
{   
    public function getPrice(string $dish): ?float;
}
