CREATE DATABASE club_pop;
USE club_pop;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR(14) NOT NULL,
    nome_completo VARCHAR(100) NOT NULL,
    fone VARCHAR(15),
    email VARCHAR(100) NOT NULL UNIQUE,
    cep VARCHAR(10),
    logradouro VARCHAR(100),
    numero VARCHAR(10),
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    estado VARCHAR(2),
    status ENUM('Desativado', 'Ativo') DEFAULT 'Desativado',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
