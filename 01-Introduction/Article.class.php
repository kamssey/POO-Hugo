<?php

/*--
* Creation d'une Classe Article
* Une Classe est une entité regroupant des variables / propriété  
* et des fonctions.
*/

class Article {

    // -- Déclaration des propriétés de notre Classe "Article"
    private $Titre,
            $Accroche,
            $Description,
            $FeaturedImage,
            $DateCreationArticle,
            $Auteur;

    /**
  * Afin de pouvoir attribuer une valeur à mes différentes variables,
  * Je vais mettre en place un constructeur
  */
    public function __construct(
        $Titre,
        $Accroche,
        $Description,
        $FeaturedImage,
        $DateCreationArticle) {
        
        // -- Ici, nous allons attribuer à chaque propriété de notre classe,
        // -- la valeur qui a été passé au constructeur
        
        $this->Titre                = $Titre;
        $this->Accroche             = $Accroche;
        $this->Description          = $Description;
        $this->FeaturedImage        = $FeaturedImage;
        $this->DateCreationArticle  = $DateCreationArticle;
        
    } // Fin de mon Constructeur
    
    /**
     * Getters : Fonction qui vont avoir la charge de nous renvoyer nos information.
     * Nous aurrons une formation par propriété de notre Classe
     */

     public function getTitre() {
         return $this->Titre;
         
     }
    
     public function getAccroche() {
         return $this->Accroche;
         
     }
    
     public function getDescription() {
         return $this->Description;
         
     }
    
     public function getFeaturedImage() {
         return $this->FeaturedImage;
         
     }
    
     public function getDateCreationArticle() {
         return $this->DateCreationArticle;
     }
    
    /**
     * Setters : Fonction qui vont avoir la charge de modifier les *propriétées de notre classe.
     */
    
    public function setTitre ($MonNouveauTitre) {
        $this->Titre = $MonNouveauTitre;
    }
    
    public function setAuteur(Auteur $Auteur) {
        $this->Auteur = $Auteur;
    }
    
    public function getAuteur() {
        return $this->Auteur;
    }
    
} // Fin de ma Classe Article













