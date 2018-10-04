-- MySQL Workbench Synchronization
-- Generated: 2018-10-03 21:29
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Ma

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

ALTER TABLE `mydb`.`Clientes` 
CHANGE COLUMN `idCliente` `idCliente` INT(11) NOT NULL AUTO_INCREMENT ,
CHANGE COLUMN `nome` `nome` VARCHAR(45) NULL DEFAULT NULL COMMENT 'Nomes proprios\n do cliente\n' ,
CHANGE COLUMN `sobrenome` `sobrenome` VARCHAR(45) NULL DEFAULT NULL COMMENT 'sobrenomes do cliente\n' ,
CHANGE COLUMN `sexo` `sexo` VARCHAR(1) NULL DEFAULT NULL COMMENT 'H = Homem\nM = Mulher\n' ;

ALTER TABLE `mydb`.`MeiosdePagto` 
CHANGE COLUMN `idMeiosdePagto` `idMeiosdePagto` INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `mydb`.`Enderecos` 
CHANGE COLUMN `idEnderecos` `idEnderecos` INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `mydb`.`Produtos` 
CHANGE COLUMN `idProdutos` `idProdutos` INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `mydb`.`Estoque` 
CHANGE COLUMN `idEstoque` `idEstoque` INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `mydb`.`Compras` 
CHANGE COLUMN `idCompras` `idCompras` INT(11) NOT NULL AUTO_INCREMENT ,
CHANGE COLUMN `precoTotalCompra` `precoTotalCompra` DECIMAL(2) NULL DEFAULT NULL ,
CHANGE COLUMN `impostosUnitCompra` `impostosUnitCompra` DECIMAL(2) NULL DEFAULT NULL ,
CHANGE COLUMN `impostosTotalCompra` `impostosTotalCompra` DECIMAL(2) NULL DEFAULT NULL ,
CHANGE COLUMN `custoUnit` `custoUnit` DECIMAL(2) NULL DEFAULT NULL ;

ALTER TABLE `mydb`.`Fornecedores` 
CHANGE COLUMN `idFornecedor` `idFornecedor` INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `mydb`.`Usuarios` 
CHANGE COLUMN `idUsuario` `idUsuario` INT(11) NOT NULL ;

ALTER TABLE `mydb`.`PrecoVenda` 
CHANGE COLUMN `idPrecoVenda` `idPrecoVenda` INT(11) NOT NULL AUTO_INCREMENT ,
CHANGE COLUMN `totalMarkup` `totalMarkup` DECIMAL(4) NULL DEFAULT NULL ,
CHANGE COLUMN `precoVenda` `precoVenda` DECIMAL(2) NULL DEFAULT NULL ,
CHANGE COLUMN `desconto` `desconto` DECIMAL(2) NULL DEFAULT NULL ;

ALTER TABLE `mydb`.`Movimento` 
CHANGE COLUMN `idMovimento` `idMovimento` INT(11) NULL DEFAULT NULL AUTO_INCREMENT ;

ALTER TABLE `mydb`.`TipoPagto` 
CHANGE COLUMN `idTipoPagto` `idTipoPagto` INT(11) NOT NULL ;

ALTER TABLE `mydb`.`TipoLogradouro` 
CHANGE COLUMN `idTipoLogradouro` `idTipoLogradouro` INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `mydb`.`TipoPessoa` 
CHANGE COLUMN `idTipoPessoa` `idTipoPessoa` INT(11) NOT NULL ;

ALTER TABLE `mydb`.`TipoMovimento` 
CHANGE COLUMN `idTipoMovimento` `idTipoMovimento` INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `mydb`.`Itens Pedido` 
CHANGE COLUMN `idItensPedido` `idItensPedido` INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `mydb`.`Pedidos` 
CHANGE COLUMN `idPedido` `idPedido` INT(11) NOT NULL AUTO_INCREMENT ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
