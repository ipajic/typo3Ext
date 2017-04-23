<?php
    namespace Pajic\Inventory\Controller;

    use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
    use \TYPO3\CMS\Core\Utility\GeneralUtility;
    use \Pajic\Inventory\Domain\Repository\CompanyRepository;

    class CompanyController extends ActionController {
        
        public function listAction() {
            $companyRepository = $this->objectManager->get(CompanyRepository::class);
            $companies = $companyRepository->findAll();
            
            $this->view->assign('companies', $companies);
        }

        public function localAction()
        { 
            $companyRepository = $this->objectManager->get(CompanyRepository::class);
            $companies = $companyRepository->findAll();

            $local = array();

            foreach($companies as $company){
                if($company.country == "Austria")
                    array_push($company);
            }
            
            $this->view->assign('companies', $local);
        }
    }