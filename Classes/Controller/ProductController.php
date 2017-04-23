<?php
namespace Pajic\Inventory\Controller;

use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \Pajic\Inventory\Domain\Repository\ProductRepository;

class ProductController extends ActionController {

    public function listAction() {
        /*Der Controller kümmert sich um den Datenfluss. Deshalb brauchen wir das Productrepository um für diese Aktion alle Daten aus              dem Repository zu holen.*/
        $productRepository = $this->objectManager->get(ProductRepository::class);
        $products = $productRepository->findAll();
        
        $this->view->assign('products', $products);
    }
}