# Catálogo Académico con Búsqueda Simple

## Descripción

Este proyecto consiste en el desarrollo de un módulo utilizando la arquitectura MVC (Modelo - Vista - Controlador) en PHP. El sistema permite consultar asignaturas registradas en una base de datos MySQL, realizar búsquedas por nombre mediante el método GET y visualizar los resultados en una tabla.

El objetivo principal es aplicar correctamente el patrón MVC, separando las responsabilidades entre el Modelo, el Controlador y la Vista.

---

## Objetivos

- Implementar la arquitectura MVC.
- Conectar una aplicación PHP con una base de datos MySQL.
- Consultar información almacenada en la base de datos.
- Realizar búsquedas utilizando el método GET.
- Mostrar los resultados de forma organizada en una tabla.

---

## Tecnologías utilizadas

- PHP
- MySQL
- PDO
- HTML
- XAMPP

---

## Estructura del proyecto

```
CatalogoAcademico/

app/
│
├── controllers/
│   └── AsignaturaController.php
│
├── models/
│   └── Asignatura.php
│
├── views/
│   └── asignaturas.php
│
config/
│   └── conexion.php
│
public/
│   └── index.php
```

---

## Funcionamiento

1. El usuario accede a la aplicación mediante el archivo `public/index.php`.
2. El Controlador recibe la petición del usuario.
3. Si existe una búsqueda, el Controlador llama al método correspondiente del Modelo.
4. El Modelo realiza la consulta a la base de datos utilizando PDO.
5. El Modelo devuelve los resultados al Controlador.
6. El Controlador carga la Vista.
7. La Vista muestra la información en una tabla sin realizar consultas SQL.

---

## Base de datos

Base de datos:

```
catalogo_academico
```

Tabla:

```
asignaturas
```

Campos:

- id
- nombre_asignatura
- nivel
- docente
- horas

---

## Patrón MVC aplicado

### Modelo

Se encarga de realizar todas las consultas a la base de datos.

### Vista

Presenta la información al usuario y no contiene consultas SQL.

### Controlador

Recibe las peticiones del usuario, llama al Modelo y decide qué Vista mostrar.

---

## Autor

José Luis Rivadeneira