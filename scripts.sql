-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema scripts
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema scripts
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `scripts` DEFAULT CHARACTER SET utf8 ;
USE `scripts` ;

-- -----------------------------------------------------
-- Table `scripts`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scripts`.`Admin` (
  `idAdmin` INT NOT NULL,
  `NombreAdm` VARCHAR(45) NULL,
  `PasswordAdm` VARCHAR(45) NULL,
  PRIMARY KEY (`idAdmin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `scripts`.`Curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scripts`.`Curso` (
  `idCurso` INT NOT NULL,
  `ModalidadCurso` VARCHAR(45) NULL,
  `NombreCurso` VARCHAR(45) NULL,
  PRIMARY KEY (`idCurso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `scripts`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scripts`.`Usuario` (
  `idUsuario` INT NOT NULL,
  `Password` VARCHAR(45) NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `scripts`.`FormularioRegistro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scripts`.`FormularioRegistro` (
  `idRegistro` INT NOT NULL,
  `RutUSer` INT NULL,
  `NombreUser` VARCHAR(45) NULL,
  `Apellido_PaternoUser` VARCHAR(45) NULL,
  `Apellido_MaternoUser` VARCHAR(45) NULL,
  `PasswordUser` VARCHAR(45) NULL,
  `Usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idRegistro`, `Usuario_idUsuario`),
  INDEX `fk_FormularioRegistro_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_FormularioRegistro_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `scripts`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `scripts`.`Solicitud`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scripts`.`Solicitud` (
  `idSolicitud` INT NOT NULL,
  `FechaDeIngreso` VARCHAR(45) NULL,
  `Estado` VARCHAR(45) NULL,
  PRIMARY KEY (`idSolicitud`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `scripts`.`FormularioPostulacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `scripts`.`FormularioPostulacion` (
  `Rut` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `ApellidoPat` VARCHAR(45) NULL,
  `ApellidoMat` VARCHAR(45) NULL,
  `FechaNac` DATE NULL,
  `Sexo` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `Direccion` VARCHAR(45) NULL,
  `Comuna` VARCHAR(45) NULL,
  `Educacion` VARCHAR(45) NULL,
  `ExperienciaLab` VARCHAR(45) NULL,
  `AñosLab` INT NULL,
  `Admin_idAdmin` INT NOT NULL,
  `Curso_idCurso` INT NOT NULL,
  `FormularioRegistro_idRegistro` INT NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  `Usuario_FormularioRegistro_idRegistro` INT NOT NULL,
  `Solicitud_idSolicitud` INT NOT NULL,
  PRIMARY KEY (`Rut`, `Admin_idAdmin`, `Curso_idCurso`, `FormularioRegistro_idRegistro`, `Usuario_idUsuario`, `Usuario_FormularioRegistro_idRegistro`, `Solicitud_idSolicitud`),
  INDEX `fk_FormularioPostulacion_Admin1_idx` (`Admin_idAdmin` ASC),
  INDEX `fk_FormularioPostulacion_Curso1_idx` (`Curso_idCurso` ASC),
  INDEX `fk_FormularioPostulacion_FormularioRegistro1_idx` (`FormularioRegistro_idRegistro` ASC),
  INDEX `fk_FormularioPostulacion_Solicitud1_idx` (`Solicitud_idSolicitud` ASC),
  CONSTRAINT `fk_FormularioPostulacion_Admin1`
    FOREIGN KEY (`Admin_idAdmin`)
    REFERENCES `scripts`.`Admin` (`idAdmin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_FormularioPostulacion_Curso1`
    FOREIGN KEY (`Curso_idCurso`)
    REFERENCES `scripts`.`Curso` (`idCurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_FormularioPostulacion_FormularioRegistro1`
    FOREIGN KEY (`FormularioRegistro_idRegistro`)
    REFERENCES `scripts`.`FormularioRegistro` (`idRegistro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_FormularioPostulacion_Solicitud1`
    FOREIGN KEY (`Solicitud_idSolicitud`)
    REFERENCES `scripts`.`Solicitud` (`idSolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
