CREATE DATABASE IF NOT EXISTS crud_produtos;

USE crud_produtos;

CREATE TABLE IF NOT EXISTS categoria (
    codigo_ctg int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descricao_ctg varchar(50) NOT NULL UNIQUE
) ENGINE = InnoDB;

USE crud_produtos;

CREATE TABLE IF NOT EXISTS produto (
    codigo_prd INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descricao_prd VARCHAR(50) NOT NULL UNIQUE,
    data_cadastro date NOT NULL DEFAULT NOW(),
    preco decimal(10, 2) NOT NULL DEFAULT 0.00 CHECK (preco >= 0),
    ativo tinyint(1) NOT NULL DEFAULT 1,
    unidade varchar(5) DEFAULT "un",
    tipo_comissao enum('s', 'f', 'p') NOT NULL DEFAULT "s",
    codigo_ctg int NOT NULL,
    foto longblob,
    FOREIGN KEY (codigo_ctg) REFERENCES categoria(codigo_ctg)
) ENGINE = InnoDB;