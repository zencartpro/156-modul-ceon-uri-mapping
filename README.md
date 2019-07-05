# 156-modul-ceon-uri-mapping
CEON Uri Mapping für Zen Cart 1.5.6 deutsch

Dieses Modul erlaubt das benutzerdefinierte Umschreiben der URLs in Zen Cart.
Anders als bei anderen Modulen dieser Art, erfolgt das Umschreiben nicht automatisch, sondern es kann jede URL per Admin eigens definiert werden, was eine völlige Kontrolle über die vom Shop verwendeten URLs ermöglicht.

Version 5.0.0 ist ausschließlich für Zen Cart 1.5.6 deutsch geeignet

Changelog 5.0.0
* Juli 2019
* Komplette Überarbeitung des Moduls durch das CEON Team für Kompatibilität mit 1.5.6 und PHP 7.3
* Fast keine Änderung von Corefiles mehr nötig
* Anpassungen für Zne Cart 1.5.6 deutsch
* Nicht funktionierenden Update Check entfernt
* Anleitung aktualisiert

Hinweis:
Das Modul ist nicht übersetzt, alle Texte in der Administration sind englisch.
Auch die extrem umfangreiche Doku, die beiliegt ist englisch.

Beispiel für die URL einer Artikeldetailseite:

Original Link:
http://www.meinshop.de/index.php?main_page=product_info&cPath=1_4&products_id=1

Umgeschriebener Link:
http://www.meinshop.de/hardware/grafikkarten/matrox-g200-mms

WICHTIG:
Die URLs werden nicht automatisch umgeschrieben. 

Wenn der Shop bereits Kategorien enthält, dann müssen Sie bei JEDER Kategorie in die Bearbeitung gehen und unten bei URI Mapping eine gewünschte URL vergeben.
Oder einfach das automatische Vergeben einer URL angekreuzt lassen (Tick this box to have the URIs auto-generated for this category).

Wenn der Shop bereits Artikel enthält, dann müssen Sie bei JEDEM Artikel in die Bearbeitung gehen und unten bei URI Mapping eine gewünschte URL vergeben.
Oder einfach das automatische Vergeben einer URL angekreuzt lassen (Tick this box to have the URIs auto-generated for this product).

Wenn der Shop bereits EZ Pages enthält, dann müssen Sie bei JEDER EZ Page in die Bearbeitung gehen und unten bei URI Mapping eine gewünschte URL vergeben.
Oder einfach das automatische Vergeben einer URL angekreuzt lassen (Tick this box to have the URIs auto-generated for this EZ-Page).

Wenn der Shop bereits Hersteller enthält, dann müssen Sie bei JEDEM Hersteller in die Bearbeitung gehen und unten bei URI Mapping eine gewünschte URL vergeben.
Oder einfach das automatische Vergeben einer URL angekreuzt lassen (Tick this box to have the URIs auto-generated for this manufacturer.).

