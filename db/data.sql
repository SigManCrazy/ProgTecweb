# UTENTI
DELETE FROM `tecweb`.`account`;
INSERT INTO `tecweb`.`account`
(`ID`, `email`, `username`, `password`, `type`)
VALUES
(1, 'archimede.distillati@gmail.com', 'admin', 'admin', 0),
(2, 'pierino@gmail.com', 'user2', 'user2', 1),
(3, 'utente.utentino@gmail.com', 'user3', 'user3', 1);
-- type==0 -> admin
-- type==1 -> utente


# PRODOTTI
DELETE FROM `tecweb`.`product`;
INSERT INTO `tecweb`.`product`
(`ID`, `name`, `img_path`, `desc`)
VALUES
(1, 'Tagliatella', 'TagliatellaNardini.jpg', 'Apprezzata per il gusto particolare, che e\' insieme dolce e amaro, e\' bevuta sia come aperitivo che come digestivo.  70 cl - 35% Vol. Fruttato, speziato ed armonico. Un liquore unico, dalle sfumature floreali e fini note speziate. Grappa, marasca, arancio ed erbe sono alla base della ricetta gelosamente custodita dalla famiglia Nardini. L�equilibrio di sapori dolciamari stupisce anche i palati piu\' esigenti e conquista dal primo sorso.'),
(2, 'Classica Poli', 'BassanoClassicaPoli.jpg', 'Un omaggio a Bassano del Grappa, la capitale della Grappa. Profumata, secca e dolce nel retrogusto. Una grappa che racchiude tutte le sfumature del gusto della mandorla, che unita al distillato di marasca, crea un perfetto equilibrio per chi vuole scoprire il mondo dei distillati miscelati e avvicinarsi a questi sapori.'),
(3, 'Grappino', 'Grappino.jpg', 'Floreale, deciso ed intenso. Il carattere versatile lo rende capace di esaudire ogni desiderio. Un profumato digestivo, un aperitivo da preparare agli amici o, aggiungendo acqua, una dissetante bevanda. L�intensita\' dell�anice vive in ognuna di queste preparazioni che ne esaltano le sfumature di gusto.'),
(4, 'Grappa', 'GrappaInutile.jpg', 'Intenso, balsamico e profumato. Nasce dall�unione di semi di cumino dei prati, erbe e bacche di ginepro che impreziosiscono il gusto, donando intense note balsamiche. Un digestivo dall�aroma dolce ed asciutto, versatile nell�uso e perfetto da gustare miscelato.'),
(5, 'Grappa mandorlata', 'GrappaMandorlata.jpg', 'rofumata, secca e dolce nel retrogusto. Una grappa che racchiude tutte le sfumature del gusto della mandorla, che unita al distillato di marasca, crea un perfetto equilibrio per chi vuole scoprire il mondo dei distillati miscelati e avvicinarsi a questi sapori.'),
(6, 'Grappa6', 'GrappaInutile.jpg', ''),
(7, 'Grappa7', 'GrappaInutile.jpg', ''),
(8, 'Grappa8', 'GrappaInutile.jpg', ''),
(9, 'Grappa9', 'GrappaInutile.jpg', '');


# RECENSIONI
DELETE FROM `tecweb`.`comment`;
INSERT INTO `tecweb`.`comment`
(`ID`,`fk_product`, `fk_account`, `rating`, `text`)
VALUES
(1, 1, 1, 9, 'Grappa molto buona, mi e\' piaciuta tanto! Mi ha spaccato e non capivo piu\' cos\'era reale e cos\'era sbocco'),
(2, 1, 2, 2, 'Non mi ha convinto, puzza un po\' di roba bruciata, secondo me l\'hanno affumicata male o non so'),
(3, 1, 2, 9, 'Grandi soddisfazioni, profumo unico. L\'ho regalata a mia moglie per l\'anniversario e ha riacceso la passione'),
(4, 2, 3, 7, 'Non e\' piu\' quella di una volta, ma resta la mia grappa preferita. Rester� sempre nel mio cuore alcolizzato'),
(5, 2, 1, 8, 'Modesta grappa per tutte le tasche, non si sbaglia mai. C\'e\' ad ogni pasto in tavola a casa nostra! Spesso sostituisce addirittura la cena'),
(6, 2, 2, 5, 'Non ho mai assaggiato una cosa cosi\' orribile.. alcool puro. Sapore inesistente, cambiate lavoro!!'),
(7, 3, 3, 9, 'Ho assaggaito tante grappe nella mia vita. Mio nonno le faceva in casa. Questa non l\'ho mai assaggiata, ma volevo commentare XD');


