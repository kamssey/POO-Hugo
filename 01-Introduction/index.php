<?php

include 'Article.class.php';

include 'Auteur.class.php';

include 'Categorie.class.php';

/**
* Création d'une instance de la Class "Article"
* Ici, notre variable $UnArticle est un Objet de la classe Article
* En ce sens, elle a accès à l'ensemble des propriétés et fonctions * * qui la composent.
*/

$Auteur = new Auteur('ABDALLAH', 'Kassim', 'matkamssey@gmail');

$UnArticle = new Article("La formation WF3", "Une formation Certifiante en 3 mois !", 
"Rejoignez-nous à Limas et vous verrez bien !", "wf3.jpg", "04/08/2017");

$UnArticle->setAuteur($Auteur);

// -- Afficher l'Objet Article
echo '<pre>';
print_r($UnArticle);
echo '</pre>';

$UnDeuxiemeArticle = new Article("L'heure de t'as mort", "Suis-je près à partir ?", 
"Fais le bilan de t'as vie !", "tavie.jpg", "04/08/2017");

$UnDeuxiemeArticle->setAuteur($Auteur);

// -- Afficher l'Objet Article
echo '<pre>';
print_r($UnDeuxiemeArticle);
echo '</pre>';

$UnTroisiemeArticle = new Article("Suis-je le gardien de ma Promotion", "Bonjour ?", 
"J'aimerais savoir !", "maPromotion.jpg", "04/08/2017");

$UnTroisiemeArticle->setAuteur($Auteur);

$UnQuatriemeArticle = new Article("Qui sommes nous", "Bonsoir ?", 
"J'aimerais savoir !", "nous.jpg", "04/08/2017");

$UnQuatriemeArticle->setAuteur($Auteur);

// -- Je veux afficher le titre de mon Premier Article
//echo $UnArticle->Titre;
# : Uncaught Error: Cannot access private property Article::$Titre

echo $UnArticle->getTitre(); 
echo ' - ';
echo $UnArticle->getAccroche(); 
echo ' - ';
echo '<br>';
echo $UnDeuxiemeArticle->getTitre();
echo ' - ';
echo $UnDeuxiemeArticle->getAccroche(); 
echo ' - ';

// -- Ici, je vais modifier le titre de mon article
echo '<br><br>';
$UnArticle->setTitre('La Formation WebForce3');
echo $UnArticle->getTitre();

echo '<pre>';
print_r($UnArticle);
echo '</pre>';

// -- Ici, l'Auteur
$UnAuteur = new Auteur("ABDALLAH", "Kassim", 
"matkamssey@gmail.com");

echo '<pre>';
print_r($UnAuteur);
echo '</pre>';

echo $UnAuteur->getNom(); 
echo ' - ';
echo $UnAuteur->getPrenom(); 
echo ' - ';
echo $UnAuteur->getEmail(); 
echo ' - ';
echo '<br>';

// -- Ici, je vais modifier le Nom de mon auteur
echo '<br><br>';
$UnAuteur->setPrenom('Kamssey');
echo $UnAuteur->getPrenom();

echo '<pre>';
print_r($UnAuteur);
echo '</pre>';

// -- Ici, la Catégorie
$UneCategorie = new Categorie("Libelle");

echo '<pre>';
print_r($UneCategorie);
echo '</pre>';

echo $UneCategorie->getLibelle(); 
echo ' - ';
echo '<br>';

// -- Ici, je vais modifier le Nom de ma catégorie
echo '<br><br>';
$UneCategorie->setLibelle('Libelle');
echo $UneCategorie->getLibelle();

echo '<pre>';
print_r($UneCategorie);
echo '</pre>';

echo '<hr>';

$UneCategorie = new Categorie('Formation Informatique');
$UneCategorie->AjouterUnArticle($UnArticle);
$UneCategorie->AjouterUnArticle($UnDeuxiemeArticle);
$UneCategorie->AjouterUnArticle($UnTroisiemeArticle);
$UneCategorie->AjouterUnArticle($UnQuatriemeArticle);
#$UneCategorie->AjouterUnArticle("Titre de mon Article");

echo '<pre>';
print_r($UneCategorie);
echo '</pre>';

echo '<hr>';

echo '<ol>';
    echo '<li>';
        echo $UneCategorie->getLibelle();
    echo '</li>';
    echo '<ul>';
        $articles = $UneCategorie->getCollectionArticles();
        foreach ($articles as $article) : 
            echo "<li>". $article->getTitre() ." - ";
                $article->getAuteur()->getNomComplet() ."</li>";
        endforeach;
    echo '</ul>';
echo '</li>';




