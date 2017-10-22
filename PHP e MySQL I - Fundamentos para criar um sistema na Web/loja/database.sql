CREATE TABLE produtos (
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255),
	preco DECIMAL(10,2)
);

ALTER TABLE produtos ADD COLUMN descricao TEXT;
UPDATE produtos SET descricao = 'Descricao deste produto';

CREATE TABLE categorias (
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255)
);

INSERT INTO categorias (nome) VALUES ("esporte"), ("escolar"), ("autos");
INSERT INTO categorias (nome) VALUES ("guloseimas");

ALTER TABLE produtos ADD COLUMN categoria_id INTEGER;
UPDATE produtos SET categoria_id = 4;