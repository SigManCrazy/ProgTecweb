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
(1, 'Tagliatella', 'TagliatellaNardini.jpg', 'Apprezzata per il gusto particolare, che e\' insieme dolce e amaro, e\' bevuta sia come aperitivo che come digestivo.  70 cl - 35% Vol. Fruttato, speziato ed armonico. Un liquore unico, dalle sfumature floreali e fini note speziate. Grappa, marasca, arancio ed erbe sono alla base della ricetta gelosamente custodita dalla famiglia Nardini. L\'equilibrio di sapori dolciamari stupisce anche i palati piu\' esigenti e conquista dal primo sorso.'),
(2, 'Classica Poli', 'BassanoClassicaPoli.jpg', 'Un omaggio a Bassano del Grappa, la capitale della Grappa. Profumata, secca e dolce nel retrogusto. Una grappa che racchiude tutte le sfumature del gusto della mandorla, che unita al distillato di marasca, crea un perfetto equilibrio per chi vuole scoprire il mondo dei distillati miscelati e avvicinarsi a questi sapori.'),
(3, 'Grappino', 'Grappino.jpg', 'Floreale, deciso ed intenso. Il carattere versatile lo rende capace di esaudire ogni desiderio. Un profumato digestivo, un aperitivo da preparare agli amici o, aggiungendo acqua, una dissetante bevanda. L’intensita\' dell\'anice vive in ognuna di queste preparazioni che ne esaltano le sfumature di gusto.'),
(4, 'Grappa', 'GrappaInutile.jpg', 'Intenso, balsamico e profumato. Nasce dall\'unione di semi di cumino dei prati, erbe e bacche di ginepro che impreziosiscono il gusto, donando intense note balsamiche. Un digestivo dall’aroma dolce ed asciutto, versatile nell’uso e perfetto da gustare miscelato.'),
(5, 'Grappa mandorlata', 'GrappaMandorlata.jpg', 'Profumata, secca e dolce nel retrogusto. Una grappa che racchiude tutte le sfumature del gusto della mandorla, che unita al distillato di marasca, crea un perfetto equilibrio per chi vuole scoprire il mondo dei distillati miscelati e avvicinarsi a questi sapori.'),
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
(2, 1, 3, 7, 'Non e\' piu\' quella di una volta, ma resta la mia grappa preferita. Restera\' sempre nel mio cuore alcolizzato'),
(3, 2, 2, 2, 'Non mi ha convinto, puzza un po\' di roba bruciata, secondo me l\'hanno affumicata male o non so'),
(4, 2, 1, 8, 'Modesta grappa per tutte le tasche, non si sbaglia mai. C\'e\' ad ogni pasto in tavola a casa nostra! Spesso sostituisce addirittura la cena'),
(5, 2, 2, 5, 'Non ho mai assaggiato una cosa cosi\' orribile.. alcool puro. Sapore inesistente, cambiate lavoro!!'),
(6, 3, 2, 9, 'Grandi soddisfazioni, profumo unico. L\'ho regalata a mia moglie per l\'anniversario e ha riacceso la passione'),
(7, 3, 3, 9, 'Ho assaggaito tante grappe nella mia vita. Mio nonno le faceva in casa. Questa non l\'ho mai assaggiata, ma volevo commentare XD');
(8, 3, 1, 6, 'Ottimo regalo di natale se non sapete cosa regalare! ');
(9, 3, 2, 6, 'La mia ragazza ne va matta, ogni volta che la compro me la molla subito ');
(10, 3, 1, 2, 'Non mi fidavo, infatti fa schifo');
(11, 3, 3, 9, 'Quello del commento precedente e\' una fighetta, questa grappa non e\' per deboli. ');
(12, 2, 1, 7, '46 euro spesi benissimo,Ho comprato i bicchieri da rum che ne esaltano le caratteristiche e gia\' solo ad odorarlo é un piacere'),
(13, 2, 3, 6, 'Accompagnato a del cioccolato fondente e ad una buona compagnia e\' perfetto'),
(14, 2, 2, 6, 'Ottimo Rum tra quelli più commerciali, non puo\' mancare in casa.'),
(15, 1, 2, 4, 'Rum acquisto per allestimento dell’angolo cubano del mio matrimonio che e\' stato ampiamente apprezzato'),
(16, 1, 3, 9, 'Ottimo rhum per ubriacarsi con gli amici, ha un sapore gradevolissimo e non costa tanto'),
(17, 1, 2, 7, 'Gli amanti del rum lo conoscono sicuramente. Io, personalmente, lo considero il miglior Rum commerciale'),
(18, 1, 1, 8, '23 anni di invecchiatura non sono male, il sapore e\' uno spettacolo'),
(19, 1, 2, 5, 'Il piu\' famoso, il piu commerciale, ma nonostante tutto, ottimo rum'),
(20, 1, 3, 7, 'Non potrei definire altrimenti questo rum se non una vera e propria ambrosia'),
(21, 1, 2, 6, 'Rum di eccellente livello, ma per il mio gusto personale non regge il confronto con il Matusalem'),
(22, 1, 1, 8, 'una garanzia! Ottimo da solo'),
(23, 1, 2, 1, 'Provato per la seconda volta lo Zacapa 23 di Amazon... Non so cosa ci sia che non va, ma questo non e\' nemneno un lontano parente dello stesso liquore comprato in enoteca'),