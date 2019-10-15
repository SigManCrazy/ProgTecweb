DELETE FROM `tecweb`.`account`;
INSERT INTO `tecweb`.`account`
(`username`, `password`, `email`, `type`)

VALUES
('archimede.distillati@gmail.com', 'admin', 'admin', 0),
('pierino.birichino@gmail.com', 'user1', 'user1', 1);



DELETE FROM `tecweb`.`product`;
INSERT INTO `tecweb`.`product`
(`name`, `img_path`, `desc`)

VALUES
('Tagliatella', 'TagliatellaNardini.jpg', 'Apprezzata per il gusto particolare, che è insieme dolce e amaro, è bevuta sia come aperitivo che come digestivo. '),
('Classica Poli', 'BassanoClassicaPoli.jpg', 'Un omaggio a Bassano del Grappa, la capitale della Grappa, e al Poli Museo della Grappa che si trova di fronte al Ponte Vecchio, simbolo della città, progettato dall\' architetto Andrea Palladio nel \'500.');
