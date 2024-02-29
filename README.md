# Prueba Laravel para Aldea

## Requisitos Previos

Lista de requisitos previos para ejecutar el proyecto, como:

- PHP >= 8.2
- Composer
- Node.js y NPM
- Base de Datos. Se encuentran listas las configuraciones para MySQL y SQLite.

### Clonar el Repositorio

```bash
git clone https://github.com/ricgarcas/aldea-test.git
```

### Instalar Dependencias

```bash
composer install
npm install
```

### Instalar Migraciones

```bash 
php artisan migrate
```

### Ejecutar el Worker para Procesamientos en Segundo Plano

```bash
php artisan queue:work
```
