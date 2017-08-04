<?php

class Categorie {

    private $Libelle;
    private $CollectionArticles = [];

    public function __construct(
        $Libelle) {
        
            $this->Libelle = $Libelle;
        
    } 

    public function getLibelle() {
         return $this->Libelle;
         
     }
    
    public function getCollectionArticles() {
        return $this->CollectionArticles;
    }
    
    public function setLibelle ($MonNouveauLibelle) {
        $this->Libelle = $MonNouveauLibelle;
    }
    
    /**
     * Permet d'ajouter un Objet Article à notre tableau (collection) d'articles
     */
    public function AjouterUnArticle(Article $Article) {
        $this->CollectionArticles[] = $Article;
    }
    
}