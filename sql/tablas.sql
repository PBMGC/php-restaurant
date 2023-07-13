/*creacion de tabla catalogo*/
CREATE TABLE CATALOGO
(
    productoID int(11) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(40) NOT NULL,
    categoria VARCHAR(30) NOT NULL
    Precio FLOAT NOT NULL,
    Numero_pedido int(11) NOT NULL,
    Empaque VARCHAR(40) NOT NULL
)

/*Insertado de valores */

INSERT INTO CATALOGO VALUES
(NULL,'ARROZ COSTEÑO','Menestras',3.75,1,'Bolsa 750 Gr'),
(NULL,'AZUCAR ZUKA','Endulzantes',3.15,1,'Bolsa 750 Gr'),
(NULL,'ACEITE PRIMOR','Aceite',6.10,1,'1 Litro'),
(NULL,'LECHE IDEAL','Lacteo',3.05,1,'1 Tarro'),
(NULL,'CAFETAL','Cafe',5.90,1,'Bolsa 900 Gr'),
(NULL,'MERMELADA FANNY','Mermelada',6.90,1,'Frasco 750 Gr')
