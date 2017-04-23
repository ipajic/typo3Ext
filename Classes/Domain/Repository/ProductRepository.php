<?php
namespace Pajic\Inventory\Domain\Repository;

use \TYPO3\CMS\Extbase\Persistence\Repository;

class ProductRepository extends Repository {}

/*
Das Repository kümmert sich um die Verwaltung der Daten(auflisten, erzeugen, löschen usw..) 
Das Model beschreibt jeglich nur das Produkt
Der Name des Repositorys MUSS mit dem Namen des Models beginnen.(D.H in unserem Fall heißt das Model Product und das Repository muss mit "Product" anfangen und immer mit Repository enden, dazwischen darf nix stehen)
*/