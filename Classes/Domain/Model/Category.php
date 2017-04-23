<?php
    namespace Pajic\Inventory\Domain\Model;

    use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

    class Category extends AbstractEntity {
        /**
        * @var string
        **/
        protected $name = '';

        /**
        * @var string
        **/
        protected $description = '';

        public function __construct($name = '', $description = '') {
            $this->setName($name);
            $this->setDescription($description);
        }

        public function setName($name) {
            $this->name = (string)$name;
        }

        public function getName() {
            return $this->name;
        }

        public function setDescription($description) {
            $this->description = (string)$description;
        }

        public function getDescription(){
            return $this->description;
        }
    }