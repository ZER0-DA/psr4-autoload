<?php

namespace App\Controllers;

use App\Services\TiendaService;
use App\Models\Producto;
use App\Models\Cliente;

class TiendaController
{
    private TiendaService $servicio;

    public function __construct()
    {
        $this->servicio = new TiendaService();
    }

    public function agregarProducto(string $nombre, float $precio): void
    {
        $producto = new Producto($nombre, $precio);
        $this->servicio->agregarProducto($producto);
        echo "Producto agregado: " . $nombre . PHP_EOL;
    }

    public function agregarCliente(string $nombre, string $email): void
    {
        $cliente = new Cliente($nombre, $email);
        $this->servicio->agregarCliente($cliente);
        echo "Cliente agregado: " . $nombre . PHP_EOL;
    }

    public function mostrarReporte(): void
    {
        echo "--- Productos ---" . PHP_EOL;
        $this->servicio->mostrarProductos();
        echo "--- Clientes ---" . PHP_EOL;
        $this->servicio->mostrarClientes();
    }

    public function getProductos(): array
    {
    return $this->servicio->getProductos();
    }
    
    public function getClientes(): array
    {
    return $this->servicio->getClientes();
    }
}