# DC Comics with Laravel

#### CONSEGNA DELL'ESERCIZIO 

```
Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.

- Create un nuovo progetto Laravel
- tramite phpMyAdmin create un nuovo database laravel_model_controller
- Importate nel vostro database la tabella movies in allegato
- Inserite le vostre credenziali per il database nel file .env
- Create un model Movie -> php artisan make:model Movie
- Create un controller che gestirà la rotta / -> php artisan make:controller Guest/PageController
- All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

BONUS:
- Stilare il layout nei dettagli con Sass
```

#### SVOLGIMENTO

Per la prima volta approcciamo i Controllers e i Models. Tramite la creazione di questi ultimi andiamo quindi a gestire le nostre Routes non più con delle funzioni anonime,
ma bensì dei controller appunto, tramite i quali possiamo manipolare e filtrare i dati attraverso dei metodi dei modelli. In questo modo abbiamo creato un ponte tra
il nostro database MySQL in questo caso, e il nostro applicativo Laravel.