<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');
/* Hier werden alle plugins konfiguriert*/

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Pajic.' . $_EXTKEY, /* Der name des vendors/der firma plus der key - damit das plugin der extension zugewiesen werden kann*/
    'ListProducts', /*Der eideutige Name des plugins - heißt wie man will*/
    array('Product' => 'list') /* Der controller plus die aktion die ausgeführt werden kann*/
);

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Pajic.' . $_EXTKEY,
        'ListCategories',
        array('Category' => 'list')
    );

       \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Pajic.' . $_EXTKEY,
        'ListCompanies',
        array('Company' => 'list')
    );

     \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Pajic.' . $_EXTKEY,
        'LocalCompanies',
        array('Company' => 'local')
    );