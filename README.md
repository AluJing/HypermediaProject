# HypermediaProject - TIM website

Politecnico di Milano AA.2015-2016 


Autori: Davide Gallinella - Qi Jing - Fabio Meraviglia

-------------------------------------------

Template usato:


Template Name: Intensely


Author: MarkUps


Author URI: http://www.markups.io/

--------------------------------------------

Frameworks usato:


Bootstrap framework: http://getbootstrap.com/

--------------------------------------------

Altre informazioni:


- La pagina "Offerta" e la pagina "Prodotti->Outlet" contengono i dispositivi memorizzati sul database con l'attributo "Offerta" = 1. L'attributo "Offerta" dell'entità Device indica quindi se un dispositivo sia scontato o no.


- Per il collegamento tra "Device" e "Assistance" abbiamo solamente i dispositivi 'LG G4' e 'Samsung Galaxy S6' che sono collegati con il servizio 'SOSsmartphone' di Assistenza (e viceversa).


- Per il collegamento tra "SL" e "Device" c'è soltanto la pagina Salute e Benessere che presenta il dispostivo Samsung Gear S con il relativo link per la pagina con i dettagli di questo item. Viceversa, dalla pagina di specifiche di Samsung Gear S è possibile andare alla pagina Salute e Benessere di SmartLife


- Per il single topic "WHO WE ARE" abbiamo optato di fare tutto in modo statico dovuto alla mancanza di tempo.


- Abbiamo creato le pagine php in modo che non siano vulnerabili al SQL injection


