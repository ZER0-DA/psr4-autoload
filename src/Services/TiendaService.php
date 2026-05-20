<?php

namespace App\Services;

use App\Models\Producto;
use App\Models\Cliente;

class TiendaService
{
    private array $productos = [];
    private array $clientes  = [];

    public function agregarProducto(Producto $producto): void
    {
        $this->productos[] = $producto;
    }

    public function agregarCliente(Cliente $cliente): void
    {
        $this->clientes[] = $cliente;
    }

    public function mostrarProductos(): void
    {
        foreach ($this->productos as $producto) {
            echo "Producto: " . $producto->getNombre() . " - $" . $producto->getPrecio() . PHP_EOL;
        }
    }

    public function mostrarClientes(): void
    {
        foreach ($this->clientes as $cliente) {
            echo "Cliente: " . $cliente->getNombre() . " - " . $cliente->getEmail() . PHP_EOL;
        }
    }

    public function getProductos(): array
    {
        return $this->productos;
    }

    public function getClientes(): array
    {
        return $this->clientes;
    }
}