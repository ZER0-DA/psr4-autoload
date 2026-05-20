# Laboratorio PSR-4 con Composer
**Desarrollo de Software VII** — Universidad Tecnológica  
I Semestre 2026

## Descripción
Implementación de la Carga Automática (Autoload) bajo el estándar PSR-4 con Composer en una aplicación PHP con interfaz web.

## Estructura de archivos
psr4-autoload/
├── composer.json
├── index.php
├── vista.php
├── .gitignore
├── css/
│   └── estilos.css
└── src/
├── Models/
│   ├── Producto.php       → namespace App\Models
│   └── Cliente.php        → namespace App\Models
├── Services/
│   └── TiendaService.php  → namespace App\Services
└── Controllers/
└── TiendaController.php → namespace App\Controllers

## Instalación
```bash
git clone https://github.com/tu-usuario/psr4-autoload.git
cd psr4-autoload
composer install
```

## Ejecución
Abrir en el navegador:
http://localhost/psr4-autoload/


## Conclusiones Técnicas

### 1. Mantenibilidad
Con PSR-4 se pueden agregar nuevas clases sin modificar ningún archivo de configuración global. Solo se crea el archivo con el namespace correcto y se ejecuta `composer dump-autoload`.

### 2. Eficiencia de Memoria (Lazy Loading)
El autoloader solo carga una clase en memoria cuando es instanciada por primera vez, no al inicio del script. Esto reduce el consumo de RAM del servidor.

### 3. Estandarización
Seguir PSR-4 hace el proyecto compatible con frameworks como Laravel y Symfony, facilita el trabajo en equipo y permite que cualquier desarrollador entienda la estructura sin documentación adicional.