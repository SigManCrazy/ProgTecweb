# UTENTI
DELETE FROM `tecweb`.`account`;
INSERT INTO `tecweb`.`account`
(`ID`, `username`, `password`, `email`, `type`)

VALUES
(1, 'archimede.distillati@gmail.com', 'admin', 'admin', 0),
(2, 'pierino.birichino@gmail.com', 'user1', 'user1', 1);


# PRODOTTI
DELETE FROM `tecweb`.`product`;
INSERT INTO `tecweb`.`product`
(`ID`, `name`, `img_path`, `desc`)
VALUES
(1, 'Tagliatella', 'TagliatellaNardini.jpg', 'Apprezzata per il gusto particolare, che � insieme dolce e amaro, � bevuta sia come aperitivo che come digestivo. '),
(2, 'Classica Poli', 'BassanoClassicaPoli.jpg', 'Un omaggio a Bassano del Grappa, la capitale della Grappa, e al Poli Museo della Grappa che si trova di fronte al Ponte Vecchio, simbolo della citt�, progettato dall\' architetto Andrea Palladio nel \'500.');


# RECENSIONI
DELETE FROM `tecweb`.`post`;
INSERT INTO `tecweb`.`post`
(`ID`,`fk_product`, `rating`, `text`)
VALUES
(1, 1, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 1, 8, 'Phasellus egestas tellus rutrum tellus. Sed risus pretium quam vulputate dignissim suspendisse. Blandit turpis cursus in hac habitasse platea dictumst quisque sagittis. Hac habitasse platea dictumst quisque sagittis purus sit amet. Sapien et ligula ullamcorper malesuada proin. Pellentesque id nibh tortor id aliquet lectus proin. Dui id ornare arcu odio ut. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Ornare quam viverra orci sagittis eu. Nisl pretium fusce id velit ut tortor. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor. Diam maecenas sed enim ut sem viverra aliquet. Arcu ac tortor dignissim convallis aenean et tortor at risus. Commodo quis imperdiet massa tincidunt nunc. Arcu felis bibendum ut tristique et egestas quis ipsum suspendisse. Et odio pellentesque diam volutpat commodo sed egestas egestas. Non consectetur a erat nam. Nulla pharetra diam sit amet nisl suscipit adipiscing.');


# COMMENTI
DELETE FROM `tecweb`.`comment`;
INSERT INTO `tecweb`.`comment`
(`ID`, `fk_post`, `fk_account`, `text`)
VALUES
(1, 1, 1, 'Commento numero uno, fatto da un admin'),
(2, 1, 2, 'Commento numero due, fatto da un utente non admin');



