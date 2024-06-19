---
published: true
title: Seiten bearbeiten - erweitert
slug: seiten-bearbeiten-erweitert
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 19-06-2024
date: 19-06-2024
taxonomy:
  category: Seiten
  tag: [ Anleitung, Seiten ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-dark overlay-dark parallax'
---

!!! In diesem Tutorial wird erklärt, welche weiteren Optionen bei der Bearbeitung von Seiten zur Verfügung stehen, die von einzelnen Seitentypen und Plugins stammen.

===

!!! Dies ist eine Ergänzung zur Anleitung [Seiten / Seiten bearbeiten](/tutorial/seiten/seiten-bearbeiten). Dort werden die standardmässigen Tabs im Inhaltseditor erklärt, wie Inhalt, Optionen, Erweitert und Sicherheit. 

## weitere Optionen

Folgende weitere Optionen können je nach Seitentyp und installierten Plugins bei standardmässigen Tabs zur Verfügung stehen:
- **Typ: `modular`**: _Inhalt: Modul einrichten_; Konfigurationsmöglichkeiten für modulare Seiten.
- **Typ: `modular/alert`**: _Inhalt_; Konfigurationsmöglichkeiten für Alert-Elemente.
- **Typ: `embedlycard`**: _Inhalt_; Konfigurationsmöglichkeiten für Embedly Cards.
- **Plugin: Sitemap**: _Optionen: Sitemap_; Konfigurationsmöglichkeiten für die Sitemap.
- **Plugin: External Links**: _Optionen: Externe Links_; Konfigurationsmöglichkeiten für externe Links.
- **Plugin: Table of Contents**: _Erweitert: Inhaltsverzeichnis_; Konfigurationsmöglichkeiten für das Inhaltsverzeichnis.
- **Plugin: Table of Contents**: _Erweitert: Anker_; Konfigurationsmöglichkeiten für Anker.

### Inhalt: Modul einrichten
Bei modularen Seiten wird unter dem Inhaltseditor und Medien ein weiterer Abschnitt angezeigt, in dem die Konfiguration für das Anzeigen von Modulen vorgenommen werden kann.
![Inhalt: Modul einrichten](inhalt-modular.webp?lightbox)

- **Elemente**: Kollektion der Elemente, die angezeigt werden sollen
- **Sortieren nach**: nach welchem Kriterium die Elemente sortiert werden sollen
- **Sortierung**: aufsteigend oder absteigend

### Inhalt: Alert
Die Optionen für das `Alert` Modul, mit welchem eine hervorgehobene Nachricht angezeigt wird, werden im Inhaltseditor zuoberst angezeigt.
![Inhalt: Alert](inhalt-alert.webp?lightbox)

- **Mitteilungsfarbe**: Farbe der Mitteilung

### Inhalt: Embedly Cards
Die Optionen für den `EmbedlyCard` Seitentyp, mit welchem externe Beiträge eingebettet werden können, werden im Inhaltseditor zuoberst angezeigt.
![Inhalt: Embedly Cards](inhalt-embedlycard.webp?lightbox)

- **Seitentitel**: Titel der angezeigt werden soll
- **Embedly Titel**: Titel der Embedly Card
- **Embedly Titel anzeigen**: ob der Titel angezeigt werden soll
- **Embedly Ausrichtung**: Ausrichtung der Embedly Card
- **Embedly URL**: URL der Embedly Card

### Optionen: Sitemap
Das Sitemap Plugin unterstützt die Erstellung einer Sitemap für die Website. Hier können Seitenspezifische Einstellungen vorgenommen werden.
![Optionen: Sitemap](optionen-sitemap.webp?lightbox)

- **Ignoriere Seite**: ob die Seite in der Sitemap ignoriert wird (sie wird nicht indexiert)
- **zuletzt geändert**: Zeitpunkt, an dem die Seite zuletzt geändert wurde
- **Änderungshäufigkeit**: wie oft sich die Seite ändert (Schätzung; Tipp für Suchmaschinen zur Indexierung)
- **Priorität**: Priorität der Seite zwischen 0.0 und 1.0 (0.5 ist eine normale Seite)

### Optionen: Externe Links
Das External Links Plugin ermöglicht das Hinzufügen von Icons bei externen Links, um diese zu kennzeichnen.
![Optionen: Externe Links](optionen-external-links.webp?lightbox)

- **Aktiviere externe Links**: ob externe Links aktiviert sind
- **Zeige Standardtitel**: ob der Standardtitel angezeigt werden soll
- **Füge `rel="nofollow"` hinzu**: fügt den `rel="nofollow"` Header zu externen Links hinzu. Dies ist ein Hinweis an Crawler, dass der Link weiterverfolgt werden soll.
- **Setze `target` Attribut**: setzt das `target` Attribut für externe Links
- **Modus**: Modus für externe Links (ob ein Icon angezeigt wird oder nicht)

### Erweitert: Inhaltsverzeichnis
Das Table of Contents Plugin unterstützt die automatische Erstellung eines Inhaltsverzeichnisses für Seiten.
![Erweitert: Inhaltsverzeichnis](erweitert-inhaltsverzeichnis.webp?lightbox)

- **Inhaltsverzeichnis generieren**: Ob ein Inhaltsverzeichnis generiert werden soll
- **Starte bei Überschrift**: Ab welcher Überschrift das Inhaltsverzeichnis generiert werden soll
- **Ende bei Überschrift**: Bis zu welcher Überschrift das Inhaltsverzeichnis generiert werden soll
- **CSS Klassen**: CSS Klassen, die angewendet werden sollen

### Erweitert: Anker
Das Table of Contents Plugin unterstützt die automatische Generierung von Ankerpunkten für Überschriften.
![Erweitert: Anker](erweitert-anker.webp?lightbox)

- **Starte bei Überschrift**: Ab welcher Überschrift Anker generiert werden sollen
- **Ende bei Überschrift**: Bis zu welcher Überschrift Anker generiert werden sollen
- **Verlinke Anker**: Ob Anker verlinkt werden sollen
- **Aria Label**: Aria Label für Anker (für Barrierefreiheit)
- **CSS Klassen**: CSS Klassen, die angewendet werden sollen
- **Anker Icon**: Zeichen, welches für Anker verwendet werden soll
- **Anker Icon Position**: Position des Anker Icons
- **Maximale Slug Länge**: Maximale Länge des Slugs
- **Slug Präfix**: Präfix des Slugs

## weitere Tabs

Folgende weitere Tabs können je nach Seitentyp und installierten Plugins zur Verfügung stehen:
- **Typ: `blog`**: _Blog Konfiguration_; Einstellungen zu den Blogseiten
- **Typ: `item`**: _Blog Item_; Konfigurationsmöglichkeiten für Blog Beiträge
- **Typ: `form`**: _Formular_; Optionen zum Erstellen von Formularen
- **Typ: `sections`**: _Sektionen_; Optionen für Sektionen und deren Unterseiten
- **Typ: `modular/hero`**: _Hero_; Konfigurationsmöglichkeiten für Hero-Elemente
- **Typ: `modular/features`**: _Features_; Einstellungen für den Inhalt von Features

### Blog Konfiguration
Die Blog Konfiguration ermöglicht die Einstellung von Blog spezifischen Optionen für die Blogseite und setzt Standardwerte für Blog Beiträge.
![Blog Konfiguration](blog.webp?lightbox)

- **Hero Klassen**: CSS Klassen für das Hero Element
- **Hero Bild**: Bild für das Hero Element innerhalb des Beitrags
- **Bild Alternativtext**: Alternativtext für das Bild
- **Bildunterschrift**: Bildunterschrift die unter dem Bild angezeigt wird
- **Bildunterschrift URL**: URL für die Bildunterschrift
- **Blog URL**: URL für den Blog mit Hauptkonfiguration
- **zeige Breadcrumbs**: ob Breadcrumbs angezeigt werden sollen
- **zeige Seitennummerierung**: ob Seitennummerierung angezeigt werden soll
- **Elemente**: Kollektion der Elemente, die angezeigt werden sollen
- **Anzahl der Elemente**: Anzahl der Beiträge die je Seite angezeigt werden
- **Sortieren nach**: nach welchem Kriterium die Beiträge sortiert werden sollen
- **Sortierung**: aufsteigend oder absteigend
- **Seitennummerierung**: ob Seitennummerierung angezeigt werden soll
- **URL Taxonomie Filter**: URL für die Taxonomie Filter
- **verwende Bricklayer**: ob Bricklayer verwendet werden soll (für Masonry Layout)
- **verstecke Zusammenfassung**: ob die Zusammenfassung der Beiträge versteckt werden soll
- **Standard Icon**: Standard Icon für Beiträge (über Font Awesome)
- **Metadaten Elemente**: Liste der Metadaten Elemente als Schlüssel-Wert Paare
- **Feed Anzahl**: Anzahl der Beiträge im Feed
- **Feed Titel**: Titel des Feeds
- **Feed Beschreibung**: Beschreibung des Feeds

### Blog Item
Bei Blog Beiträgen können spezifische Einstellungen für einzelne Beiträge vorgenommen werden. Falls nicht anders konfiguriert, werden die Einstellungen aus der Blog Konfiguration übernommen.
![Blog Item](item.webp?lightbox)

- **Hero Klassen**: CSS Klassen für das Hero Element
- **Hero Bild**: Bild für das Hero Element innerhalb des Beitrags
- **Bild Alternativtext**: Alternativtext für das Bild
- **Bildunterschrift**: Bildunterschrift die unter dem Bild angezeigt wird
- **Bildunterschrift URL**: URL für die Bildunterschrift
- **Blog URL**: URL für den Blog mit Hauptkonfiguration
- **zeige Breadcrumbs**: ob Breadcrumbs angezeigt werden sollen
- **zeige Seitennummerierung**: ob Seitennummerierung angezeigt werden soll
- **zeige Header Bild**: ob das Header Bild angezeigt werden soll (in der Blog Übersicht)
- **Bild Datei**: Bild für das Header Bild
- **Bild Breite**: Breite des Header Bilde die angewedet werden soll
- **Bild Höhe**: Höhe des Header Bilde die angewedet werden soll
- **zeige Zusammenfassung**: ob die Zusammenfassung des Beitrags angezeigt werden soll (Excerpt)
- **Format**: Typ der Zusammenfassung
- **Länge**: Länge der Zusammenfassung
- **Trennzeichen**: Trennzeichen für die Zusammenfassung
- **Feed Anzahl**: Anzahl der Beiträge im Feed
- **Feed Titel**: Titel des Feeds
- **Feed Beschreibung**: Beschreibung des Feeds

### Formular
Formulare können mit spezifischen Einstellungen konfiguriert werden. Dieser Abschnitt hier zeigt nur die Optionen via das Admin Panel. Eine Anleitung zum Erstellen von Formularen findest du unter [Tutorials / Seiten / Kontaktformular erstellen](/tutorial/seiten/kontaktformular-erstellen).
![Formular](form.webp?lightbox)

- **Formular Name**: Name des Formulars für die interne Referenz
- **Formular Knöpfe**: Liste der Knöpfe für das Formular
  - **Typ**: Typ des Knopfes (z.B. `submit` oder `reset`)
  - **Label**: Beschriftung des Knopfes
  - **Klassen**: CSS Klassen für den Knopf
- **Seite**: Seite, auf die nach dem Absenden des Formulars weitergeleitet wird
- **Nachricht**: Nachricht, die nach dem Absenden des Formulars angezeigt wird

### Sektionen
Die Optionen für Sektionen ermöglichen das Erstellen von Sektionen und deren Unterseiten.
![Sektionen](sections.webp?lightbox)

- **Sortieren nach**: nach welchem Kriterium die Sektionen sortiert werden sollen
- **Sortierung**: aufsteigend oder absteigend
- **verstecke Schaltflächen**: ob Knöpfe für das Navigieren zwischen Sektionen versteckt werden sollen

### Hero
Einstellungen zu modularen Hero Elementen können hier vorgenommen werden.
![Hero](modular-hero.webp?lightbox)

- **Hero Klassen**: CSS Klassen für das Hero Element
- **Hero Bild**: Bild für das Hero Element innerhalb des Moduls

### Features
Mit dem Features Modul können Icons mit Texten auf eine einfache Weise erstellt werden. Dieser Abschnitt zeigt wie diese konfiguriert werden können.
![Features](modular-features.webp?lightbox)

- **Layout**: In welcher Form die Features angezeigt werden sollen
- **Features**: Liste der Features mit folgenden Suboptionen:
  - **Icon**: Icon für das Feature (über Font Awesome)
  - **Header**: Überschrift des Features
  - **Text**: Beschreibung des Features
  - **Link**: Link für das Feature

