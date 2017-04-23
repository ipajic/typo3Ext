<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

/* https://docs.typo3.org/typo3cms/TCAReference/Columns/Index.html */

$TCA['tx_inventory_domain_model_product'] = array (
'ctrl' => array (
        'title' => 'Product',
        'label' => 'name',
),
'columns' => array(
        'name' => array(
                'label' => 'Name',
                'config' => array(
                        'type' => 'input',
                        'size' => '20',
                        'eval' => 'trim,required'
                )
        ),
        'description' => array(
                'label' => 'Description',
                'config' => array(
                        'type' => 'text',
                        'eval' => 'trim'
                )
        ),
        'quantity' => array(
                'label' => 'Quantity',
                'config' => array(
                        'type' => 'input',
                        'size' => '4',
                        'eval'=> 'int'
                )
        ),
        'category' => array(
	                        'label' => 'Category',
	                        'config' => array(
			                'type' => 'select',
                                        /* RenderType= Man kann sagen, wie select gerendert werden soll, also entweder 1 oder mehrere auswählbar*/
			                'renderType' => 'selectSingle',
                                         'foreign_table' => 'tx_inventory_domain_model_category',
                                           /*Foreign Table gibt an, aus welcher Liste es die einzelnen elemente nimmt, die im select angezeigt werden. In diesem Fall Category*/
			                'minitems' => 0,
			                'maxitems' => 1,
                                ),
                        ),

                        'company' => array(
	                        'label' => 'Company',
	                        'config' => array(
			                'type' => 'select',
                                        /* RenderType= Man kann sagen, wie select gerendert werden soll, also entweder 1 oder mehrere auswählbar*/
			                'renderType' => 'selectSingle',
                                         'foreign_table' => 'tx_inventory_domain_model_company',
                                           /*Foreign Table gibt an, aus welcher Liste es die einzelnen elemente nimmt, die im select angezeigt werden. In diesem Fall Category*/
			                'minitems' => 0,
			                'maxitems' => 1,
                                ),
                        ),
),
'types' => array(
        '0' => array('showitem' => 'name, description, quantity, category, company')
)
);

$TCA['tx_inventory_domain_model_category'] = array (
'ctrl' => array (
        'title' => 'Category',
        'label' => 'name',
),
'columns' => array(
        'name' => array(
                'label' => 'Name',
                'config' => array(
                        'type' => 'input',
                        'size' => '20',
                        'eval' => 'trim,required'
                )
        ),
        'description' => array(
                'label' => 'Description',
                'config' => array(
                        'type' => 'text',
                        'eval' => 'trim'
                )
        ),
),
'types' => array(
        '0' => array('showitem' => 'name, description')
)
);

$TCA['tx_inventory_domain_model_company'] = array (
'ctrl' => array (
        'title' => 'Company',
        'label' => 'name',
),
'columns' => array(
        'name' => array(
                'label' => 'Name',
                'config' => array(
                        'type' => 'input',
                        'size' => '20',
                        'eval' => 'trim,required'
                )
        ),
        'country' => array(
                'label' => 'Country',
                'config' => array(
                        'type' => 'input',
                        'size' => '20',
                        'eval' => 'trim'
                )
        ),
),
'types' => array(
        '0' => array('showitem' => 'name, country')
)
);



/*Hier werden alle plugins registiert, damit typo3 diese im backend anzeigen kann*/
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Pajic.' . $_EXTKEY, /*Der key (wie in localconf)*/
    'ListProducts', /*Der name des plugins (wie in localconf)*/
    'Show all products' /*Der Titel*/
);


        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
                'Pajic.' . $_EXTKEY,
                'ListCategories',
                'Show all categories'
        );

           \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
                'Pajic.' . $_EXTKEY,
                'ListCompanies',
                'Show all companies'
        );

          \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
                'Pajic.' . $_EXTKEY,
                'LocalCompanies',
                'Show local companies'
        );