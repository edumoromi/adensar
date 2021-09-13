CREATE TABLE  IF NOT EXISTS placa(
            ID_placa varchar(9) NOT NULL , 
            especie varchar(25)NOT NULL, 
            altura int NOT NULL,
			diametro int NOT NULL,
			tipo_de_folha varchar(25) NOT NULL,
			marge_de_folha varchar(25) NOT NULL,
			filotaxia varchar(25) NOT NULL,
			espinhos varchar(3) NOT NULL,
			altura_espinho int,
			diametro_espinho int,
			lat varchar(255) NOT NULL,
			longi varchar(255) NOT NULL,
            PRIMARY KEY (ID_placa));
			
CREATE TABLE IF NOT EXISTS tabela_imagens (
			codigo int(10) NOT NULL,
			ID_placa varchar(9) NOT NULL,
			evento varchar(50) NOT NULL,
			descricao varchar(255) NOT NULL,
			nome_imagem varchar(25) NOT NULL,
			tamanho_imagem varchar(25) NOT NULL,
			tipo_imagem varchar(25) NOT NULL,
			imagem longblob NOT NULL,
			PRIMARY KEY (codigo),
			FOREIGN KEY (ID_placa) REFERENCES placa(ID_placa));
			
CREATE TABLE IF NOT EXISTS usuario (
            IDusuario int(4) NOT NULL AUTO_INCREMENT,
			login varchar(50) NOT NULL,
			senha varchar(50) NOT NULL,
			nivel int NOT NULL,
			PRIMARY KEY(IDusuario));

CREATE TABLE IF NOT EXISTS markers (
  id int(11)  AUTO_INCREMENT,
  name varchar(60) NOT NULL,
  lat float(10,6) NOT NULL,
  lng float(10,6) NOT NULL,
  type varchar(30) NOT NULL,
  PRIMARY KEY (id));
