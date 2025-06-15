/*==============================================================*/
/* DBMS name:      Sybase SQL Anywhere 10                       */
/* Created on:     11/09/2018 12:32:35 a.m.                     */
/*==============================================================*/

drop table if exists ASIGNACION_ALUMNOS_NOTAS;

drop table if exists ASIGNACIONES;

drop table if exists DOCENTES;

drop table if exists ROL_USUARIO;

drop table if exists PERMISO_ROL;

drop table if exists ALUMNOS;

drop table if exists GRADOS;

drop table if exists PERMISOS;

drop table if exists ROLES;

drop table if exists USERS;

drop table if exists MATERIAS;

drop table if exists ASIGNACION_DOCENTES_MATERIAS;

drop table if exists CONDUCTAS;

drop table if exists PRUEBAS;

drop table if exists ACT_INTEGRADORAS;

drop table if exists ACT_COTIDIANAS;

drop table if exists ASIGNACION_NOTAS;

drop table if exists TRIMESTRE;

drop table if exists ASIGNACION_CONDUCTAS;

/*==============================================================*/
/* Table: ALUMNOS                                               */
/*==============================================================*/
create table ALUMNOS 
(
   id                   int                            not null AUTO_INCREMENT,
   nombres              varchar(150)                   not null,
   apellidos            varchar(150)                   not null,
   no_nie               int                            not null,
   f_nacimiento         date                           not null,
   edad                 int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ALUMNO primary key (id)
);

/*==============================================================*/
/* Table: ASIGNACIONES                                          */
/*==============================================================*/
create table ASIGNACIONES 
(
   id                   int                            not null AUTO_INCREMENT,
   id_docente           int                            null,
   id_grado             int                            null,
   anio                 int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ASIGNACION primary key (id)
);

/*==============================================================*/
/* Table: ASIGNACION_ALUMNOS_NOTAS                              */
/*==============================================================*/
create table ASIGNACION_ALUMNOS_NOTAS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asignacion        int                            null,
   id_alumno            int                            null,
   anio                 int                            null,
   estado_academico     char(10)                       null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ASIGNACION_ALUMNO primary key (id)
);

/*==============================================================*/
/* Table: DOCENTES                                              */
/*==============================================================*/
create table DOCENTES 
(
   id                   int                            not null AUTO_INCREMENT,
   id_usuario           int                            not null,
   no_escalafon         numeric                        not null,
   no_dui               char(10)                       not null,
   telefono             char(8)                        not null,
   direccion            varchar(150)                   not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_DOCENTE primary key (id)
);

/*==============================================================*/
/* Table: GRADOS                                                */
/*==============================================================*/
create table GRADOS 
(
   id                   int                            not null AUTO_INCREMENT,
   nombre               varchar(20)                    not null,
   seccion              char(8)                        not null,
   capacidad            int                            not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_GRADO primary key (id)
);

/*==============================================================*/
/* Table: MATERIAS                                              */
/*==============================================================*/
create table MATERIAS 
(
   id                   int                            not null AUTO_INCREMENT,
   nombre               varchar(150)                   null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_MATERIA primary key (id)
);

/*==============================================================*/
/* Table: PERMISOS                                              */
/*==============================================================*/
create table PERMISOS 
(
   id                   int                            not null AUTO_INCREMENT,
   nombre               varchar(150)                   not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_PERMISOS primary key (id)
);

/*==============================================================*/
/* Table: PERMISO_ROL                                           */
/*==============================================================*/
create table PERMISO_ROL 
(
   id                   integer                        not null AUTO_INCREMENT,
   id_permisos          integer                        null,
   id_rol               integer                        null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_PERMISO_ROL primary key (id)
);

/*==============================================================*/
/* Table: ROLES                                                 */
/*==============================================================*/
create table ROLES 
(
   id                   int                            not null AUTO_INCREMENT,
   nombre_rol           varchar(50)                    not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ROLES primary key (id)
);

/*==============================================================*/
/* Table: ROL_USUARIO                                           */
/*==============================================================*/
create table ROL_USUARIO 
(
   id                   int                            not null AUTO_INCREMENT,
   id_rol               int                            null,
   id_usuario           int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ROL_USUARIO primary key (id)
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS 
(
   id                   int                            not null AUTO_INCREMENT,
   usuario              char(255)                      not null,
   name                 varchar(150)                   not null,
   password             varchar(191)                   not null,
   email                varchar(30)                    not null,
   remember_token	varchar(100),
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_USUARIO primary key (id)
);

/*==============================================================*/
/* Table: ASIGNACION_DOCENTES_MATERIAS                          */
/*==============================================================*/
create table ASIGNACION_DOCENTES_MATERIAS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_materia           int                            null,
   id_docente           int                            null,
   anio                 int                            not null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ASIGNACION_DOCENTES primary key (id)
);

