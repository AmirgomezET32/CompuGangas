Create database redes

create table usuarios(
ID_usuario int identity(1,1),
usuario varchar(50),
contraseña password(30),
correo varchar(20),
primary key (ID_usuario)
);

insert into redes value (1,'amirx79v','1234','amirx79v@gmail.com');
