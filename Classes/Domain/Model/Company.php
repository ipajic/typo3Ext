<?php
    namespace Pajic\Inventory\Domain\Model;

    use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

    class Company extends AbstractEntity {
        /**
        * @var string
        **/
        protected $name = '';

        /**
        * @var string
        **/
        protected $country = '';

        public function __construct($name = '', $country = '') {
            $this->setName($name);
            $this->setCountry($country);
        }

        public function setName($name) {
            $this->name = (string)$name;
        }

        public function getName() {
            return $this->name;
        }

        public function setCountry($country) {
            $this->country = (string)$country;
        }

        public function getCountry(){
            return $this->country;
        }
    }