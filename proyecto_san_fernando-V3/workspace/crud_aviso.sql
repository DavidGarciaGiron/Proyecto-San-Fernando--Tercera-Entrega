use sanFernando;

create table avi_mantenimiento(
	id int(50) not null auto_increment primary key,
	planta varchar(50),
	turno varchar(25),
	nombre_tecnico varchar(25),
	sistema varchar(25),
	nombre_maquina_equipo varchar(50),
	tipo_mantto varchar(50),
	odm int(20),
	tipo_falla varchar(50),
	estado_trabajo varchar(100),
	observaciones varchar(200),
	targeta_roja varchar(25),
	fecha_ejecucion varchar(50),
	hora_ini varchar(50),
	hora_fin varchar(50),
	inconveniente varchar(100),
	descripcion_actividades varchar(200),
	duracion_actividad varchar(25)
);

drop table avi_mantenimiento;