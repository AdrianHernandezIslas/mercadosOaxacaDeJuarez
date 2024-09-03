/*
 Navicat Premium Data Transfer

 Source Server         : dev-dbmercados
 Source Server Type    : PostgreSQL
 Source Server Version : 160003 (160003)
 Source Host           : dpg-cr90naq3esus73behu1g-a.oregon-postgres.render.com:5432
 Source Catalog        : dbmercados_ho3y
 Source Schema         : v3

 Target Server Type    : PostgreSQL
 Target Server Version : 160003 (160003)
 File Encoding         : 65001

 Date: 30/08/2024 22:30:24
*/


-- ----------------------------
-- Sequence structure for archivo_id_archivo_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "archivo_id_archivo_seq";
CREATE SEQUENCE "archivo_id_archivo_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for direccion_id_direccion_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "direccion_id_direccion_seq";
CREATE SEQUENCE "direccion_id_direccion_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for giro_id_giro_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "giro_id_giro_seq";
CREATE SEQUENCE "giro_id_giro_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for locacion_id_locacion_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "locacion_id_locacion_seq";
CREATE SEQUENCE "locacion_id_locacion_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for local_id_local_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "local_id_local_seq";
CREATE SEQUENCE "local_id_local_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for mercado_id_mercado_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "mercado_id_mercado_seq";
CREATE SEQUENCE "mercado_id_mercado_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for palabra_clave_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "palabra_clave_id_seq";
CREATE SEQUENCE "palabra_clave_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Table structure for archivo
-- ----------------------------
DROP TABLE IF EXISTS "archivo";
CREATE TABLE "archivo" (
  "ruta" varchar COLLATE "pg_catalog"."default" NOT NULL,
  "tipo" int4 NOT NULL,
  "fecha_creacion" timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  "id_archivo" int4 NOT NULL DEFAULT nextval('archivo_id_archivo_seq'::regclass)
)
;

-- ----------------------------
-- Records of archivo
-- ----------------------------
INSERT INTO "archivo" VALUES ('files/img/mercado/file_876bba0f-3d50-4320-8b22-9920ff1000cc.jpeg', 1, '2024-08-30 20:46:07', 7);
INSERT INTO "archivo" VALUES ('files/img/mercado/file_cdccee8e-4750-4875-873d-5435d3e267f3.jpeg', 1, '2024-08-30 20:54:05', 8);
INSERT INTO "archivo" VALUES ('files/img/mercado/file_05d85f91-b191-442f-abe3-35617bc9e11c.jpeg', 1, '2024-08-30 20:55:19', 9);
INSERT INTO "archivo" VALUES ('files/img/mercado/file_4d0dec9e-61a5-49ab-bea1-18cb9b6cb200.jpeg', 1, '2024-08-30 21:17:33', 10);
INSERT INTO "archivo" VALUES ('files/img/mercado/file_3aebb660-d885-4949-a3ac-dc9d2e257c72.jpeg', 1, '2024-08-30 21:17:40', 11);
INSERT INTO "archivo" VALUES ('files/img/mercado/file_2324000c-7818-46d2-85cd-cb8d7d7aaab9.jpeg', 1, '2024-08-30 21:17:44', 12);
INSERT INTO "archivo" VALUES ('files/img/mercado/file_a533a5ed-7a58-4cf2-924e-b9f3d1a06aa2.jpeg', 1, '2024-08-30 21:17:50', 13);
INSERT INTO "archivo" VALUES ('files/img/mercado/file_e0c99e38-0820-4b23-bd13-dea7b7ca94b1.jpeg', 1, '2024-08-30 21:17:54', 14);
INSERT INTO "archivo" VALUES ('files/img/mercado/file_759c3df9-4c20-4b1b-ad69-9371bde25632.jpeg', 1, '2024-08-30 21:17:58', 15);
INSERT INTO "archivo" VALUES ('files/img/mercado/file_17c75f8b-abb2-41f2-ba91-5308d5bd0598.jpeg', 1, '2024-08-30 21:18:05', 16);
INSERT INTO "archivo" VALUES ('files/img/mercado/file_c0867ea9-0034-4f55-b580-09eaeabf41c0.jpeg', 1, '2024-08-30 21:19:33', 17);

