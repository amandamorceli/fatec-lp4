CREATE DATABASE projeto_bora;

CREATE TABLE cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nivel ENUM('adm', 'colab') NOT NULL
);

CREATE TABLE evento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    data DATE NOT NULL,
    hora TIME NOT NULL,
    local VARCHAR(255) NOT NULL,
    descricao TEXT
);

CREATE TABLE ingresso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    estoque INT NOT NULL,
    evento_id INT,
    FOREIGN KEY (evento_id) REFERENCES evento(id)
);

CREATE TABLE venda (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ingresso_id INT,
    quantidade INT NOT NULL,
    total DECIMAL(10, 2) NOT NULL,
    data_venda TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ingresso_id) REFERENCES ingresso(id)
);
