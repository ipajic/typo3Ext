<?php
/*
Ist die Konfiguration der Extension. Bedeutet: Hier werden Metadaten reingeschrieben, wie zB der Titel, beschreibung, autoren usw.. siehe unten. Genau so aber auch, die ganzen Abhängigkeiten zu anderen Extensions oder Typo3 Versionen.(Siehe unten)
$_EXTKEY= Extension Key=Eindeutige Identifikation der Extension, die weltweit einzigartig ist.
*/

$EM_CONF[$_EXTKEY] = array(
'title' => 'Inventory',
'description' => 'An extension to manage a stock.',
'category' => 'plugin',
'author' => 'Ilija Pajic',
'author_company' => '',
'author_email' => '',
'dependencies' => 'extbase,fluid',
'state' => 'alpha',
'clearCacheOnLoad' => '1',
'version' => '1.0.0',
'constraints' => array(
    'depends' => array(
        'typo3' => '7.6.0-7.6.99',
        'extbase' => '1.0.0-0.0.0',
        'fluid' => '1.0.0-0.0.0',
        )
    )
);