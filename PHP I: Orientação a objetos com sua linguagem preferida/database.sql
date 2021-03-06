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

ALTER TABLE produtos ADD COLUMN usado BOOLEAN DEFAULT FALSE;

CREATE TABLE usuarios (
	id INTEGER AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(255),
	senha VARCHAR(255)
);

INSERT INTO usuarios (email, senha) VALUES ("nanahpavan@gmail.com","827ccb0eea8a706c4c34a16891f84e7b");

ALTER TABLE produtos ADD COLUMN isbn VARCHAR(255);

ALTER TABLE produtos ADD COLUMN tipo_produto VARCHAR(255);

ALTER TABLE produtos ADD COLUMN taxa_impressao VARCHAR(255);

ALTER TABLE produtos ADD COLUMN water_mark VARCHAR(255);