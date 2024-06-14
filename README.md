## Sistema de inventario PHP

Crear una pagina web que tenga las siguientes caracteríticas:


- Un listado inicial de productos los productos
- La tabla se llamará products estarán conformados por las columnas id, sku, name, price, quantity y deleted_at.
- Habran dos formularios, uno para crear y otro para actualizar, asímismo tambien habrá borrado de productos, pero solo borrado lógico, no físico (investigar).
- Cabe destacar que estas acciones solo podran realizarlas los usuarios que estén autenticados, por los botones solo se mostrarán cuando un usuario ya haya ingresado previamente.
- El listado deberá estar páginado


La página deberá tener un sistema de login para que solo usuarios autenticadoacs puedan realizar acciones de cualquier modificación:

- Los usuarios podran cambiar su contraseña y correo
- Se deberá crear un listado de usuarios
- Los usuarios ya registrados podran crear otros usuarios
- Se creará un usuario inicial que será el admin con los siguientes datos: correo: admin@php.com contraseña: password


NOTAS

- Recuerde hacer las validaciones de sanitización correspondientes
- Las rutas que requieren autenticación deben estar protegidas
- Agregar ventana de validacion antes de borrar un producto



Todo esto podria ir mutando a medida que se va realizando el proyecto, por ende tener en cuenta esto