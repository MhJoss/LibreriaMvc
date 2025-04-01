LeeMe.txt

# Descripción de la Aplicación Web

La aplicación web "Librería MVC" es un sistema de gestión de libros desarrollado en PHP utilizando el patrón de diseño MVC (Modelo-Vista-Controlador). 
Esta aplicación permite a los usuarios visualizar una lista de libros y consultar detalles específicos de cada libro a través de una interfaz web sencilla y amigable.

## Funcionalidades

- *Visualización de Libros*: Los usuarios pueden ver una lista completa de todos los libros disponibles en la base de datos.
- *Consulta de Detalles*: Los usuarios pueden acceder a los detalles de un libro específico utilizando URLs personalizadas.
- *Soporte para Múltiples Libros*: La aplicación permite consultar múltiples libros a la vez mediante parámetros en la URL.

## Estructura del Proyecto

La estructura del proyecto es la siguiente:

libreria_mvc/
│
├── app/
│   ├── controllers/
│   │   └── LibreriaController.php  # Controlador que maneja la lógica de negocio y la interacción entre el modelo y las vistas.
│   ├── models/
│   │   └── Libro.php                # Modelo que interactúa con la base de datos para obtener información sobre los libros.
│   └── views/
│       ├── libros.php               # Vista que muestra la lista de todos los libros.
│       └── libro.php                # Vista que muestra los detalles de un libro específico o múltiples libros.
│
├── config/
│   └── database.php                  # Configuración de la conexión a la base de datos.
│
|
|
└── public/
    └── index.php # Punto de entrada de la aplicación que maneja las rutas y las solicitudes.
	└──actualizarLibro.php #Actualiza los libros registrados directo en la base de datos		
	└──agregarLibro.php #Agrega un libro a la tabla anexandolo también en la base de datos
	└──editarLibro.php #Edita cualquier libro
	└──eliminarLibro.php #Elimina cualquier libro de la tabla, eliminándolo también de la base de datos
|
|
└── css/
	└── style.css #tiene los estilos que tiene la aplicacion web 



## Estado Funcional

La aplicación se encuentra en estado funcional y ha sido probada en un entorno local utilizando XAMPP.
Asegúrate de seguir las instrucciones de instalación y configuración para que la aplicación funcione correctamente en tu entorno.

## Requisitos

- PHP 7.0 o superior
- Servidor web (como Apache)
- Base de datos MySQL

## Instalación

Para instalar y ejecutar la aplicación, sigue estos pasos:

1. Clona el repositorio o descarga los archivos del proyecto.
2. Configura la base de datos y las credenciales en el archivo config/database.php.
3. Inicia el servidor web y accede a la aplicación a través de tu navegador en la dirección: http://localhost/libreriaMvc/public/index.php
