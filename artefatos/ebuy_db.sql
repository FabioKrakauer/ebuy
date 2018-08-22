-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ebuy_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ebuy_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ebuy_db` DEFAULT CHARACTER SET utf8 ;
USE `ebuy_db` ;

-- -----------------------------------------------------
-- Table `ebuy_db`.`Tab_Genero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebuy_db`.`Tab_Genero` (
  `idTab_Genero` INT NOT NULL AUTO_INCREMENT,
  `Gen_genero` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idTab_Genero`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ebuy_db`.`Tab_Foto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebuy_db`.`Tab_Foto` (
  `idTab_Foto` INT NOT NULL,
  `Fot_endereço` VARCHAR(45) NOT NULL,
  `Fot_imagem` DECIMAL NOT NULL,
  `Tab_Fotocol` VARCHAR(45) NULL,
  `Tab_Fotocol1` VARCHAR(45) NULL,
  PRIMARY KEY (`idTab_Foto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ebuy_db`.`Tab_Cadastro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebuy_db`.`Tab_Cadastro` (
  `idTab_Cadastro` INT NOT NULL AUTO_INCREMENT,
  `Cad_nome` VARCHAR(50) NOT NULL,
  `Cad_cpf` CHAR(11) NOT NULL,
  `Cad_email` VARCHAR(45) NOT NULL,
  `Cad_senha` VARCHAR(12) NOT NULL,
  `Cad_datanascimento` DATE NOT NULL,
  `Cad_telefone` INT(10) NOT NULL,
  `Tab_Genero_idTab_Genero` INT NOT NULL,
  `Tab_Foto_idTab_Foto` INT NOT NULL,
  PRIMARY KEY (`idTab_Cadastro`),
  INDEX `fk_Tab_Cadastro_Tab_Foto1_idx` (`Tab_Foto_idTab_Foto` ASC) VISIBLE,
  INDEX `fk_Tab_Cadastro_Tab_Genero_idx` (`Tab_Genero_idTab_Genero` ASC) VISIBLE,
  CONSTRAINT `fk_Tab_Cadastro_Tab_Genero`
    FOREIGN KEY (`Tab_Genero_idTab_Genero`)
    REFERENCES `ebuy_db`.`Tab_Genero` (`idTab_Genero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tab_Cadastro_Tab_Foto1`
    FOREIGN KEY (`Tab_Foto_idTab_Foto`)
    REFERENCES `ebuy_db`.`Tab_Foto` (`idTab_Foto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ebuy_db`.`Tab_Faq`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebuy_db`.`Tab_Faq` (
  `idTab_Faq` INT NOT NULL AUTO_INCREMENT,
  `Faq_pergunta` VARCHAR(100) NOT NULL,
  `Faq_resposta` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`idTab_Faq`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
