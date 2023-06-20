Create Database if not exists `OS`; 
Use OS;


Create Table if not exists `utilisateur`(
`iduser` Integer Primary Key AUTO_INCREMENT,
`typeuser` Varchar (64) default "user",
`nomuser` varchar (64) Not Null,
`nom` varchar (64),
`prenom` varchar (64),
`adressemail` varchar (64),
`datenaissance` date,
`sexe` varchar (1),
`age` Integer,
`motdepasse` varchar(32),
`adresse` varchar (64),
`photodeprofil` varchar (256)
);

Create Table if not exists `produit`(
`idproduit` Integer Primary Key AUTO_INCREMENT,
`prix` decimal (6,2)
);

Create Table if not exists `capteur`(
`idcapteur` Integer Primary Key AUTO_INCREMENT,
`typecapteur` varchar (32),
`seuil` Integer ,
 `produit_capteur` Integer,
  FOREIGN KEY (`produit_capteur`) REFERENCES `produit`(`idproduit`)
);

Create Table if not exists `donnee`(
`iddonnee` Integer Primary Key AUTO_INCREMENT,
`valeur` Integer,
`dateheure` timestamp,
 `capteur_donnee` Integer,
  FOREIGN KEY (`capteur_donnee`) REFERENCES `capteur` (`idcapteur`)
);

Create Table if not exists `advices`(
`idadvices` Integer Primary Key AUTO_INCREMENT,
`advice` text
);

Create Table if not exists `faq`(
`idmessage` Integer Primary Key AUTO_INCREMENT,
`message` text,
`dateheure` timestamp,
 `utilisateur_faq` Integer,
  FOREIGN KEY (`utilisateur_faq`) REFERENCES `utilisateur`(`iduser`),
  `question` VARCHAR(32) NOT NULL
);

Create Table if not exists `consulter`(
 `utilisateur_consulter` Integer,
  FOREIGN KEY (`utilisateur_consulter`) REFERENCES `utilisateur`(`iduser`) ,
 `advice_consulter`  Integer,
  FOREIGN KEY (`advice_consulter`) REFERENCES `advices`(`idadvices`)
);

Create Table if not exists `commander`(
`numcommande` integer Primary key,
`quantite` integer,
`estpayer` boolean default False,
`etatcommande` text, 
 `utilisateur_commander` Integer,
  FOREIGN KEY (`utilisateur_commander`) REFERENCES `utilisateur`(`iduser`) ,
 `produit_commander` Integer,
  FOREIGN KEY (`produit_commander`) REFERENCES `produit`(`idproduit`)
);

Create Table if not exists `contacter`(
 `utilisateur_contacter` Integer,
  FOREIGN KEY (`utilisateur_contacter`) REFERENCES `utilisateur`(`iduser`) ,
`messageinterne` text
);