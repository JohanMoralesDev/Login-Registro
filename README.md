# Sistema de Login y Registro en PHP

Sistema web de autenticación desarrollado con PHP, MySQL, HTML, CSS y JavaScript. El proyecto permite registrar nuevos usuarios e iniciar sesión mediante correo electrónico y contraseña.

Este proyecto fue desarrollado como una práctica para fortalecer conocimientos en desarrollo web, conexión con bases de datos y manejo de formularios.

---

## Descripción del proyecto

El sistema permite a los usuarios crear una cuenta utilizando sus datos personales y posteriormente iniciar sesión con sus credenciales.

La aplicación cuenta con un formulario de registro y un formulario de inicio de sesión, además de una conexión con una base de datos MySQL para almacenar y consultar la información de los usuarios.

Las contraseñas registradas son almacenadas utilizando un sistema de hash mediante `password_hash()` y verificadas durante el inicio de sesión mediante `password_verify()`.

---

## Funcionalidades

-  Registro de nuevos usuarios.
-  Inicio de sesión mediante correo y contraseña.
-  Validación de correo electrónico.
-  Verificación de contraseña.
-  Almacenamiento de contraseñas mediante hash.
-  Conexión con base de datos MySQL.
-  Validación de usuarios registrados.
-  Mensajes de error cuando los datos son incorrectos.
-  Redirección a una página de bienvenida después de iniciar sesión.
-  Interfaz web con HTML y CSS.
-  Interacciones mediante JavaScript.

---

## Tecnologías utilizadas

| Tecnología |      Uso     |

| **HTML5** | Estructura de las páginas |
| **CSS3** | Diseño y estilos de la interfaz |
| **JavaScript** | Interacciones y cambio entre formularios |
| **PHP** | Lógica del sistema y procesamiento de formularios |
| **MySQL** | Almacenamiento de información |
| **phpMyAdmin** | Administración de la base de datos |
| **XAMPP** | Entorno de desarrollo local |
| **GitHub** | Control y almacenamiento del proyecto |

---

##  Estructura del proyecto

```text
login-registro-php/
│
├── assets/
│   ├── css/
│   │   └── styles.css
│   │
│   ├── js/
│   │   └── script.js
│   │
│   └── imagenes/
│       └── imagen1.jpg
│
├── php/
│   ├── conexion_be.php
│   ├── login_usuario_be.php
│   └── registro_usuario_be.php
│
├── index.php
├── bienvenida.php
├── usuario.sql
└── README.md
```

## Autor

**Johan Morales**

GitHub: [JohanMoralesDev](https://github.com/JohanMoralesDev)

Proyecto desarrollado como práctica de desarrollo de software y desarrollo web.
