-- creación de tabla usuarios
CREATE TABLE usuarios
(
    id tinyint auto_increment primary key not null,
    nombre varchar(50) not null,
    apellido varchar(50) not null,
    email varchar(100) unique not null,
    clave varchar(76) not null,
    idRol tinyint,
    FOREIGN KEY (idRol)
        REFERENCES catalogo2020.roles (idRol)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION
);