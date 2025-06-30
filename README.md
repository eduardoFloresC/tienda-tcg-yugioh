# TCG Tienda - Proyecto PHP

Proyecto web para la compra y venta de cartas coleccionables (Yu-Gi-Oh).  
Desarrollado con PHP puro y patrón DAO para manejo de base de datos.

## Características

- Registro y login de usuarios.
- Carrito de compras.
- CRUD básico de productos.
- Checkout con verificación de usuario y estado del carrito.
- Diseño responsive con Bootstrap.

## Instalación

1. Clonar el repositorio:
2. Configurar tu servidor local (XAMPP, WAMP, etc) apuntando al directorio del proyecto.
3. Crear la base de datos `tcgtienda` y ejecutar el script SQL `base_de_datos.sql` para crear tablas y datos iniciales.
4. Modificar si es necesario las credenciales de conexión en los archivos DAO (`modelo/DAOs/*.php`).
5. Abrir en el navegador: `http://localhost/Proyecto PHP` o la ruta correspondiente.

## Uso

- Registro y login.
- Añadir productos al carrito.
- Realizar compra.
- Gestión de productos (para usuarios autenticados).

## Nota

- La base de datos no está incluida, solo el script SQL para creación.
- Proyecto para fines educativos y demostrativos.

---

## Contacto

Eduardo - eduardo.flores.c@outlook.es