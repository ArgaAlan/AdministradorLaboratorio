# AdministradorLaboratorio
A web page to administrate inventory, laboratories, etc. 

This web works with a MySQL DB, at the moment it is not in the a server so in case you would like to tested follow the next commands
for you MySQL localhost.

CREATE DATABASE laboratorio;
USE laboratorio;

CREATE TABLE material (
	codigo_barras INT(32) NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(255),
	foto VARCHAR(255),
	marca VARCHAR(255),
	modelo VARCHAR(255),
	especificaciones VARCHAR(255),
	identificacion_interna VARCHAR(255),
	almacen VARCHAR(255),
	ubicacion VARCHAR(255),
	proveedor VARCHAR(255),
	cantidad VARCHAR(255),
	observaciones VARCHAR(255),
	PRIMARY KEY (codigo_barras)
);

INSERT INTO material
VALUES (2525,
	"Matraz",
	"https://upload.wikimedia.org/wikipedia/commons/6/67/Duran_erlenmeyer_flask_narrow_neck_50ml.jpg",
	"marca",
	"modelo",
	"especificaciones",
	"1",
	"almacen",
	"ubicacion",
	"proveedor",
	"12",
	"observaciones");

INSERT INTO material
VALUES (2523,
	"Probeta",
	"https://www.instrumentodelaboratorio.info/wp-content/uploads/2019/09/probeta.jpg",
	"marca",
	"modelo",
	"especificaciones",
	"1",
	"almacen",
	"ubicacion",
	"proveedor",
	"12",
	"observaciones");

INSERT INTO material
VALUES (2523, "Probeta","https://www.instrumentodelaboratorio.info/wp-content/uploads/2019/09/probeta.jpg","modelo","especificaciones",1,"almacen","ubicacion","proveedor",12,"observaciones");


CREATE TABLE reactivos (
	codigo_barras INT(32) NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(255),
	foto VARCHAR(255),
	marca VARCHAR(255),
	fecha_adquisicion VARCHAR(255),
	identificacion_interna VARCHAR(255),
	hoja_seguridad TEXT,
	almacen VARCHAR(255),
	ubicacion VARCHAR(255),
	proveedor VARCHAR(255),
	cantidad VARCHAR(255),
	observaciones TEXT,
	PRIMARY KEY (codigo_barras)
);

INSERT INTO reactivos
VALUES(
	20,
	"Reactivo 1",
	"https://www.marbequimica.com.ar/wp-content/uploads/2018/08/2000089100_1.jpg",
	"marca",
	"14-02",
	"25",
	"Hoja de seguridad",
	"Almacen",
	"ubicacion",
	"proveedor",
	"20",
	"observaciones"
);

INSERT INTO reactivos
VALUES(
	22,
	"Reactivo 2",
	"https://grupojafs.com/wp-content/uploads/2018/11/reactivo-de-biuret-1-l-icr.jpg",
	"marca",
	"14-02",
	"25",
	"Hoja de seguridad",
	"Almacen",
	"ubicacion",
	"proveedor",
	"20",
	"observaciones"
);

CREATE TABLE equipo (
	codigo_barras INT(32) NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(255),
	foto VARCHAR(255),
	descripcion VARCHAR(255),
	marca VARCHAR(255),
	serie VARCHAR(255),
	inventario_tec VARCHAR(255),
	identificacion_interna VARCHAR(255),
	adquisicion VARCHAR(255),
	almacen VARCHAR(255),
	ubicacion VARCHAR(255),
	manual VARCHAR(255),
	pno VARCHAR(255),
	proveedor VARCHAR(255),
	cantidad VARCHAR(255),
	observaciones TEXT,
	PRIMARY KEY (codigo_barras)
);

INSERT INTO equipo
VALUES (
	15,
	"EQUIPO 1",
	"https://upload.wikimedia.org/wikipedia/commons/6/67/Duran_erlenmeyer_flask_narrow_neck_50ml.jpg",
	"descripcion",
	"marca",
	"serie",
	"inventario_tec",
	"identificacion_interna",
	"adquisicion",
	"almacen",
	"ubicacion",
	"manual",
	"pno",
	"proveedor",
	"cantidad",
	"observaciones"
);

INSERT INTO equipo
VALUES (
	16,
	"EQUIPO 2",
	"https://www.instrumentodelaboratorio.info/wp-content/uploads/2019/09/probeta.jpg",
	"descripcion",
	"marca",
	"serie",
	"inventario_tec",
	"identificacion_interna",
	"adquisicion",
	"almacen",
	"ubicacion",
	"manual",
	"pno",
	"proveedor",
	"cantidad",
	"observaciones"
);

CREATE TABLE consumibles (
	codigo_barras INT(32) NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(255),
	foto VARCHAR(255),
	marca VARCHAR(255),
	especificaciones VARCHAR(255),
	almacen VARCHAR(255),
	ubicacion VARCHAR(255),
	manual VARCHAR(255),
	hoja_seguridad TEXT,
	mantenimiento VARCHAR(255),
	proveedor VARCHAR(255),
	cantidad VARCHAR(255),
	observaciones TEXT,
	PRIMARY KEY (codigo_barras)
);

INSERT INTO consumibles
VALUES (
	1,
	"nombre",
	"https://www.instrumentodelaboratorio.info/wp-content/uploads/2019/09/probeta.jpg",
	"marca",
	"especificaciones",
	"almacen",
	"ubicacion",
	"manual",
	"hoja_seguridad",
	"mantenimiento",
	"proveedor",
	"cantidad",
	"observaciones"
);

INSERT INTO consumibles
VALUES (
	2,
	"nombre2",
	"https://www.instrumentodelaboratorio.info/wp-content/uploads/2019/09/probeta.jpg",
	"marca",
	"especificaciones",
	"almacen",
	"ubicacion",
	"manual",
	"hoja_seguridad",
	"mantenimiento",
	"proveedor",
	"cantidad",
	"observaciones"
);

CREATE TABLE proveedores (
	id INT(11) NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(255),
	telefono VARCHAR(255),
	correo VARCHAR(255),
	tipo_servicio VARCHAR(255),
	marcas VARCHAR(255),
	direccion TEXT,
	observaciones TEXT,
	PRIMARY KEY (id)
);

INSERT INTO proveedores (nombre,telefono,correo,tipo_servicio,marcas,direccion,observaciones)
VALUES (
	"Chuy",
	"311-265-4895",
	"elBuen@Chuygmail.com",
	"Le hace a todo el compadre",
	"QUE DE TODAS SABE",
	"A la vuelta de la esquina",
	"Chulada el buen Chuy"
);

INSERT INTO proveedores (nombre,telefono,correo,tipo_servicio,marcas,direccion,observaciones)
VALUES (
	"Pepe",
	"311-265-4894",
	"elPepe@gmail.com",
	"Muy mala chamba saca",
	"Una que otra",
	"De Zapopan",
	"Nombre ni le marques"
);
