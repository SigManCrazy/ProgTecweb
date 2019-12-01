# Progetto di tecnologie web

## Il progetto
Si tratta di un sito di recensioni su una serie di grappe,
dove si possono navigare commenti e valutazioni di altri
utenti.

## Come abbiamo fatto
### Directory tree
* `/css`

  Vari fogli di stile, inclusi poi nell' xhtml definitivo

  * `/desktop`
  * `/mobile`

* `/db`

  L' sql per la creazione e la popolazione del database

* `/includes`

  Qui sta tutto il php (a parte il principale index.php)
  Il gestore delle view è `RenderFoward.php`, che utilizza
  `template.xhtml` come base per costruire le varie pagine,
  iniettando il contenuto dove e come le varie pagine
  specifichino.
  `Resources.php` e `Variables.php`

  * `/models`

  * `/pages`

    Le varie pagine che utilizzano il `RenderFoward` per
    iniettare i contenuti. Ogni pagina si occupa di
    utilizzare anche `Database.php` per ottenere il  contenuto.

* `/js`

  Il javascript.

* `/res`

  Per le immagini e altri eventuali multimediali

* `/views`

  Gli scheletri xhtml delle varie parti. `template.xhtml`
  è il default in cui vengono inseriti gli altri.

  * `/components`

    Componenti secondari quali header, footer, aside..

  * `/pages`

    Le varie pagine