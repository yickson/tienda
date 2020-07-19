## Tienda en Laravel con TailwindCSS

Es una tienda simple realizada con Tailwind y algunos componentes en VueJS

La estructura de la base de datos esta estructurada de la siguiente forma:

| Modelo | Nombre | 
|---|---|
| User  | Usuarios del sistema, tanto clientes como admin | 
| Order | Ordenes (pedidos) del sistema  |
| Product | Manejo de productos, nombre, categoría, cantidad, precio, etc |
| Payment | Métodos de pagos: Stripe, Paypal, WebPay o el que se guste adecuar |
| Ticket | Compra totalizada del cliente |
| Provider | Proveedor de los productos en la tienda |
| TicketDetail | Detalle del ticket con cada uno de los productos |
| OrderDetail | Detalle de la orden con cada uno de los productos y su estatus respectivo|
| Address | Dirección de los clientes |
| AddressType | Tipo de dirección: casa o departamento |
| Currency | Moneda de la tienda y si maneja decimales o no |
| Country | País de la tienda |
| State | Estado o región del país de la tienda |
| Province | Provincia o comuna del país de la tienda |
| ProductCondition | Condición del producto |
| OrderStatus | Estatus de una orden |
| Tax| Impuesto que manejará la tienda |

## División del sistema

El sistema se dividirá en 3 partes:
- Tienda con productos
- Panel de usuario, perfil, compras, órdenes entre otros.
- Panel del administrador, manejo de órdenes, creación de productos, proveedores, moneda, config de la tienda entre otros.

## Desarrolladores del sistema

- Yickson Ramírez
- Rocimar Pérez
