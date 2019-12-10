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
(1, 'Tagliatella', 'TagliatellaNardini.jpg', 'Apprezzata per il gusto particolare, che e\' insieme dolce e amaro, e\' bevuta sia come aperitivo che come digestivo.  70 cl - 35% Vol. Fruttato, speziato ed armonico. Un liquore unico, dalle sfumature floreali e fini note speziate. Grappa, marasca, arancio ed erbe sono alla base della ricetta gelosamente custodita dalla famiglia Nardini. L’equilibrio di sapori dolciamari stupisce anche i palati piu\' esigenti e conquista dal primo sorso.'),
(2, 'Classica Poli', 'BassanoClassicaPoli.jpg', 'Un omaggio a Bassano del Grappa, la capitale della Grappa. Profumata, secca e dolce nel retrogusto. Una grappa che racchiude tutte le sfumature del gusto della mandorla, che unita al distillato di marasca, crea un perfetto equilibrio per chi vuole scoprire il mondo dei distillati miscelati e avvicinarsi a questi sapori.'),
(3, 'Grappino', 'Grappino.jpg', 'Floreale, deciso ed intenso. Il carattere versatile lo rende capace di esaudire ogni desiderio. Un profumato digestivo, un aperitivo da preparare agli amici o, aggiungendo acqua, una dissetante bevanda. L’intensita\' dell’anice vive in ognuna di queste preparazioni che ne esaltano le sfumature di gusto.'),
(4, 'Grappa', 'GrappaInutile.jpg', 'Intenso, balsamico e profumato. Nasce dall’unione di semi di cumino dei prati, erbe e bacche di ginepro che impreziosiscono il gusto, donando intense note balsamiche. Un digestivo dall’aroma dolce ed asciutto, versatile nell’uso e perfetto da gustare miscelato.'),
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
(1, 1, 1, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 1, 2, 8, 'Phasellus egestas tellus rutrum tellus. Sed risus pretium quam vulputate dignissim suspendisse. Blandit turpis cursus in hac habitasse platea dictumst quisque sagittis. Hac habitasse platea dictumst quisque sagittis purus sit amet. Sapien et ligula ullamcorper malesuada proin. Pellentesque id nibh tortor id aliquet lectus proin. Dui id ornare arcu odio ut. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Ornare quam viverra orci sagittis eu. Nisl pretium fusce id velit ut tortor. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor. Diam maecenas sed enim ut sem viverra aliquet. Arcu ac tortor dignissim convallis aenean et tortor at risus. Commodo quis imperdiet massa tincidunt nunc. Arcu felis bibendum ut tristique et egestas quis ipsum suspendisse. Et odio pellentesque diam volutpat commodo sed egestas egestas. Non consectetur a erat nam. Nulla pharetra diam sit amet nisl suscipit adipiscing.'),
(3, 1, 2, 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 2, 3, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 2, 1, 8, 'AAAPhasellus egestas tellus rutrum tellus. Sed risus pretium quam vulputate dignissim suspendisse. Blandit turpis cursus in hac habitasse platea dictumst quisque sagittis. Hac habitasse platea dictumst quisque sagittis purus sit amet. Sapien et ligula ullamcorper malesuada proin. Pellentesque id nibh tortor id aliquet lectus proin. Dui id ornare arcu odio ut. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Ornare quam viverra orci sagittis eu. Nisl pretium fusce id velit ut tortor. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor. Diam maecenas sed enim ut sem viverra aliquet. Arcu ac tortor dignissim convallis aenean et tortor at risus. Commodo quis imperdiet massa tincidunt nunc. Arcu felis bibendum ut tristique et egestas quis ipsum suspendisse. Et odio pellentesque diam volutpat commodo sed egestas egestas. Non consectetur a erat nam. Nulla pharetra diam sit amet nisl suscipit adipiscing.'),
(6, 3, 3, 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(7, 2, 2, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');