-- ----------------------------
-- Table structure for direccion
-- ----------------------------
DROP TABLE IF EXISTS "direccion";
CREATE TABLE "direccion" (
  "calle" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "numero" varchar(30) COLLATE "pg_catalog"."default" NOT NULL,
  "colonia" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "estado" varchar(45) COLLATE "pg_catalog"."default" NOT NULL,
  "municipio" varchar(100) COLLATE "pg_catalog"."default" NOT NULL,
  "codigo_postal" varchar(5) COLLATE "pg_catalog"."default" NOT NULL,
  "latitud" varchar(15) COLLATE "pg_catalog"."default",
  "longitud" varchar(15) COLLATE "pg_catalog"."default",
  "activo" bool NOT NULL DEFAULT true,
  "id_direccion" int4 NOT NULL DEFAULT nextval('direccion_id_direccion_seq'::regclass)
)
;

-- ----------------------------
-- Records of direccion
-- ----------------------------
INSERT INTO "direccion" VALUES ('test', 't', 'test', 'd', 'd', '68030', '12.2', '10.2', 't', 1);
<<<<<<< HEAD
INSERT INTO "direccion" VALUES ('Las Casas', '9513217244', 'Centro', 'Oaxaca', 'Mexico', '68000','17.05895','-96.72666','t',2);
=======
>>>>>>> e8db34b (chore: db backup update)

-- ----------------------------
-- Table structure for giro
-- ----------------------------
DROP TABLE IF EXISTS "giro";
CREATE TABLE "giro" (
  "nombre" varchar(150) COLLATE "pg_catalog"."default" NOT NULL,
  "activo" bool NOT NULL DEFAULT true,
  "id_giro" int4 NOT NULL DEFAULT nextval('giro_id_giro_seq'::regclass)
)
;

<<<<<<< HEAD

-- ----------------------------
-- Records of giro
-- ----------------------------
INSERT INTO "giro" VALUES ('Alimentos','t',1);
INSERT INTO "giro" VALUES ('Tecnologia','t',2);
INSERT INTO "giro" VALUES ('Ropa','t',3);

=======
-- ----------------------------
-- Records of giro
-- ----------------------------
>>>>>>> e8db34b (chore: db backup update)

-- ----------------------------
-- Table structure for locacion
-- ----------------------------
DROP TABLE IF EXISTS "locacion";
CREATE TABLE "locacion" (
  "nombre" varchar(120) COLLATE "pg_catalog"."default" NOT NULL,
  "historia" text COLLATE "pg_catalog"."default",
  "telefono" varchar(15) COLLATE "pg_catalog"."default",
  "id_locacion" int4 NOT NULL DEFAULT nextval('locacion_id_locacion_seq'::regclass)
)
;

-- ----------------------------
-- Records of locacion
-- ----------------------------
INSERT INTO "locacion" VALUES ('Paz Migueles', 'test', '9514365555', 1);
INSERT INTO "locacion" VALUES ('Paz Migueles', 'reggrte', '9514365555', 2);
<<<<<<< HEAD
INSERT INTO "locacion" VALUES ('Benito Juarez', 'loreme isojkhocjkheiochoericer3w historia','9581065616',3);
INSERT INTO "locacion" VALUES ('Novedades Lucas', 'loreme isojkhocjkheiochoericer3w historia local', '9581065616',4);
INSERT INTO "locacion" VALUES ('Chuchita', 'loreme isojkhocjkheiochoericer3w historia local','9581065616',5);
=======
>>>>>>> e8db34b (chore: db backup update)

-- ----------------------------
-- Table structure for locacion_archivo
-- ----------------------------
DROP TABLE IF EXISTS "locacion_archivo";
CREATE TABLE "locacion_archivo" (
  "id_locacion" int4 NOT NULL,
  "id_archivo" int4 NOT NULL
)
;

