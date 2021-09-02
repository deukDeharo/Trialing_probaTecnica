# PRUEBA TÉCNICA - GERARD DE HARO RAMIREZ - gerard.deharo@gmail.com


Este proyecto se ha pensado para ser instalado en un Apache y en una BBDD MySQL.

El lenguaje de programación usado es PHP V.7.
  

## Configuración del proyecto

  

### 1. Creación DB

Ejecutar archivo *database.sql* para:
- Crea la base de datos 'trialing'
- Crea la tabla 'users'
- Crea la tabla 'posts'

  

### 2. Conexión DB

Configurar en la classe DBmanager los datos de conexión, presente en el directorio:

*Trialing_pt\src\DataBase\DBmanager.php*

  
### 3. Dependencias

Esta aplicación tiene __composer__ como gestor de dependencias.
(_Descargar: https://getcomposer.org/_)

Ejecutar instalación:
```composer install```
