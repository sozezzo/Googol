# Googol


![image](https://user-images.githubusercontent.com/12115808/135704979-b6268798-b287-4250-a0ca-d120e5f44b21.png)


Ce script PHP sert d'intermédiaire entre l'utilisateur et google:
1. il transmet la requête vers google
2. il récupère la page de résultats
3. il parse la page pour isoler les données pertinentes et retirer les différents «espions» de google
4. il propose une page propre et sans traceurs, sans pub, sans scripts.
5. les miniatures sont récupérées temporairement sur le serveur ainsi aucun appel vers google n'est fait depuis le navigateur du client.



Googol était un simple script destiné à s'intercaler entre google et l'usager afin que ce dernier ne donne aucune information au géant du web:


![image](https://user-images.githubusercontent.com/12115808/135704846-a4ff7d32-c441-4d60-a5d9-89e8d4f4ee37.png)


En gros, l'usager envoie sa requête à googol, googol formule l'URL de requête vers Google, récupère les infos pertinentes sur la page de réponse, génère une page propre (sans aucun lien extérieur vers google, sans pub etc) et la restitue à l'usager.


Toutefois...

Google ne facilite pas la tâche: ses pages changent régulièrement (et il faut adapter le parseur) et il finit par bannir mon serveur googol quand trop de requêtes viennent de lui.

J'ai donc un temps opté pour la transmission de la requête vers DDG puis j'ai préféré modifier Googol en profondeur pour qu'il puisse changer son moteur en interne: j'ai donc créé une classe google.php et une startpage.php pour que googol puisse changer de lui-même le temps du débannissement.

![image](https://user-images.githubusercontent.com/12115808/135704855-559f8fc1-5c7a-4384-ad5b-fca98ccfda59.png)

![image](https://user-images.githubusercontent.com/12115808/135704865-44c030a7-3e10-4c64-8aac-913ff2e5a627.png)


Sources:

https://github.com/broncowdd/googol

http://www.warriordudimanche.net/article1282/work-in-progress-googol

(gros merci)
