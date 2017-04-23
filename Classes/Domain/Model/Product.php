<?php
/*
Diese Datei(=Klasse) beschreibt, wie das Produkt ausschaut. Es ist quasi eine Blaupause eines Produktes. Es hat z.B Eigenschaften drinnen.

$this -> Wenn ich ein Objekt erzeuge und in einer Variable abc speichere, dann kann ich von außen auf dieses Objekt zugreifen indem ich abc.blabla nutze. Innerhalb des Objektes selbst, mag ich auch auf abc zugreifen können. Aber man kommt nicht zur variable abc von der Klasse aus hin, aber $this referenziert auf sich selbst(also in diesem fall abc[Das Objekt dahinter]).

Wenn ein Objekt erzezgt wird, wird auf dem Heap (RAM) das Objekt erzeugt. Eine Variable speichert in echt garnicht den Wert des Objektes, sondern nur eine Referenz auf den Speicherplatz am Heap (also einen Pfeil auf die Speicherstelle im RAM). abc zeigt in unserem Beispiel eben auf z.B. Spciherstelle 15b (Random ausgewählte Addresse). $this zeigt ebenso auf Speicherstelle 15b.

ACHTUNG: Ausnahme Wertetypen (int, double, ... [simplte Datentypen/Strukturen]). Diese werden am Stack (ein anderer Speicher am RAM) gespeichert.

Tipp: http://www.lerneprogrammieren.com/blog/praxis/stack-und-heap

http://stackoverflow.com/questions/79923/what-and-where-are-the-stack-and-heap
*/
namespace Pajic\Inventory\Domain\Model;

/* Namespace sind Namesräume, indem sich der untere Code befindet. Dient zur Strukturierung des Codes. Muss für Extension dem Ordnernamen gleichen (also hier \[COMPANY]\[EXTENSION KEY]\Domain\Model)*/

use \TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
/* Wenn man von unserem Namensraum, der oben definiert wurde, auf eine Klasse in einem anderen Namensraum zugreifen will, dann muss man angeben, dass man diesen Namensraum nutzen will.

Reallife Bsp: Mitschüler sind in "Namensräumen" aufgeteilt, also Klassen, wie 5AX, 5CI, ...

Wenn wir jetzt mit dem Daniel reden wollen, dann sagen wir einfach "Hey Daniel, ich brauch was von dir."

Wenn wir jetzt aber mit dem Lukas aus der "5CI" reden wollen, können wir nicht einfach sagen: "Hey Lukas, ich will mit dir reden". Er ist nicht da. Deshalb sagen wir: Wir benötigen die "5CI" bzw. wir usesen den Namensraum "5CI" und dann können wir es sagen.*/

class Product extends AbstractEntity {
/*
Abstractentity vererbt von abstractDomainModel(indem PID UID Eigenschaft drinnen sind)

UID: Eindeutiger key aller Elemente (Page, Text, Bild), dass das Objekt identifiziert
PID: Zeigt auf die Page UID, indem sich das Objekt befindet
*/
    
/* Klassenkopf. extends heißt es vererbt alles vererbares von AbstractEntitiy. 

Real Life Bsp: Es gibt Autos und Flugzeuge. Beide erben die Eigenschaften von "Fahrzeugen". (Fahrzeuge haben (z.B.) eine max. Geschwindikeit, haben eine max. Last, ...)

Autos und Flugzeuge haben die gleichen Eigenschaften und Funktionen von Fahrzeugen. Jedoch erweitern sie Fahrzeuge*/
    
    
/**
 * @var string
 **/
protected $name = '';
/* PHP ist NICHT typstrikt. Also: Man muss nicht den Typ angeben (ab PHP 7 kann man es - NOT SURE). Jedoch werden die Produkte in eine Datenbank geschrieben. MySQL ist TYPSTRIKT. Es muss wissen welchen Typ es erwartet.

Wie kann man nun ein nicht typstrikte Variable in einer "typsierenten" Datenbank speichern. Indem man (mit @var string) den Datentyp in dem Kommentar angibt. Das braucht DataMapper um den ObjectStorage(=beinhaltet alle Objekte dieses Models) zu erzeugen. 

https://docs.typo3.org/typo3cms/ExtbaseFluidBook/3-BlogExample/7-Paths-on-the-Data-Map.html
*/
    
/**
 * @var string
 **/
protected $description = '';

    /*
    https://msdn.microsoft.com/de-de/library/ms173121.aspx
    */
/**
 * @var int
 **/
protected $quantity = 0;

/**
* @var \Pajic\Inventory\Domain\Model\Category
**/
protected $category = null;

/**
* @var \Pajic\Inventory\Domain\Model\Company
**/
protected $company=null;

public function __construct($name = '', $description = '', $quantity = 0,$category=null, $company=null) {
    $this->setName($name);
    $this->setDescription($description);
    $this->setQuantity($quantity);
    $this->setCompany($company);
    $this->setCategory($category);
}
    
    /* Konstruktoren sind "Methoden", die einmal, beim erzeugen des Obejktes, aufgerufen werden. Man kann sie später nicht erneut aufrufen.
    
    Sie dienen zur Initialisierung der Klasse (z.b. standardwerte zu setzen, sodass man immer auf die Daten zugreifen kann, ohne die Angst zu haben, dass Daten fehelen)*/

public function setName($name) {
    $this->name = (string)$name;
}

public function getName() {
    return $this->name;
}

    /* Getter und setter kümmern sich um den korrekten Zugriff auf die Daten der Klasse.
    
    Nehmen wir ein Bankonto. Es hat die Eigenschafft "Geld" in der steht, wieviel Geld am Bankkonto wäre.
    
    Würde man nun diese Eigenschafft public machne, so kann man (sei es mit absicht oder unabsichtlich ändern), diesen Wert ohne kontrolle ändern und damit theoretisch Geld aus dem nichts erschaffen oder zerstören.
    
    Getter und Setter sind dafür da um das zu verhindern. Bei unserem Beispiel würde der Setter dann drum kümmern, dass kein Geld küsntlich aus dem nichts erzeugt wird oder gelöscht wird, indem er div. Tabllen (z.b. Transaktionstabllen) überprüft.
    
    
    Getter und Setter sind auch für z.b. die Formatierung hilfreich. 
    
    Und zuletzt auch für den zugriffsschutz (getter public -> jeder kann die variable lesen von ausen, aber setter ist private -> nur die klasse selbst kann die variable ändern)
    
    https://de.wikipedia.org/wiki/Zugriffsfunktion*/
    
public function setDescription($description) {
    $this->description = (string)$description;
}

public function getDescription() {
    return $this->description;
}

public function setQuantity($quantity) {
    $this->quantity = (int)$quantity;
}

public function getQuantity() {
    return $this->quantity;
}


        public function getCategory()
        {
            return $this->category;
        }
        
        public function setCategory(\Pajic\Inventory\Domain\Model\Category $category)
        {
            $this->category = $category;
        }

        public function getCompany()
        {
            return $this->company;
        }
        public function setCompany(\Pajic\Inventory\Domain\Model\Company $company)
        {
            $this->company=$company;
        }
}