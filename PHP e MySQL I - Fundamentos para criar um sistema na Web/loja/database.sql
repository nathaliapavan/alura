CREATE TABLE produtos (
	id INTEGER PRIMARY KEY AUTO INCREMENT,
	nome VARCHAR(255),
	preco DECIMAL(10,2)
);

ALTER TABLE produtos ADD COLUMN descricao TEXT;
UPDATE produtos SET descricao = 'Descricao deste produto';