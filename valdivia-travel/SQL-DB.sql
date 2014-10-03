
DROP TABLE IF EXISTS `pyme`;
		
CREATE TABLE `pyme` (
  `id_pyme` SMALLINT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(50) NOT NULL,
  `telefono` VARCHAR(10) DEFAULT NULL,
  `horario` VARCHAR(10) NOT NULL,
  `direccion` VARCHAR(50) NOT NULL,
  `url` VARCHAR(20) DEFAULT NULL,
  `correo` VARCHAR(25) DEFAULT NULL,
  `id_tipo` SMALLINT NOT NULL,
  PRIMARY KEY (`id_pyme`)
);


DROP TABLE IF EXISTS `dueno_pyme`;
		
CREATE TABLE `dueno_pyme` (
  `id_dueno_pyme` SMALLINT AUTO_INCREMENT NOT NULL,
  `id_cliente_pyme` VARCHAR(25) NOT NULL,
  `id_pyme` SMALLINT NOT NULL,
  `id_user` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id_dueno_pyme`)
);


DROP TABLE IF EXISTS `cliente_turismo`;
		
CREATE TABLE `cliente_turismo` (
  `id_cliente_turismo` VARCHAR(50),
  `nombre` VARCHAR(15) NOT NULL,
  `passwd` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id_cliente_turismo`)
);


DROP TABLE IF EXISTS `lugares_visitados`;
		
CREATE TABLE `lugares_visitados` (
  `id_visita_lugar` INTEGER NOT NULL AUTO_INCREMENT,
  `id_lugar` SMALLINT NOT NULL,
  `id_cliente_turismo` VARCHAR(50) NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`id_visita_lugar`)
);

-- ---
-- Table 'pyme_visitada'
-- 
-- ---

DROP TABLE IF EXISTS `pyme_visitada`;
		
CREATE TABLE `pyme_visitada` (
  `id_pyme_visitada` INTEGER AUTO_INCREMENT,
  `id_cliente_turismo` VARCHAR(50) NOT NULL,
  `id_pyme` SMALLINT NOT NULL,
  `fecha` DATE NULL,
  PRIMARY KEY (`id_pyme_visitada`)
);


DROP TABLE IF EXISTS `lugar`;
		
CREATE TABLE `lugar` (
  `id_lugar` SMALLINT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(50) NOT NULL,
  `telefono` VARCHAR(10) DEFAULT NULL,
  `horario` VARCHAR(15) NOT NULL,
  `url` VARCHAR(50) DEFAULT NULL,
  `correo` VARCHAR(50) DEFAULT NULL,
  PRIMARY KEY (`id_lugar`)
);

-- ---
-- Table 'user'
-- 
-- ---

DROP TABLE IF EXISTS `user`;
		
CREATE TABLE `user` (
  `id_user` VARCHAR(25) NOT NULL,
  `nombre` VARCHAR(15) NOT NULL,
  `apellido_p` VARCHAR(15) NOT NULL,
  `apellido_m` VARCHAR(15) NOT NULL,
  `passwd` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id_user`)
);


DROP TABLE IF EXISTS `tipo_pyme`;
		
CREATE TABLE `tipo_pyme` (
  `id_tipo` SMALLINT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id_tipo`)
);

DROP TABLE IF EXISTS `cliente_pyme`;
		
CREATE TABLE `cliente_pyme` (
  `id_cliente_pyme` VARCHAR(25) NOT NULL,
  `nombre` VARCHAR(15) NOT NULL,
  `apellido_p` VARCHAR(15) NOT NULL,
  `apellido_m` VARCHAR(15) NOT NULL,
  `rut` VARCHAR(10) NOT NULL,
  `passwd` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id_cliente_pyme`)
);

-- ---
-- FOREIGN KEY
-- ---

ALTER TABLE `pyme` ADD FOREIGN KEY (id_tipo) REFERENCES `tipo_pyme` (`id_tipo`);
ALTER TABLE `dueno_pyme` ADD FOREIGN KEY (id_cliente_pyme) REFERENCES `cliente_pyme` (`id_cliente_pyme`);
ALTER TABLE `dueno_pyme` ADD FOREIGN KEY (id_pyme) REFERENCES `pyme` (`id_pyme`);
ALTER TABLE `dueno_pyme` ADD FOREIGN KEY (id_user) REFERENCES `user` (`id_user`);
ALTER TABLE `lugares_visitados` ADD FOREIGN KEY (id_lugar) REFERENCES `lugar` (`id_lugar`);
ALTER TABLE `lugares_visitados` ADD FOREIGN KEY (id_cliente_turismo) REFERENCES `cliente_turismo` (`id_cliente_turismo`);
ALTER TABLE `pyme_visitada` ADD FOREIGN KEY (id_cliente_turismo) REFERENCES `cliente_turismo` (`id_cliente_turismo`);
ALTER TABLE `pyme_visitada` ADD FOREIGN KEY (id_pyme) REFERENCES `pyme` (`id_pyme`);


-- ---
--	INSERT EN CADA UNA DE LAS TABLAS
-- ---

-- INSERT INTO `pyme` (`id_pyme`,`descripcion`,`telefono`,`horario`,`direccion`,`latitud`,`longitud`,`url`,`correo`,`id_tipo`) VALUES
-- ('','','','','','','','','','');
-- INSERT INTO `dueño_pyme` (`id_dueño_pyme`,`id_cliente_pyme`,`id_pyme`,`id_user`) VALUES
-- ('','','','');
-- INSERT INTO `cliente_turismo` (`id_cliente_turismo`,`nombre`,`passwd`) VALUES
-- ('','','');
-- INSERT INTO `lugares_visitados` (`id_visita_lugar`,`id_lugar`,`id_cliente_turismo`,`fecha`) VALUES
-- ('','','','');
-- INSERT INTO `pyme_visitada` (`id_pyme_visitada`,`id_cliente_turismo`,`id_pyme`,`fecha`) VALUES
-- ('','','','');
-- INSERT INTO `lugar` (`id_lugar`,`descripcion`,`direccion`,`telefono`,`horario`,`latitud`,`longitud`,`url`,`correo`) VALUES
-- ('','','','','','','','','');
-- INSERT INTO `user` (`id_user`,`nombre`,`apellido_p`,`apellido_m`,`passwd`) VALUES
-- ('','','','','');
-- INSERT INTO `tipo_pyme` (`id_tipo`,`descripcion`) VALUES
-- ('','');
-- INSERT INTO `cliente_pyme` (`id_cliente_pyme`,`nombre`,`apellido_p`,`apellido_m`,`rut`,`passwd`) VALUES
-- ('','','','','','');