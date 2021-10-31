create database miobservador;

create table  miobservador.EVENTO_ADVERTENCIA (
		idAdvertencia		int NOT NULL AUTO_INCREMENT,
        mensaje				varchar (50),
        PRIMARY KEY (idAdvertencia)
        );
    
create table miobservador.PROVINCIA (
	idProvincia        int NOT NULL AUTO_INCREMENT,
    nombreProvincia    VARCHAR (25) NOT NULL,
    PRIMARY KEY        (idProvincia)
    );
    
create table miobservador.CIUDAD (
	idCiudad           int NOT NULL AUTO_INCREMENT,
    nombreCiudad 	   VARCHAR (25) NOT NULL,
    idProvincia 	   int NOT NULL,
    PRIMARY KEY (idCiudad),
	CONSTRAINT CIUDAD_idProvincia
    FOREIGN KEY (idProvincia)
    REFERENCES miobservador.PROVINCIA(idProvincia)
    );
    
create table miobservador.EVENTO_TIPO(
	idTipoEvento     int NOT NULL AUTO_INCREMENT,
	nombreEvento     varchar (25) NOT NULL,
	descripcion      varchar (50),
	PRIMARY KEY (idTipoEvento)
	);

create table miobservador.CUENTA_ESTADO(
	idCuentaEstado    int NOT NULL AUTO_INCREMENT,
    estado            varchar (25) NOT NULL,
    descripcion       varchar (50),
    PRIMARY KEY (idCuentaEstado)
	);

create table miobservador.CUENTA_ORIGEN(
	idCuentaOrigen    int NOT NULL AUTO_INCREMENT,
    origen            varchar (25) NOT NULL,
    descripcion       varchar (50) ,
    PRIMARY KEY (idCuentaOrigen)
	);
    
create table miobservador.CUENTA (
	idCuenta         int NOT NULL AUTO_INCREMENT,
    nombre           varchar (25) NOT NULL,
    apellido         varchar (25) NOT NULL,
    email            varchar (320) UNIQUE NOT NULL,
    contrasenia      varchar (100) NOT NULL,
    idCuentaOrigen   int NOT NULL,
    idCuentaEstado   int NOT NULL,
    idCiudad         int NOT NULL,
    PRIMARY KEY (idCuenta),
    
    CONSTRAINT CUENTA_idCuentaOrigen
    FOREIGN KEY (idCuentaOrigen)
    REFERENCES miobservador.CUENTA_ORIGEN(idCuentaOrigen),
    
    CONSTRAINT CUENTA_idCuentaEstado
    FOREIGN KEY (idCuentaEstado)
    REFERENCES miobservador.CUENTA_ESTADO(idCuentaEstado),
    
    CONSTRAINT CUENTA_idCiudad
    FOREIGN KEY (idCiudad)
    REFERENCES miobservador.CIUDAD(idCiudad)
	);
    
    create table miobservador.EVENTO_REGISTRO (
		idRegistro		int NOT NULL AUTO_INCREMENT,
        direccion       varchar (50),
        coordenadas     varchar (50),
        fechayhora      datetime,
        idCuenta        int NOT NULL,
        idTipoEvento     int NOT NULL,
        PRIMARY KEY (idRegistro),
        
        CONSTRAINT EVENTO_REGISTRO_idCuenta
		FOREIGN KEY (idCuenta)
		REFERENCES miobservador.CUENTA(idCuenta),
        
        CONSTRAINT EVENTO_REGISTRO_idTipoEvento
		FOREIGN KEY (idTipoEvento)
		REFERENCES miobservador.EVENTO_TIPO(idTipoEvento)
        );
    
	create table miobservador.EVENTO (
        idEvento		int NOT NULL AUTO_INCREMENT,
        inicioEvento    datetime,
        finEvento       datetime,
        estado          boolean,
        idRegistro		int NOT NULL,
        idAdvertencia		int NOT NULL,
        PRIMARY KEY (idEvento),
        
        CONSTRAINT EVENTO_idRegistro
		FOREIGN KEY (idRegistro)
		REFERENCES miobservador.EVENTO_REGISTRO(idRegistro),
        
        CONSTRAINT EVENTO_idAdvertencia
		FOREIGN KEY (idAdvertencia)
		REFERENCES miobservador.EVENTO_ADVERTENCIA(idAdvertencia)
        );
        
INSERT INTO cuenta (nombre, apellido, email, contrasenia, idCuentaOrigen, idCuentaEstado, idCiudad) 
			VALUES ('Maria','Perez','perez@mail.com','123456', 3, 2, 2),('Martin','Perez','martin@mail.com','123456789', 3, 2, 2);
            
SELECT nombre , contrasenia FROM miobservador.cuenta 
	WHERE nombre = 'Juan'
    AND contrasenia = '123456';

INSERT INTO evento_tipo VALUES ('4','Accidente vial','Choque entre 2 motos');
INSERT INTO evento_advertencia VALUES ('2','Guarda con el pozo');
INSERT INTO evento_registro VALUES ('1','Avenida Sarfield', '', '2021/05/11', '1', '4');
INSERT INTO evento VALUES ('1', '2021/05/11', '2021/05/12', True, '1', '2');

UPDATE cuenta SET email = 'juanperez@gmail.com' WHERE idcuenta = 1;    
COMMIT;  

UPDATE cuenta SET idciudad = 5 WHERE idciudad = 2;
COMMIT;

DELETE FROM cuenta 
	WHERE nombre = 'Maria'
   	AND apellido = 'Perez';
COMMIT;


        
	
	
    
    
    