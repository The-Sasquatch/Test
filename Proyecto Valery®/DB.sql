CREATE TABLE usuario (
	nu_usuario int AUTO_INCREMENT not null primary key,
	nb_usuario varchar(100) not null,
	co_correo varchar(50) not null unique,
	co_clave varchar(50) not null

)