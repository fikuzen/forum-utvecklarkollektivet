# Utvecklarkollektivets första projekt!

Mer info kommer.

Instruktioner för att installer cakePHP
=======================================
1. För det första måste du ha en fungerande webserver på din dator, tex xampp eller wamp
2. Ladda ner hela zip-filen.
3. Gå till mappen \app\Config, ta bort .sample på core-filen samt .default på database-filen
4. Öppna upp database.php och ändra host, login, password & database till dina inställningar
5. Nu är det bara att gå in och importera dump.sql i phpmyadmin


Kodstil VIKTIGT!
================
Vi använder CakePHP's kodstil. [Läs här](http://book.cakephp.org/2.0/en/contributing/cakephp-coding-conventions.html)

Inga tabbar - 4 mellanslag
--------------------------
Observera att CakePHP inte använder tab-tecken. Därför måste du ställa in din editor på att använda 4 mellanslag.

Ställ om tabbar i dreamweaver
-----------------------------
Gå till Edit > Preferences. Välj "Code Format" i menyn till vänster. Ställ in "Tab width" till "4" och välj "Spaces" i select-menyn.

Ställ om tabbar i vim
---------------------
Skriv
    :set expandtabs 
och 
    :set tabstop=4
Om du vill göra om alla befintliga tabbar till spaces, skriv
    :retab

