

Create Database if not exists `OS`; 
Use OS; 

INSERT INTO `capteur` (`type_capteur`, `seuil`, `id_produit`) VALUES
( 'temp', 25, 5),
( 'cardiaque', 40, 5),
( 'lum', 25, 5),
( 'co2', 1000, 5),
( 'cardiaque', 80, 6),
( 'temp', 21, 6),
( 'co2', 1200, 7),
('lum', 5, 7),
( 'temp', 18, 8),
( 'cardiaque', 75, 8);


INSERT INTO `conseil` ( `conseil`) VALUES
( 'Dormez avant 22h'),
( 'Arretez votre téléphone au moins une heure avant de dormir'),
( 'Dormez dans une salle totalement noire'),
( 'Essayez de dormir 8 heures sans interruption');


INSERT INTO `consulter` (`id_conseil`) VALUES
(1),
(2),
(3),
(4);



INSERT INTO `contacter` (`id_utilisateur`, `message_interne`) VALUES
(1, 'Salut, je voudrais des informations sur votre produit'), -- fait par Pierre mais modifier par FrBtoinou
(2, 'Bonjour, je pourrai vous poser une question ?'),
(3, 'Bonsoir, je voudrais savoir si votre stock est épuisé ou si on peut commander'),
(4, 'Bonjour, est-il possible de prendre rdv avec vous ?');





INSERT INTO `donnee` ( `valeur`, `date_heure`, `id_capteur`) VALUES
( 30, '2022-01-01 11:10:15', 1),
( 65, '2022-11-12 12:29:20', 3),
( 1220, '2023-01-13 14:38:31', 5),
( 64, '2023-01-10 15:47:43', 3),
( 24, '2022-12-02 17:56:52', 1),
( 59, '2023-01-03 09:35:56', 3),
( 84, '2023-01-09 03:24:45', 3),
( 12, '2023-01-12 11:13:34', 4),
(45, '2022-09-30 19:02:23', 4),
( 1340, '2022-03-03 23:01:10', 5);




INSERT INTO `faq` ( `message`, `date_heure`, `id_utilisateur`, `question`) VALUES
('Comment ça marche', '2022-01-01 11:04:31', 1, 'Comment ça marche ?'),
('temps pour résultats', '2023-11-12 08:12:22', 2, 'Le temps pour des résultats ?'),
( 'Durée de livraison', '2022-03-07 13:23:41', 3, 'Attente pour la livraison ?'),
( 'Au sujet de la garantie', '2022-08-22 20:53:09', 4, 'Une garantie ?');





INSERT INTO `produit` ( `prix`, `quantite`, `régler`, `etat_commande`, `id_utilisateur`) VALUES
( '200.00', 2, 2, 'livré', 1),
( '100.00', 1, 1, 'en cours de livraison', 2),
( '1000.00', 10, 10, 'au dépot', 3),
( '400.00', 4, 4, 'prêt à livré', 4);




INSERT INTO `utilisateur` ( `type_utilisateur`, `pseudo`, `nom`, `prenom`, `email`, `date_naissance`, `sexe`, `age`, `mdp`, `adresse`, `photo_de_profil`, `id_produit`, `token`) VALUES
( 'utilisateur1', 'pierre10', 'Al Hallak', 'Pierre', 'pierreh@gmail.com', '2002-02-11', 'M', 20, 'mdp1', '10 rue sergent', 'photo1.jpg', 1, 'token1'),
( 'utilisateur2', 'Nico12', 'Spacowski', 'Nicolas', 'nico10@yahoo.fr', '2000-01-01', 'M', 23, 'mdp2', '13 rue du bac', 'photo1.jpg', 2, 'token1'),
( 'utilisateur3', 'Colo34', 'Ruello', 'Colin', 'colinr@gmail.com', '1998-12-21', 'M', 24, 'mdp3', '65 avenue du génerale de Gaulle', 'photo1.jpg', 3, 'token1'),
( 'utilisateur4', 'MH7', 'Hallak', 'Mathieu', 'mh7@gmail.com', '2003-03-04', 'M', 19, 'mdp4', '123 rue du lion', 'photo1.jpg', 4, 'token1');
COMMIT;
