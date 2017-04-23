<?php
    namespace Pajic\Inventory\Controller;

    use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
    use \TYPO3\CMS\Core\Utility\GeneralUtility;
    use \Pajic\Inventory\Domain\Repository\CategoryRepository;

    class CategoryController extends ActionController {
        
        public function listAction() {
            $categoryRepository = $this->objectManager->get(CategoryRepository::class);
            $categories = $categoryRepository->findAll();
            
            $this->view->assign('categories', $categories);
        }
    }