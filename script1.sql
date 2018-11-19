-- MySQL Workbench Synchronization
-- Generated: 2018-10-10 21:52
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Ma

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE TABLE IF NOT EXISTS `mydb`.`clientes` (
  `idCliente` INT(11) NOT NULL AUTO_INCREMENT,
  `idTipoPessoa` INT(11) NULL DEFAULT NULL,
  `nome` VARCHAR(45) NULL DEFAULT NULL COMMENT 'Nomes proprios\\n do cliente\\n',
  `sobrenome` VARCHAR(45) NULL DEFAULT NULL COMMENT 'sobrenomes do cliente\\n',
  `sexo` VARCHAR(1) NULL DEFAULT NULL COMMENT 'H = Homem\\nM = Mulher\\n',
  `email` VARCHAR(100) NULL DEFAULT NULL,
  `CPF_CNPJ` INT(14) NULL DEFAULT NULL,
  `telefone1` INT(13) NULL DEFAULT NULL,
  `Celular` INT(13) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  `password` VARCHAR(45) DEFAULT NULL,
  `admin` VARCHAR(1) DEFAULT NULL,
  
  PRIMARY KEY (`idCliente`),
  INDEX `fk_user_tipopessoa_idx` (`idTipoPessoa` ASC) ,
  CONSTRAINT `fk_cliente_tipopessoa`
    FOREIGN KEY (`idTipoPessoa`)
    REFERENCES `mydb`.`tipopessoa` (`idTipoPessoa`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`users` (
  `idUser` INT(11) NOT NULL AUTO_INCREMENT,
  `idTipoPessoa` INT(11) NULL DEFAULT NULL,
  `nome` VARCHAR(45) NULL DEFAULT NULL COMMENT 'Nomes proprios\\n do cliente\\n',
  `sobrenome` VARCHAR(45) NULL DEFAULT NULL COMMENT 'sobrenomes do cliente\\n',
  `sexo` VARCHAR(1) NULL DEFAULT NULL COMMENT 'H = Homem\\nM = Mulher\\n',
  `email` VARCHAR(100) NULL DEFAULT NULL,
  `CPF_CNPJ` INT(14) NULL DEFAULT NULL,
  `telefone1` INT(13) NULL DEFAULT NULL,
  `Celular` INT(13) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  `password` VARCHAR(45) DEFAULT NULL,
  `admin` VARCHAR(1) DEFAULT NULL,
  
  PRIMARY KEY (`idUser`),
  INDEX `fk_user_tipopessoa_idx` (`idTipoPessoa` ASC) ,
  CONSTRAINT `fk_user_tipopessoa`
    FOREIGN KEY (`idTipoPessoa`)
    REFERENCES `mydb`.`tipopessoa` (`idTipoPessoa`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`compras` (
  `idCompra` INT(11) NOT NULL,
  `idFornecedor` INT(11) NULL DEFAULT NULL,
  `idProduto` INT(11) NULL DEFAULT NULL,
  `skuFornecedor` INT(11) NULL DEFAULT NULL,
  `qtdeCompra` INT(11) NULL DEFAULT NULL,
  `precoUnitCompra` DECIMAL(10,2) NULL DEFAULT NULL,
  `precoTotalCompra` DECIMAL(2,0) NULL DEFAULT NULL,
  `impostosUnitCompra` DECIMAL(2,0) NULL DEFAULT NULL,
  `impostosTotalCompra` DECIMAL(2,0) NULL DEFAULT NULL,
  `custoUnit` DECIMAL(2,0) NULL DEFAULT NULL,
  `compra_criado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idCompra`),
  INDEX `fk_compras_fornecedores1_idx` (`idFornecedor` ASC) ,
  INDEX `fk_compras_produtos1_idx` (`idProduto` ASC) ,
  CONSTRAINT `fk_compras_fornecedores1`
    FOREIGN KEY (`idFornecedor`)
    REFERENCES `mydb`.`fornecedores` (`idFornecedor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_compras_produtos1`
    FOREIGN KEY (`idProduto`)
    REFERENCES `mydb`.`produtos` (`idProduto`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`enderecos` (
  `idEndereco` INT(11) NOT NULL,
  `idUser` INT(11) NULL DEFAULT NULL,
  `idTipoEndereco` INT(11) NULL DEFAULT NULL,
  `idTipoLogradouro` INT(11) NULL DEFAULT NULL,
  `rua` VARCHAR(100) NULL DEFAULT NULL,
  `num` INT(6) NULL DEFAULT NULL,
  `complemento` VARCHAR(45) NULL DEFAULT NULL,
  `cep` INT(8) NULL DEFAULT NULL,
  `bairro` VARCHAR(45) NULL DEFAULT NULL,
  `cidade` VARCHAR(45) NULL DEFAULT NULL,
  `uf` VARCHAR(2) NULL DEFAULT NULL,
  `pais` VARCHAR(45) NULL DEFAULT NULL,
  `status` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idEndereco`),
  INDEX `fk_enderecos_tipoendereco1_idx` (`idTipoEndereco` ASC) ,
  CONSTRAINT `fk_enderecos_tipoendereco1`
    FOREIGN KEY (`idTipoEndereco`)
    REFERENCES `mydb`.`tipoendereco` (`idTipoEndereco`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`estoque` (
  `idEstoque` INT(11) NOT NULL AUTO_INCREMENT,
  `idCompra` INT(11) NULL DEFAULT NULL,
  `idPedido` INT(11) NULL DEFAULT NULL,
  `idProduto` INT(11) NULL DEFAULT NULL,
  `qtdeInicial` INT(11) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  `entrada` INT(11) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  `saida` INT(11) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  `qtdeFinal` INT(11) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  `custoUnit` DECIMAL(10,2) NULL DEFAULT NULL,
  `custoTotal` DECIMAL(10,2) NULL DEFAULT NULL,
  PRIMARY KEY (`idEstoque`),
  INDEX `fk_estoque_compras1_idx` (`idCompra` ASC) ,
  INDEX `fk_estoque_pedidos1_idx` (`idPedido` ASC) ,
  INDEX `fk_estoque_produtos1_idx` (`idProduto` ASC) ,
  CONSTRAINT `fk_estoque_compras1`
    FOREIGN KEY (`idCompra`)
    REFERENCES `mydb`.`compras` (`idCompra`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_estoque_pedidos1`
    FOREIGN KEY (`idPedido`)
    REFERENCES `mydb`.`pedidos` (`idPedido`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_estoque_produtos1`
    FOREIGN KEY (`idProduto`)
    REFERENCES `mydb`.`produtos` (`idProduto`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`fornecedores` (
  `idFornecedor` INT(11) NOT NULL AUTO_INCREMENT,
  `idTipoPessoa` INT(11) NULL DEFAULT NULL,
  `nomeFornecedor` VARCHAR(100) NULL DEFAULT NULL,
  `sobrenomeFornecedor` VARCHAR(100) NULL DEFAULT NULL,
  `emailFornecedor` VARCHAR(100) NULL DEFAULT NULL,
  `CPF_CNPJ` INT(14) NULL DEFAULT NULL,
  `idTipoEndereco` INT(11) NULL DEFAULT NULL,
  `idEndereco` INT(11) NULL DEFAULT NULL,
  `telefone1` INT(13) NULL DEFAULT NULL,
  `celular` INT(13) NULL DEFAULT NULL,
  `fornecedor_criado` DATETIME NULL DEFAULT NULL,
  `fornecedor_modificado` DATETIME NULL DEFAULT NULL,
  `fornecedores_idFornecedor` INT(11) NOT NULL,
  `fornecedorescol` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idFornecedor`),
  INDEX `fk_fornecedores_tipopessoa1_idx` (`idTipoPessoa` ASC) ,
  INDEX `fk_fornecedores_fornecedores1_idx` (`fornecedores_idFornecedor` ASC) ,
  INDEX `fk_fornecedores_enderecos1_idx` (`idEndereco` ASC) ,
  INDEX `fk_fornecedores_tipoendereco1_idx` (`idTipoEndereco` ASC) ,
  CONSTRAINT `fk_fornecedores_tipopessoa1`
    FOREIGN KEY (`idTipoPessoa`)
    REFERENCES `mydb`.`tipopessoa` (`idTipoPessoa`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_fornecedores_fornecedores1`
    FOREIGN KEY (`fornecedores_idFornecedor`)
    REFERENCES `mydb`.`fornecedores` (`idFornecedor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_fornecedores_enderecos1`
    FOREIGN KEY (`idEndereco`)
    REFERENCES `mydb`.`enderecos` (`idEndereco`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_fornecedores_tipoendereco1`
    FOREIGN KEY (`idTipoEndereco`)
    REFERENCES `mydb`.`tipoendereco` (`idTipoEndereco`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`frete` (
  `idFrete` INT(11) NOT NULL,
  `tipoFrete` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idFrete`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`itens pedido` (
  `idItensPedido` INT(11) NOT NULL AUTO_INCREMENT,
  `idPedido` INT(11) NULL DEFAULT NULL,
  `idProduto` INT(11) NULL DEFAULT NULL,
  `qtde` INT(11) NULL DEFAULT NULL,
  `precoUnit` DECIMAL(10,2) NULL DEFAULT NULL,
  `itens pedido_criado` DATETIME NULL DEFAULT NULL,
  `itens pedido_modificado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idItensPedido`),
  INDEX `fk_itens pedido_pedidos1_idx` (`idPedido` ASC) ,
  INDEX `fk_itens pedido_produtos2_idx` (`idProduto` ASC) ,
  CONSTRAINT `fk_itens pedido_pedidos1`
    FOREIGN KEY (`idPedido`)
    REFERENCES `mydb`.`pedidos` (`idPedido`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_itens pedido_produtos2`
    FOREIGN KEY (`idProduto`)
    REFERENCES `mydb`.`produtos` (`idProduto`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`meiosdepagto` (
  `idMeiosdePagto` INT(11) NOT NULL AUTO_INCREMENT,
  `idUser` INT(11) NULL DEFAULT NULL,
  `tipoPagto` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idMeiosdePagto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`movimento` (
  `idMovimento` INT(11) NOT NULL AUTO_INCREMENT,
  `idTipoMovimento` INT(11) NULL DEFAULT NULL,
  `idProduto` INT(11) NULL DEFAULT NULL,
  `sku` INT(5) NULL DEFAULT NULL,
  `entrada` INT(11) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  `saida` INT(11) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  `movimento_criado` DATETIME NULL DEFAULT NULL,
  `movimento_modificado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idMovimento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`pagamentos` (
  `idPagamento` INT(11) NOT NULL AUTO_INCREMENT,
  `idPedido` INT(11) NULL DEFAULT NULL,
  `idUser` INT(11) NULL DEFAULT NULL,
  `idTipoPagto` INT(11) NULL DEFAULT NULL,
  `valor` DECIMAL(10,2) NULL DEFAULT NULL,
  PRIMARY KEY (`idPagamento`),
  INDEX `fk_pagamentos_pedidos1_idx` (`idPedido` ASC) ,
  CONSTRAINT `fk_pagamentos_pedidos1`
    FOREIGN KEY (`idPedido`)
    REFERENCES `mydb`.`pedidos` (`idPedido`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`pedidos` (
  `idPedido` INT(11) NOT NULL AUTO_INCREMENT,
  `dataAbertura` DATETIME NULL DEFAULT NULL,
  `dataFechamento` DATETIME NULL DEFAULT NULL,
  `idUser` INT(11) NULL DEFAULT NULL,
  `idTipoEndereco` INT(11) NULL DEFAULT NULL,
  `idItensPedido` INT(11) NULL DEFAULT NULL,
  `idTipoPagto` INT(11) NULL DEFAULT NULL,
  `idTipoFrete` INT(11) NULL DEFAULT NULL,
  `idCupom` INT(11) NULL DEFAULT NULL,
  `valorTotal` DECIMAL(10,2) NULL DEFAULT NULL,
  `pedido_criado` DATETIME NULL DEFAULT NULL,
  `pedido_modificado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idPedido`),
  INDEX `fk_pedidos_tipopagto1_idx` (`idTipoPagto` ASC) ,
  INDEX `fk_pedidos_user1_idx` (`idUser` ASC) ,
  CONSTRAINT `fk_pedidos_tipopagto1`
    FOREIGN KEY (`idTipoPagto`)
    REFERENCES `mydb`.`tipopagto` (`idTipoPagto`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_pedidos_user1`
    FOREIGN KEY (`idUser`)
    REFERENCES `mydb`.`users` (`idUser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`precovenda` (
  `idPrecoVenda` INT(11) NOT NULL AUTO_INCREMENT,
  `idProduto` INT(11) NULL DEFAULT NULL,
  `sku` INT(5) NULL DEFAULT NULL,
  `custo` INT(11) NULL DEFAULT NULL,
  `margem` DECIMAL(4,4) NULL DEFAULT NULL,
  `impostos` DECIMAL(3,2) NULL DEFAULT NULL,
  `totalMarkup` DECIMAL(4,0) NULL DEFAULT NULL,
  `precoVenda` DECIMAL(2,0) NULL DEFAULT NULL,
  `desconto` DECIMAL(2,0) NULL DEFAULT NULL,
  PRIMARY KEY (`idPrecoVenda`),
  INDEX `fk_precovenda_produtos1_idx` (`idProduto` ASC) ,
  CONSTRAINT `fk_precovenda_produtos1`
    FOREIGN KEY (`idProduto`)
    REFERENCES `mydb`.`produtos` (`idProduto`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`produtos` (
  `idProduto` INT(11) NOT NULL,
  `sku` INT(11) NULL DEFAULT NULL,
  `nomeProduto` VARCHAR(45) NULL DEFAULT NULL,
  `descricaoProduto` VARCHAR(45) NULL DEFAULT NULL,
  `unidMedida` VARCHAR(45) NULL DEFAULT NULL,
  `img` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idProduto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`tipoendereco` (
  `idTipoEndereco` INT(11) NOT NULL,
  `descricaoTipoEndereco` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipoEndereco`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`tipologradouro` (
  `idTipoLogradouro` INT(11) NOT NULL AUTO_INCREMENT,
  `descricaoTipoLogradouro` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipoLogradouro`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`tipomovimento` (
  `idTipoMovimento` INT(11) NOT NULL AUTO_INCREMENT,
  `descricaoTipoMovimento` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipoMovimento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`tipopagto` (
  `idTipoPagto` INT(11) NOT NULL,
  `descricaoTipoPagto` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipoPagto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`tipopessoa` (
  `idTipoPessoa` INT(11) NOT NULL,
  `descricaoTipoPessoa` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipoPessoa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
