CREATE SCHEMA si_ihm_exam;

CREATE  TABLE si_ihm_exam.depense_user ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	valeur               DOUBLE  NOT NULL     ,
	id_users             INT  NOT NULL     ,
	date_depense         DATE  NOT NULL     
 ) engine=InnoDB;

