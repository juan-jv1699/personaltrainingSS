-- creacion de base de datos
CREATE DATABASE tienda_master;
use tienda_master;


-- creacion de tabla usuarios
DROP TABLE IF EXISTS usuarios;
CREATE table usuarios(
    id int(255) auto_increment not null,
    nombre varchar(40) not null,
    apellidos varchar(40),
    email varchar(100) not null,
    userKey varchar(255) not null,
    rol varchar(20),
    userImage varchar(255),
    CONSTRAINT pk_ususarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

-- creacion tabla categorias
DROP TABLE IF EXISTS categorias;
CREATE TABLE categorias(
    id int(255) auto_increment not null,
    nombre varchar(40) not null,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

-- creacion tabla productos
DROP TABLE IF EXISTS productos;
CREATE TABLE productos(
    id int(255) auto_increment not null,
    categoria_id int(255)not null,
    nombre varchar(40) not null,
    descripcion text,
    precio float(100,2) not null,
    stock int (255) unsigned not null,
    oferta varchar(2),
    fecha date not null,
    producto_image varchar(255),
    CONSTRAINT pk_productos PRIMARY KEY(id),
    CONSTRAINT fk_productos_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

-- creacion tabla pedidos
DROP TABLE IF EXISTS pedidos;
CREATE TABLE pedidos(
    id int(255) auto_increment not null,
    usuario_id int(255),
    provincia varchar(100) not null,
    localidad varchar(100) not null,
    direccion varchar(255) not null,
    coste float(200,2) not null,
    estado varchar(20) not null,
    fecha date,
    hora time,
    CONSTRAINT pk_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_pedidos_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

-- creacion lineas pedidos
DROP TABLE IF EXISTS lineas_pedidos;
CREATE TABLE lineas_pedidos(
    id int(255) auto_increment not null,
    pedido_id int(255),
    producto_id int(255),
    CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_lPedidos_pedidos FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
    CONSTRAINT fk_lPedidos_productos FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;