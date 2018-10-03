-- MySQL Workbench Synchronization
-- Generated: 2018-10-02 11:43
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Ma

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `mydb`.`Clientes` (
  `idCliente` INT(11) NOT NULL AUTO_INCREMENT,
  `idTipoPessoa` INT(11) NOT NULL COMMENT 'Indica PF ou PJ',
  `nome` VARCHAR(45) NOT NULL COMMENT 'Nomes proprios\n do cliente\n',
  `sobrenome` VARCHAR(45) NULL DEFAULT NULL COMMENT 'sobrenomes do cliente\n',
  `sexo` VARCHAR(1) NULL DEFAULT NULL COMMENT 'H = Homem\nM = Mulher\n',
  `email` VARCHAR(100) NOT NULL,
  `CPF/CNPJ` INT(14) NOT NULL,
  `Telefone1` INT(13) NULL DEFAULT NULL,
  `Celular` INT(13) NULL DEFAULT NULL,
  `Cliente_criado` DATETIME NULL DEFAULT NULL,
  `Cliente_modficado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE INDEX `idCliente_UNIQUE` (`idCliente` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  UNIQUE INDEX `CPF_UNIQUE` (`CPF/CNPJ` ASC) VISIBLE,
  INDEX `fk_Clientes_TipoPessoa1_idx` (`idTipoPessoa` ASC) VISIBLE,
  CONSTRAINT `fk_Clientes_TipoPessoa1`
    FOREIGN KEY (`idTipoPessoa`)
    REFERENCES `mydb`.`TipoPessoa` (`idTipoPessoa`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`MeiosdePagto` (
  `idMeiosdePagto` INT(11) NOT NULL AUTO_INCREMENT,
  `idCliente` INT(11) NULL DEFAULT NULL,
  `tipoPagto` INT(11) NOT NULL,
  PRIMARY KEY (`idMeiosdePagto`),
  UNIQUE INDEX `idMeiosdePagto_UNIQUE` (`idMeiosdePagto` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Enderecos` (
  `idEnderecos` INT(11) GENERATED ALWAYS AS () VIRTUAL,
  `idCliente` INT(11) NULL DEFAULT NULL,
  `idTipoLogradouro` INT(11) NOT NULL,
  `rua` VARCHAR(100) NULL DEFAULT NULL,
  `num` INT(6) NULL DEFAULT NULL,
  `complemento` VARCHAR(45) NULL DEFAULT NULL,
  `cep` INT(8) NOT NULL,
  `bairro` VARCHAR(45) NULL DEFAULT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `uf` VARCHAR(2) NOT NULL,
  `pais` VARCHAR(45) NOT NULL,
  `status` INT(11) NOT NULL,
  PRIMARY KEY (`idEnderecos`),
  UNIQUE INDEX `idEnderecos_UNIQUE` (`idEnderecos` ASC) VISIBLE,
  INDEX `fk_Enderecos_TipoLogradouro1_idx` (`idTipoLogradouro` ASC) VISIBLE,
  CONSTRAINT `fk_Enderecos_TipoLogradouro1`
    FOREIGN KEY (`idTipoLogradouro`)
    REFERENCES `mydb`.`TipoLogradouro` (`idTipoLogradouro`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Produtos` (
  `idProdutos` INT(11) NOT NULL,
  `sku` INT(11) NOT NULL,
  `nomeProduto` VARCHAR(45) NOT NULL,
  `descricaoProduto` VARCHAR(45) NULL DEFAULT NULL,
  `unidMedida` VARCHAR(45) NULL DEFAULT NULL,
  `img` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idProdutos`),
  UNIQUE INDEX `idProdutos_UNIQUE` (`idProdutos` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Estoque` (
  `idEstoque` INT(11) GENERATED ALWAYS AS () VIRTUAL,
  `idProdutos` INT(11) NOT NULL,
  `sku` INT(5) NULL DEFAULT NULL,
  `qtdeInicial` INT(11) ZEROFILL NULL DEFAULT NULL,
  `entrada` INT(11) ZEROFILL NULL DEFAULT NULL,
  `saida` INT(11) ZEROFILL NULL DEFAULT NULL,
  `qtdeFinal` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idEstoque`),
  UNIQUE INDEX `idEstoque_UNIQUE` (`idEstoque` ASC) VISIBLE,
  INDEX `fk_Estoque_Produtos1_idx` (`sku` ASC) VISIBLE,
  CONSTRAINT `fk_Estoque_Produtos1`
    FOREIGN KEY (`sku`)
    REFERENCES `mydb`.`Produtos` (`sku`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Compras` (
  `idCompras` INT(11) GENERATED ALWAYS AS () VIRTUAL,
  `idFornecedor` INT(11) NOT NULL,
  `sku` INT(11) NOT NULL,
  `skuFornecedor` INT(11) NULL DEFAULT NULL,
  `qtdeCompra` INT(11) NOT NULL,
  `precoUnitCompra` DECIMAL(10,2) NOT NULL,
  `precoTotalCompra` DECIMAL(2) NOT NULL,
  `impostosUnitCompra` DECIMAL(2) NULL DEFAULT NULL,
  `impostosTotalCompra` DECIMAL(2) NULL DEFAULT NULL,
  `custoUnit` DECIMAL(2) NULL DEFAULT NULL,
  PRIMARY KEY (`idCompras`),
  UNIQUE INDEX `idCompras_UNIQUE` (`idCompras` ASC) VISIBLE,
  INDEX `fk_Compras_Fornecedores1_idx` (`idFornecedor` ASC) VISIBLE,
  INDEX `fk_Compras_Produtos1_idx` (`sku` ASC) VISIBLE,
  CONSTRAINT `fk_Compras_Fornecedores1`
    FOREIGN KEY (`idFornecedor`)
    REFERENCES `mydb`.`Fornecedores` (`idFornecedor`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Compras_Produtos1`
    FOREIGN KEY (`sku`)
    REFERENCES `mydb`.`Produtos` (`sku`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Fornecedores` (
  `idFornecedor` INT(11) NOT NULL,
  `idTipoPessoa` INT(11) NOT NULL,
  `nomeFornecedor` VARCHAR(100) NOT NULL,
  `sobrenomeFornecedor` VARCHAR(100) NULL DEFAULT NULL,
  `emailFornecedor` VARCHAR(100) NOT NULL,
  `CPF/CNPJ` INT(14) NOT NULL,
  `telefone1` INT(13) NULL DEFAULT NULL,
  `celular` INT(13) NULL DEFAULT NULL,
  PRIMARY KEY (`idFornecedor`),
  UNIQUE INDEX `idFornecedor_UNIQUE` (`idFornecedor` ASC) VISIBLE,
  INDEX `fk_Fornecedores_TipoPessoa1_idx` (`idTipoPessoa` ASC) VISIBLE,
  CONSTRAINT `fk_Fornecedores_TipoPessoa1`
    FOREIGN KEY (`idTipoPessoa`)
    REFERENCES `mydb`.`TipoPessoa` (`idTipoPessoa`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Usuarios` (
  `idUsuario` INT(11) GENERATED ALWAYS AS () VIRTUAL,
  `nomeUsuario` VARCHAR(45) NULL DEFAULT NULL,
  `sobrenomeUsuario` VARCHAR(45) NULL DEFAULT NULL,
  `emailUsuario` VARCHAR(45) NULL DEFAULT NULL,
  `telefoneUsuario` INT(13) NULL DEFAULT NULL,
  `celularUsuario` INT(13) NULL DEFAULT NULL,
  `rgUsuario` VARCHAR(9) NOT NULL,
  `cpfUsuario` INT(11) NOT NULL,
  `carteiraTrabalho` VARCHAR(45) NOT NULL,
  `dataInicio` DATETIME NULL DEFAULT NULL,
  `dataFim` DATETIME NULL DEFAULT NULL,
  `statusUsuario` INT(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE INDEX `idUsuario_UNIQUE` (`idUsuario` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`PrecoVenda` (
  `idPrecoVenda` INT(10) GENERATED ALWAYS AS () VIRTUAL,
  `idProduto` INT(11) NOT NULL,
  `sku` INT(5) NULL DEFAULT NULL,
  `custo` INT(11) NOT NULL,
  `margem` DECIMAL(4) NOT NULL,
  `impostos` DECIMAL(2) NULL DEFAULT NULL,
  `totalMarkup` DECIMAL(4) NULL DEFAULT NULL,
  `precoVenda` DECIMAL(2) NULL DEFAULT NULL,
  `desconto` DECIMAL(2) NULL DEFAULT NULL,
  `Produtos_idProdutos` INT(11) NOT NULL,
  PRIMARY KEY (`idPrecoVenda`, `Produtos_idProdutos`),
  INDEX `fk_PrecoVenda_Produtos1_idx` (`Produtos_idProdutos` ASC) VISIBLE,
  CONSTRAINT `fk_PrecoVenda_Produtos1`
    FOREIGN KEY (`Produtos_idProdutos`)
    REFERENCES `mydb`.`Produtos` (`idProdutos`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Movimento` (
  `idMovimento` INT(11) GENERATED ALWAYS AS () VIRTUAL,
  `idProduto` INT(11) NOT NULL,
  `sku` INT(5) NULL DEFAULT NULL,
  `entrada` INT(11) NULL DEFAULT NULL,
  `saida` INT(11) NULL DEFAULT NULL,
  `idTipoMovimento` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idMovimento`),
  UNIQUE INDEX `idMovimento_UNIQUE` (`idMovimento` ASC) VISIBLE,
  INDEX `fk_Movimento_TipoMovimento1_idx` (`idTipoMovimento` ASC) VISIBLE,
  INDEX `fk_Movimento_Produtos1_idx` (`idProduto` ASC) VISIBLE,
  CONSTRAINT `fk_Movimento_TipoMovimento1`
    FOREIGN KEY (`idTipoMovimento`)
    REFERENCES `mydb`.`TipoMovimento` (`idTipoMovimento`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Movimento_Produtos1`
    FOREIGN KEY (`idProduto`)
    REFERENCES `mydb`.`Produtos` (`sku`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`TipoPagto` (
  `idTipoPagto` INT(11) GENERATED ALWAYS AS () VIRTUAL,
  `descricaoTipoPagto` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipoPagto`),
  UNIQUE INDEX `idTipoPagto_UNIQUE` (`idTipoPagto` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`TipoLogradouro` (
  `idTipoLogradouro` INT(11) GENERATED ALWAYS AS () VIRTUAL,
  `descricaoTipoLogradouro` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipoLogradouro`),
  UNIQUE INDEX `idTipoLogradouro_UNIQUE` (`idTipoLogradouro` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`TipoPessoa` (
  `idTipoPessoa` INT(11) GENERATED ALWAYS AS () VIRTUAL,
  `descricaoTipoPessoa` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipoPessoa`),
  UNIQUE INDEX `idTipoPessoa_UNIQUE` (`idTipoPessoa` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`TipoMovimento` (
  `idTipoMovimento` INT(11) GENERATED ALWAYS AS () VIRTUAL,
  `descricaoTipoMovimento` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipoMovimento`),
  UNIQUE INDEX `idTipoMovimento_UNIQUE` (`idTipoMovimento` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Itens Pedido` (
  `idItensPedido` INT(11) GENERATED ALWAYS AS () VIRTUAL,
  `idProduto` INT(11) NULL DEFAULT NULL,
  `sku` INT(11) NULL DEFAULT NULL,
  `qtde` INT(11) NULL DEFAULT NULL,
  `precoUnit` DECIMAL(10,2) NULL DEFAULT NULL,
  PRIMARY KEY (`idItensPedido`),
  UNIQUE INDEX `idItensPedido_UNIQUE` (`idItensPedido` ASC) VISIBLE,
  CONSTRAINT `fk_Itens Pedido_Pedidos1`
    FOREIGN KEY (`idItensPedido`)
    REFERENCES `mydb`.`Pedidos` (`idItensPedido`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Pedidos` (
  `idPedido` INT(11) GENERATED ALWAYS AS () VIRTUAL,
  `idCliente` INT(11) NULL DEFAULT NULL,
  `dataAbertura` DATETIME NULL DEFAULT NULL,
  `dataFechamento` DATETIME NULL DEFAULT NULL,
  `idTipoEndereco` INT(11) NULL DEFAULT NULL,
  `idItensPedido` INT(11) NULL DEFAULT NULL,
  `idTipoPagto` INT(11) NULL DEFAULT NULL,
  `idTipoFrete` INT(11) NULL DEFAULT NULL,
  `idCupom` INT(11) NULL DEFAULT NULL,
  `valorTotal` DECIMAL(10,2) NULL DEFAULT NULL,
  PRIMARY KEY (`idPedido`),
  UNIQUE INDEX `idPedido_UNIQUE` (`idPedido` ASC) VISIBLE,
  INDEX `fk_Pedidos_Clientes1_idx` (`idCliente` ASC) VISIBLE,
  INDEX `fk_Pedidos_TipoEndereco1_idx` (`idTipoEndereco` ASC) VISIBLE,
  INDEX `fk_Pedidos_Frete1_idx` (`idTipoFrete` ASC) VISIBLE,
  CONSTRAINT `fk_Pedidos_Clientes1`
    FOREIGN KEY (`idCliente`)
    REFERENCES `mydb`.`Clientes` (`idCliente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Pedidos_TipoEndereco1`
    FOREIGN KEY (`idTipoEndereco`)
    REFERENCES `mydb`.`TipoEndereco` (`idTipoEndereco`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Pedidos_Frete1`
    FOREIGN KEY (`idTipoFrete`)
    REFERENCES `mydb`.`Frete` (`idFrete`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Pagamentos` (
  `idPagamento` INT(11) NOT NULL AUTO_INCREMENT,
  `idPedido` INT(11) NULL DEFAULT NULL,
  `idCliente` INT(11) NULL DEFAULT NULL,
  `idTipoPagto` INT(11) NULL DEFAULT NULL,
  `valor` DECIMAL(10,2) NULL DEFAULT NULL,
  PRIMARY KEY (`idPagamento`),
  INDEX `fk_Pagamentos_TipoPagto1_idx` (`idTipoPagto` ASC) VISIBLE,
  CONSTRAINT `fk_Pagamentos_TipoPagto1`
    FOREIGN KEY (`idTipoPagto`)
    REFERENCES `mydb`.`TipoPagto` (`idTipoPagto`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`Frete` (
  `idFrete` INT(11) NOT NULL AUTO_INCREMENT,
  `tipoFrete` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idFrete`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `mydb`.`TipoEndereco` (
  `idTipoEndereco` INT(11) NOT NULL AUTO_INCREMENT,
  `descricaoTipoEndereco` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipoEndereco`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
