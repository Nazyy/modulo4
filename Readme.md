
<p align="center">
<a href="https://laravel.com" target="_blank">
<img src="https://bootcamp.enviosperros.com/assets/bootcamp/logo/logo-horizontal.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Modulo4
Metodologia TDD

## Inicio

Estas instrucciones le proporcionarán una copia del proyecto en funcionamiento en su máquina local para fines de desarrollo y prueba. Consulte la implementación para obtener notas sobre cómo implementar el proyecto en un sistema en vivo.
### Requerimientos

- PHP 8.1*
- Composer

### Antes de...
```
composer init
vendor
```

### Arrchivo app..
```
Una vez creado el vendor crea el  el archivo app.php dentro de src
```


### Directorios..
```
Directorio Documents
Directorio Sources
```


### Clases..
```
En documentos creamos,invoice y remision.
1.- en invoice usamos los dos metodos
2.- en nota de credito solo queremos usar dataCSV pero la interfaz
no lo permite asi que debemos colocar pdf.
```
### Funciones CSV..
```
Declarar rutas  absolutas
fopen para abrir el archivo con  la condicion "r" de solo lectura
preguntamos si efectivamente se abrio el archivo(if)
recorremos con while en busca de campos CSV hasta siempre que sea diferente a false
```

### Funciones CSV..
```
Declarar rutas  absolutas
popen condicion "r" de solo lectura, si se abre con fopen estaria codificado
preguntamos si efectivamente se abrio el archivo(if)
recorremos con while en busca de campos CSV hasta siempre que sea diferente a false
```

### Crear Caarpeta solid..
```
2 interfaz
creamos interfaz solid
directorio solid y directorio document solid
```



popen — Abre un proceso de un puntero a un fichero
Obtiene una línea de un puntero a un fichero y la analiza en busca de campos CSV
fgets — Obtiene una línea desde el puntero a un fichero