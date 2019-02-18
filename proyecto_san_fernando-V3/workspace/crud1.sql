create database sanFernando;

use sanFernando;

create table prog_mantenimiento(
	id int(50) not null auto_increment primary key,
	planta varchar(50),
	sistema varchar(50),
	codigo_equipo varchar(50),
	parte_equipo varchar(50),
	equipo varchar(50),
	denominacion varchar(100),
	orden varchar(50),
	operacion varchar(100),
	frecuencia varchar(50),
	actividades varchar(200),
	t_control varchar(100),
	fecha_ini_mas_tmp varchar(100),
	fecha_fin_mas_tmpr varchar(100),
	prioridad varchar(100),
	tiempo_est_hrs varchar(100),
	tiempo_est_r_hrs varchar(100),
	nombres_apellidos varchar(100),
	puesto_trabajo varchar(100),
	turno varchar(100),
	emplazamiento varchar(100),
	nro_h_ruta_ope varchar(100),
	grupo_planif varchar(100),
	precio varchar(100),
	texto_expl varchar(100),
	acreedor varchar(100),
	status_sistema varchar(100)
);

drop table prog_mantenimiento;