/*==============================================================*/
/* Table: CONDUCTAS                                              */
/*==============================================================*/
create table CONDUCTAS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asignacion_conductas  int                        null,
   moral_civica         varchar(30)                    null,
   nota_conducta        int                            null,
   observaciones        varchar(500)                   null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_CONDUCTAS primary key (id)
);

/*==============================================================*/
/* Table: PRUEBAS                                               */
/*==============================================================*/
create table PRUEBAS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asignacion_notas  int                            null,
   laboratorio          float                          null,
   examen               float                          null,
   promedio_p           float                          null,
   prom_p_porcent       float                          null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_PRUEBAS primary key (id)
);

/*==============================================================*/
/* Table: ACT_INTEGRADORAS                                      */
/*==============================================================*/
create table ACT_INTEGRADORAS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asignacion_notas  int                            null,
   activi_1             float                          null,
   activi_2             float                          null,
   promedio_i           float                          null,
   prom_i_porcent       float                          null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_INTEGRADORAS primary key (id)
);

/*==============================================================*/
/* Table: ACT_COTIDIANAS                                        */
/*==============================================================*/
create table ACT_COTIDIANAS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asignacion_notas  int                            null,
   nota_cotidiana       float                          null,
   nota_porcent         float                          null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_COTIDIANAS primary key (id)
);

/*==============================================================*/
/* Table: ASIGNACION_NOTAS                                      */
/*==============================================================*/
create table ASIGNACION_NOTAS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_materia           int                            null,
   id_asignacion_alumno int                            null,
   id_trimestre         int                            null,
   nota_trimestral      float                          null,
   trimestre            int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ASIGNACION_NOTAS primary key (id)
);

/*==============================================================*/
/* Table: TRIMESTRE                                             */
/*==============================================================*/
create table TRIMESTRES 
(
   id                   int                            not null AUTO_INCREMENT,
   nombre               varchar(30)                    null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_TRIMESTRE primary key (id)
);

INSERT INTO `trimestres` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
  (1, 'Primer', '2018-12-11 01:53:59', '2018-12-11 01:53:59'),
  (2, 'Segundo', '2018-12-11 01:54:05', '2018-12-11 01:54:05'),
  (3, 'Tercer', '2018-12-11 01:54:15', '2018-12-11 01:54:15');

/*==============================================================*/
/* Table: ASIGNACION_CONDUCTAS                                      */
/*==============================================================*/
create table ASIGNACION_CONDUCTAS 
(
   id                   int                            not null AUTO_INCREMENT,
   id_asignacion_alumno int                            null,
   id_trimestre         int                            null,
   created_at           timestamp,
   updated_at           timestamp,
   constraint PK_ASIGNACION_CONDUCTAS primary key (id)
);


alter table DOCENTES add foreign key (id_usuario) references USERS (id);

alter table PERMISO_ROL add foreign key (id_permisos) references PERMISOS (id);

alter table PERMISO_ROL add foreign key (id_rol) references ROLES (id);

alter table ROL_USUARIO add foreign key (id_usuario) references USERS (id);

alter table ROL_USUARIO add foreign key (id_rol) references ROLES (id);

alter table ASIGNACIONES add foreign key (id_grado) references GRADOS (id);

alter table ASIGNACIONES add foreign key (id_docente) references DOCENTES (id);

alter table ASIGNACION_ALUMNOS_NOTAS add foreign key (id_asignacion) references ASIGNACIONES (id);

alter table ASIGNACION_ALUMNOS_NOTAS add foreign key (id_alumno) references ALUMNOS (id);

alter table ASIGNACION_DOCENTES_MATERIAS add foreign key (id_materia) references MATERIAS (id);

alter table ASIGNACION_DOCENTES_MATERIAS add foreign key (id_docente) references DOCENTES (id);


alter table ASIGNACION_NOTAS add foreign key (id_asignacion_alumno) references ASIGNACION_ALUMNOS_NOTAS (id);

alter table ASIGNACION_NOTAS add foreign key (id_materia) references MATERIAS (id);

alter table ASIGNACION_NOTAS add foreign key (id_trimestre) references TRIMESTRES (id);


alter table ASIGNACION_CONDUCTAS add foreign key (id_asignacion_alumno) references ASIGNACION_ALUMNOS_NOTAS (id);

alter table ASIGNACION_CONDUCTAS add foreign key (id_trimestre) references TRIMESTRES (id);


alter table CONDUCTAS add foreign key (id_asignacion_conductas) references ASIGNACION_CONDUCTAS (id);

alter table PRUEBAS add foreign key (id_asignacion_notas) references ASIGNACION_NOTAS (id);

alter table ACT_INTEGRADORAS add foreign key (id_asignacion_notas) references ASIGNACION_NOTAS (id);

alter table ACT_COTIDIANAS add foreign key (id_asignacion_notas) references ASIGNACION_NOTAS (id);