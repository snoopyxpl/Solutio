Create Database if not exists `OS`; 
Use OS;

Create Table if not exists `utilisateur`(
    `id_utilisateur` Integer Primary Key AUTO_INCREMENT,
    `type_utilisateur` Varchar (64) default "utilisateur",
    `pseudo` varchar (64) Not Null,
    `nom` varchar (64),
    `prenom` varchar (64),
    `email` varchar (64),
    `date_naissance` date,
    `sexe` varchar (1),
    `age` Integer,
    `mdp` varchar(32),
    `adresse` varchar(64),
    `photo_de_profil` varchar(256),
    `id_produit` Integer,
    `token` varchar(32)
  );

Create Table if not exists `produit`(
`id_produit` Integer Primary Key AUTO_INCREMENT,
`prix` decimal (6,2),
`quantite` integer,
`régler` boolean default False,
`etat_commande` text, 
 `id_utilisateur` Integer,
  FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur`(`id_utilisateur`)
);

Create Table if not exists `capteur`(
`id_capteur` Integer Primary Key AUTO_INCREMENT,
`type_capteur` varchar (32),
`seuil` Integer,
 `id_produit` Integer,
  FOREIGN KEY (`id_produit`) REFERENCES `produit`(`id_produit`)
);

Create Table if not exists `donnee`(
`id_donnee` Integer Primary Key AUTO_INCREMENT,
`valeur` Integer,
`date_heure` timestamp,
 `id_capteur` Integer,
  FOREIGN KEY (`id_capteur`) REFERENCES `capteur` (`id_capteur`) -- modifier mettre not null dans cette ligne à voir car il y a des cas chiant exemple suppresssion d'un capteur
);

Create Table if not exists `conseil`(
`id_conseil` Integer Primary Key AUTO_INCREMENT,
`conseil` text
);

Create Table if not exists `faq`(
`id_message` Integer Primary Key AUTO_INCREMENT,
`message` text,
`date_heure` timestamp,
 `id_utilisateur` Integer,
  FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur`(`id_utilisateur`),
  `question` VARCHAR(32) NOT NULL
);

Create Table if not exists `consulter`(
 `id_utilisateur` Integer,
  FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur`(`id_utilisateur`),
 `id_conseil`  Integer,
  FOREIGN KEY (`id_conseil`) REFERENCES `conseil`(`id_conseil`)
);


Create Table if not exists `contacter`(
 `id_utilisateur` Integer,
  FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur`(`id_utilisateur`),
`message_interne` text
);