<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Comanda.php';

class ComandaTests extends TestCase {
    private Comanda $comanda;

    public function test_vaciar_comanda_vacia_devuelve_mensaje_de_vaciado():void{
        //Preparar
        $menuMock = $this->createMock(Menu::class);
        $this->comanda = new Comanda($menuMock);
        //Actuar
        $resultado = $this->comanda->ejecutar("vaciar"); 
        //Comparar
        $this->assertEquals("La lista ha sido vaciada correctamente",$resultado);
    }
}
