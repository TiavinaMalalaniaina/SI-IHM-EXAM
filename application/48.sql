CREATE SCHEMA si_ihm_exam;

CREATE  TABLE activite ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	poids                DOUBLE  NOT NULL     ,
	duree                INT  NOT NULL     
 ) engine=InnoDB;

CREATE  TABLE code ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	code                 VARCHAR(20)  NOT NULL     ,
	valeur               INT  NOT NULL     ,
	`status`             INT  NOT NULL DEFAULT 1    
 ) engine=InnoDB;

CREATE  TABLE day ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	libelle              VARCHAR(10)       
 ) engine=InnoDB;

CREATE  TABLE genre ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	libelle              VARCHAR(10)  NOT NULL     
 ) engine=InnoDB;

CREATE  TABLE regime ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nom                  VARCHAR(50)  NOT NULL     ,
	poids                DOUBLE  NOT NULL     ,
	duree                INT  NOT NULL DEFAULT 7    
 ) engine=InnoDB;

CREATE  TABLE regime_activite ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_regime            INT  NOT NULL     ,
	id_activite          INT  NOT NULL     ,
	CONSTRAINT fk_regime_activite_regime FOREIGN KEY ( id_regime ) REFERENCES regime( id ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_regime_activite_activite FOREIGN KEY ( id_activite ) REFERENCES activite( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) engine=InnoDB;

CREATE  TABLE type_activite ( 
	id                   INT  NOT NULL     PRIMARY KEY,
	libelle              VARCHAR(20)  NOT NULL     
 ) engine=InnoDB;

CREATE  TABLE type_nourriture ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	libelle              VARCHAR(20)  NOT NULL     
 ) engine=InnoDB;

CREATE  TABLE users ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	email                VARCHAR(100)  NOT NULL     ,
	mdp                  VARCHAR(16)  NOT NULL     ,
	nom                  VARCHAR(100)  NOT NULL DEFAULT ''    ,
	id_genre             INT  NOT NULL DEFAULT 1    ,
	CONSTRAINT fk_users_genre FOREIGN KEY ( id_genre ) REFERENCES genre( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

CREATE  TABLE argent_user ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	valeur               INT  NOT NULL     ,
	date_insertion       DATE  NOT NULL     ,
	id_user              INT  NOT NULL     ,
	CONSTRAINT fk_argent_user_users FOREIGN KEY ( id_user ) REFERENCES users( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) engine=InnoDB;

CREATE  TABLE depense_user ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	valeur               DOUBLE  NOT NULL     ,
	id_users             INT  NOT NULL     ,
	date_depense         DATE  NOT NULL     ,
	CONSTRAINT fk_depense_users FOREIGN KEY ( id_users ) REFERENCES users( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) engine=InnoDB;

CREATE  TABLE detail_activite ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_activite          INT  NOT NULL     ,
	id_type_activite     INT  NOT NULL     ,
	duree                TIME  NOT NULL     ,
	quantite             INT  NOT NULL     ,
	CONSTRAINT fk_detail_activite_activite FOREIGN KEY ( id_activite ) REFERENCES activite( id ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_detail_activite_type_activite FOREIGN KEY ( id_type_activite ) REFERENCES type_activite( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) engine=InnoDB;

CREATE  TABLE detail_regime ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_day               INT  NOT NULL     ,
	id_type_nourriture   INT  NOT NULL     ,
	quantite             INT  NOT NULL     ,
	id_regime            INT  NOT NULL     ,
	CONSTRAINT fk_detail_regime_type_nourriture FOREIGN KEY ( id_type_nourriture ) REFERENCES type_nourriture( id ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_detail_regime_day FOREIGN KEY ( id_day ) REFERENCES day( id ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_detail_regime_regime FOREIGN KEY ( id_regime ) REFERENCES regime( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) engine=InnoDB;

CREATE  TABLE detail_user ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	poids                DOUBLE  NOT NULL     ,
	date_detail          DATE  NOT NULL     ,
	id_users             INT  NOT NULL     ,
	CONSTRAINT fk_detail_user_users FOREIGN KEY ( id_users ) REFERENCES users( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) engine=InnoDB;

CREATE  TABLE nourriture ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_type_nourriture   INT  NOT NULL     ,
	nom                  VARCHAR(100)  NOT NULL     ,
	CONSTRAINT fk_nourriture_type_nourriture FOREIGN KEY ( id_type_nourriture ) REFERENCES type_nourriture( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) engine=InnoDB;

CREATE  TABLE regime_user ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_regime_activite   INT  NOT NULL     ,
	id_user              INT  NOT NULL     ,
	CONSTRAINT fk_regime_user_regime_activite FOREIGN KEY ( id_regime_activite ) REFERENCES regime_activite( id ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_regime_user_users FOREIGN KEY ( id_user ) REFERENCES users( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) engine=InnoDB;

CREATE  TABLE plat_user ( 
	id                   INT  NOT NULL     PRIMARY KEY,
	id_nourriture        INT  NOT NULL     ,
	quantite             INT  NOT NULL     ,
	id_regime_user       INT  NOT NULL     ,
	CONSTRAINT fk_plat_nourriture FOREIGN KEY ( id_nourriture ) REFERENCES nourriture( id ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_plat_user_regime_user FOREIGN KEY ( id_regime_user ) REFERENCES regime_user( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) engine=InnoDB;

INSERT INTO day( libelle ) VALUES ( 'matin');
INSERT INTO day( libelle ) VALUES ( 'midi');
INSERT INTO day( libelle ) VALUES ( 'soir');
INSERT INTO genre( libelle ) VALUES ( 'homme');
INSERT INTO genre( libelle ) VALUES ( 'femme');
INSERT INTO users( email, mdp, nom, id_genre, taille ) VALUES ( 'tiavina@gmail.com', 'tiavina', '', 1, 0.0);
INSERT INTO users( email, mdp, nom, id_genre, taille ) VALUES ( 'rotsy@gmail.com', 'rotsy', '', 1, 0.0);
