# 🦸‍♂️ Proyecto Superhéroes con Filtros y Exportación a PDF

## 🚀 ¿Qué hace este proyecto?
- Muestra una lista de superhéroes guardados en una base de datos MySQL.
- Permite buscar héroes por nombre de manera dinámica con AJAX.
- Incluye un botón **"Exportar PDF"** que genera un reporte de los héroes encontrados.
- Desarrollado en **CodeIgniter 4** y utiliza **Html2Pdf** para la exportación de los datos.

---

## 🔗 Ejecución de la base de datos
- La base de datos se encuentra en la carpeta raíz del proyecto con el nombre:  
  `bdheroes.sql`
  `03_hero_power.sql`
  `sp_herores.sql`

- Importa este archivo en tu servidor MySQL para poder usar el proyecto.
- Contiene:
  - Procedimiento almacenado `sp_herores.sql` para búsquedas por nombre.

---

## 🔗 Ejecución en tu entorno local
1. Configura tu servidor local (Laragon, XAMPP, MAMP) y apunta a la carpeta del proyecto.
2. Configura tus credenciales de base de datos en el archivo `.env`:

```dotenv
 database.default.hostname = localhost
 database.default.database = superhero
 database.default.username = root
 database.default.password = 
 database.default.DBDriver = MySQLi
 database.default.DBPrefix =
 database.default.port = 3306
