--
-- Structure de la table `facture`
--
CREATE TABLE IF NOT EXISTS `facture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` varchar(10) DEFAULT NULL,
  `numtva` varchar(20) NOT NULL,
  `client` text,
  `mailclient` varchar(20) NOT NULL,
  `datefacture` varchar(10) DEFAULT NULL,
  `facturede` text,
  `designation` text,
  `quantite` int(11) DEFAULT NULL,
  `prixht` decimal(10,0) DEFAULT NULL,
  `taxe` decimal(10,0) NOT NULL,
  `conditions` text,
  `id_membre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `num` (`num`),
  KEY `id_membre` (`id_membre`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) DEFAULT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