-- ----------------------------
-- Records of locacion_archivo
-- ----------------------------
INSERT INTO "locacion_archivo" VALUES (1, 8);
INSERT INTO "locacion_archivo" VALUES (1, 9);
INSERT INTO "locacion_archivo" VALUES (1, 10);
INSERT INTO "locacion_archivo" VALUES (1, 11);
INSERT INTO "locacion_archivo" VALUES (1, 12);
INSERT INTO "locacion_archivo" VALUES (1, 13);
INSERT INTO "locacion_archivo" VALUES (1, 14);
INSERT INTO "locacion_archivo" VALUES (1, 15);
INSERT INTO "locacion_archivo" VALUES (1, 16);
INSERT INTO "locacion_archivo" VALUES (1, 17);

-- ----------------------------
-- Table structure for local
-- ----------------------------
DROP TABLE IF EXISTS "local";
CREATE TABLE "local" (
  "clave" varchar(15) COLLATE "pg_catalog"."default" NOT NULL,
  "eslogan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "activo" bool NOT NULL DEFAULT true,
  "id_giro" int4 NOT NULL,
  "id_locacion" int4 NOT NULL,
  "id_mercado" int4 NOT NULL,
  "id_local" int4 NOT NULL DEFAULT nextval('local_id_local_seq'::regclass)
)
;

-- ----------------------------
-- Records of local
-- ----------------------------
<<<<<<< HEAD
INSERT INTO "local" VALUES ('LOC123', 'Amas es convivir','t', 3,4,2,1);
INSERT INTO "local" VALUES ('LOC124', 'Chuchita','t', 1,5,2,2);
=======
>>>>>>> e8db34b (chore: db backup update)

-- ----------------------------
-- Table structure for mercado
-- ----------------------------
DROP TABLE IF EXISTS "mercado";
CREATE TABLE "mercado" (
  "zona" varchar COLLATE "pg_catalog"."default" NOT NULL,
  "hora_apertura" varchar COLLATE "pg_catalog"."default" NOT NULL,
  "hora_cierre" varchar COLLATE "pg_catalog"."default" NOT NULL,
  "descripcion" varchar COLLATE "pg_catalog"."default" NOT NULL,
  "activo" bool NOT NULL DEFAULT true,
  "id_locacion" int4 NOT NULL,
  "id_direccion" int4 NOT NULL,
  "id_mercado" int4 NOT NULL DEFAULT nextval('mercado_id_mercado_seq'::regclass)
)
;

-- ----------------------------
-- Records of mercado
-- ----------------------------
INSERT INTO "mercado" VALUES ('S', '19:09', '07:09', 'Test', 't', 2, 1, 1);
<<<<<<< HEAD
INSERT INTO "mercado" VALUES ('Centro', '09:00','18:00','es un mercado grandote que esta en el centro de oaxaca','t',3,2,2);
=======
>>>>>>> e8db34b (chore: db backup update)

-- ----------------------------
-- Table structure for palabra_clave
-- ----------------------------
DROP TABLE IF EXISTS "palabra_clave";
CREATE TABLE "palabra_clave" (
  "id_palabra_clave" int4 NOT NULL GENERATED ALWAYS AS IDENTITY (
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1
),
  "valor" varchar COLLATE "pg_catalog"."default" NOT NULL,
  "activo" bool NOT NULL DEFAULT true,
  "id_local" int4 NOT NULL
)
;

