# Multipage Website in PhP

- **Client** : [Potage-Toit](http://www.potage-toit.be/)
- **Where ?** : At [Becode](https://github.com/becodeorg/)
- **When ?** :  30/07 - 07/08/2018
- **By who ?** : [Ludovic Hautecoeur](https://github.com/ludovichaute), [Marie Cambie](https://github.com/mcambie) 
- **The Website** : [HERE]
- **Project Board** : [HERE](https://github.com/MCambie/multipage-website-in-php/projects/1)

## Demande client : Un site multipage avec un formulaire de contact fonctionnel

"J'ai besoin de rafraîchir mon site internet. J'aurais besoin d'un site avec plusieurs pages pour bien séparer le contenu."

"J'aimerais bien que les visiteurs de mon site puissent m'envoyer un mail via un formulaire de contact avec une petite photo."

## Objectifs d'apprentissage

1. groupe : Agile (manipulation tableau kanban) + tenue quotidienne du planning du groupe
2. groupe : être le capitaine du repos, qui gère les merge et les conflits
3. groupe : rédaction d'un readme complet et professionnel
4. UX : branding
5. UX : contextual user entry errors display
6. UX : mentions GDPR pour informer l'utilisateur de l'utilité de fournir les données
7. frontend : sélection et mise en place d'un framework CSS
8. backend : UML charting des différents scripts
9. backend : upload d'image
10. backend : édition d'un fichier txt en PHP
11. backend : utilisation d'un serveur SMTP
12. backend : éviter les injections SQL
13. backend : afficher les erreurs à proximité des champs concernés
14. frontend/backend : utiliser le lighthouse test pour améliorer son site
15. frontend : Progressive Web App
16. backend : maitriser le déploiement sur Heroku

## Cahier des charges

Vous devez livrer un site multi-pages

* qui respecte le principe DRY : tout élément d'interface qui se répète sera isolé dans un fichier "partiel" inclus dans le fichier gérant la requête, grâce à la fonction php include()
* qui sépare le calcul de l'affichage (le PHP à sa place et le HTML à la sienne, on ne mélange pas tout).
* de minimum 3 pages, maximum 5 pages (choisissez bien et gérez bien le contenu : concision, clarté, pertinence par rapport aux publics-cible et aux objectifs du client)
* Une de ces pages contiendra un formulaire de contact (méthode POST) avec la possibilité pour l'internaute de choisir son genre, l'objet de son message et s'il souhaite recevoir une réponse sous format HTML ou txt. (Vois ci-dessous le mockup de formulaire, pour t'inspirer)
* obligation d'utiliser un .gitignore (pour ne pas publier vos informations de connexion gmail sur GitHub)
* formulaire d'upload en HTML sémantique
    * envoi d'une image via cette classe externe php upload
    * la fonction mail() de php étant trop basique, utilise une class externe pour mail
    * toujours pour l'envoi de l'email, utilise un serveur SMTP gratuit comme gmail (utilisez votre propre compte)
    * Sanitisation : éviter les injections SQL
    * Validation :
        * limiter l'upload uniquement aux formats d'images les plus courants (jpg, jpeg, png, gif)
        * obliger le minimum pour pouvoir répondre : email + message
    * à chaque envoi du formulaire :
        * bien respecter la séquence sanitiser > valider > exécuter > afficher (relire ceci)
        * loguer l'activité dans un fichier texte qui sera mis à jour à chaque fois.
        * envoi des données du formulaire dans vos boîtes mail.
    * Mentionner le prénom, le nom, l'adresse mail, la date et l'heure et le format de réponse demandé par l'utilisateur.
    * faire une page supplémentaire (/form-logs.php) qui affiche le contenu du log sans mentionner les noms de famille, ni les adresses mails.
    * Lorsque l'utilisateur fait des erreurs d'encodage, les messages d'erreur s'affichent à proximité du champs concerné et sont pertinents
* CSS Responsive sur base d'un framework CSS au choix.
* Score d'au moins 80/100 de chaque page au Lighthouse Test.


#### Layout
