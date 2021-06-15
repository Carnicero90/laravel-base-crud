# CRUD #

--------------

Oggi create un nuovo progetto Laravel 7 e tramite gli appositi comandi artisan create un model con relativa migration e un resource controller.
Iniziate a definire le operazioni CRUD per gestire un archivio di fumetti (ignorate edit, update e destroy, li vediamo domani insieme).

## STEPS ##

--------------

1. compose, aka: 
    ```bash 
    #!/bin/bash
    version="7.0";

    if [ "$1" != "" ];
    then
        composer create-project --prefer-dist laravel/laravel:^${version} ${1}
    else 
	echo "manca arg!"
    fi
    ```
2. creazione db (**boolelli_editore_db**);
3. ```php artisan make:migration create_comics_table```
4. edit migration creata al punto 3, (in cartella *database/migrations*)  
campi da inserire:
* series
* title
* number
* description
* pages
* price
* release_date
* pic
### esempio: ###
| series | title | number | pages | price | description | release_date | pic |
| - | - | - | - | - | - | - | - |
| MARTIN MYSTÈRE | GOG E MAGOG | 371 | 160 | 6.30 | DUE MISTERIOSI ESSERI VIVENTI ANNUNCIANO L’ARRIVO DELL’APOCALISSE SU NEW YORK! | 09/10/2020 | - |
5. edit file .env (dimenticato precedentemente!)
6. migrazione & inserimento manuale di una row di test (p.s. ho dovuto fare mia prima rollback, avevo dimenticato un campo per l'immagine)
7. ```php artisan make:model Comic```
8. ```php artisan make:controller --resource ComicController```
9. edit di controller, view, etc
10. dump di test