-- ----------------------------
-- Records of palabra_clave
-- ----------------------------
<<<<<<< HEAD
INSERT INTO palabra_clave ("valor","id_local")
VALUES 
('FRUTA', 1),
('PELUCHE', 2);
=======
>>>>>>> e8db34b (chore: db backup update)

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "archivo_id_archivo_seq"
OWNED BY "archivo"."id_archivo";
SELECT setval('"archivo_id_archivo_seq"', 17, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "direccion_id_direccion_seq"
OWNED BY "direccion"."id_direccion";
SELECT setval('"direccion_id_direccion_seq"', 1, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "giro_id_giro_seq"
OWNED BY "giro"."id_giro";
SELECT setval('"giro_id_giro_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "locacion_id_locacion_seq"
OWNED BY "locacion"."id_locacion";
SELECT setval('"locacion_id_locacion_seq"', 2, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "local_id_local_seq"
OWNED BY "local"."id_local";
SELECT setval('"local_id_local_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "mercado_id_mercado_seq"
OWNED BY "mercado"."id_mercado";
SELECT setval('"mercado_id_mercado_seq"', 1, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "palabra_clave_id_seq"
OWNED BY "palabra_clave"."id_palabra_clave";
SELECT setval('"palabra_clave_id_seq"', 1, false);

-- ----------------------------
-- Primary Key structure for table archivo
-- ----------------------------
ALTER TABLE "archivo" ADD CONSTRAINT "archivo_pkey" PRIMARY KEY ("id_archivo");

-- ----------------------------
-- Primary Key structure for table direccion
-- ----------------------------
ALTER TABLE "direccion" ADD CONSTRAINT "direccion_pkey" PRIMARY KEY ("id_direccion");

-- ----------------------------
-- Primary Key structure for table giro
-- ----------------------------
ALTER TABLE "giro" ADD CONSTRAINT "giro_pkey" PRIMARY KEY ("id_giro");

-- ----------------------------
-- Primary Key structure for table locacion
-- ----------------------------
ALTER TABLE "locacion" ADD CONSTRAINT "locacion_pkey" PRIMARY KEY ("id_locacion");

-- ----------------------------
-- Primary Key structure for table local
-- ----------------------------
ALTER TABLE "local" ADD CONSTRAINT "local_pkey" PRIMARY KEY ("id_local");

-- ----------------------------
-- Primary Key structure for table mercado
-- ----------------------------
ALTER TABLE "mercado" ADD CONSTRAINT "mercado_pkey" PRIMARY KEY ("id_mercado");

-- ----------------------------
-- Auto increment value for palabra_clave
-- ----------------------------
SELECT setval('"palabra_clave_id_seq"', 1, false);

-- ----------------------------
-- Primary Key structure for table palabra_clave
-- ----------------------------
ALTER TABLE "palabra_clave" ADD CONSTRAINT "palabra_clave_pkey" PRIMARY KEY ("id_palabra_clave");

-- ----------------------------
-- Foreign Keys structure for table locacion_archivo
-- ----------------------------
ALTER TABLE "locacion_archivo" ADD CONSTRAINT "fk_archivo" FOREIGN KEY ("id_archivo") REFERENCES "archivo" ("id_archivo") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "locacion_archivo" ADD CONSTRAINT "fk_locacion" FOREIGN KEY ("id_locacion") REFERENCES "locacion" ("id_locacion") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table local
-- ----------------------------
ALTER TABLE "local" ADD CONSTRAINT "fk_giro" FOREIGN KEY ("id_giro") REFERENCES "giro" ("id_giro") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "local" ADD CONSTRAINT "fk_locacion" FOREIGN KEY ("id_locacion") REFERENCES "locacion" ("id_locacion") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "local" ADD CONSTRAINT "fk_mercado" FOREIGN KEY ("id_mercado") REFERENCES "mercado" ("id_mercado") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table mercado
-- ----------------------------
ALTER TABLE "mercado" ADD CONSTRAINT "fk_id_direccion" FOREIGN KEY ("id_direccion") REFERENCES "direccion" ("id_direccion") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "mercado" ADD CONSTRAINT "fk_id_locacion" FOREIGN KEY ("id_locacion") REFERENCES "locacion" ("id_locacion") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table palabra_clave
-- ----------------------------
ALTER TABLE "palabra_clave" ADD CONSTRAINT "fk_local" FOREIGN KEY ("id_local") REFERENCES "local" ("id_local") ON DELETE CASCADE ON UPDATE CASCADE;
