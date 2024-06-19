---
published: true
title: Seiten bearbeiten
slug: seiten-bearbeiten
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 15-06-2024
date: 15-06-2024
taxonomy:
  category: Seiten
  tag: [ Anleitung, Seiten ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-dark overlay-dark parallax'
---

!!! In diesem Tutorial wird erklärt, wie man Seiten bearbeitet und welche Optionen es gibt.

===

! Je nach System können die Bezeichnungen und Optionen abweichen.

## Übersicht

Eine Seite kann auf verschiedene Arten bearbeitet werden. Dies kann sich zum Beispiel auf den Inhalt beziehen. Es gibt aber auch noch weitere Optionen, wie zum Beispiel die Einstellungen der Seite oder dessen Metadaten. Zudem gibt es auch die Möglichkeit, administrative Anpassungen vorzunehmen oder die Sicherheitseinstellungen zu verändern. Je nach Seiten Typ stehen weitere Optionen zur Verfügung.


Im Admin Panel sind diese Optionen in Tabs unterteilt:
![Tabs im Inhaltseditor](tabs.webp?lightbox&resize=600)
 
Standardmässig gibt es folgende Tabs:
- **Inhalt**: Inhalt der Seite
- **Optionen**: Einstellungen der Seite
- **Erweitert**: administrative Einstellungen
- **Sicherheit**: Sicherheitseinstellungen

## Inhalt

Im Inhalstab kann der Inhalt der Seite bearbeitet werden. Dies betrifft den Text und Medien.

![Inhalt](inhalt.webp?lightbox)

Oben rechts _(rot markiert)_ kann der Titel der Seite bearbeitet werden. Dieser wird beispielsweise im Menü angezeigt oder im Browserverlauf. Auch Suchmaschinen verwenden den Titel, um die Seite zu beschreiben.

Darunter befindet sich das Textfeld _(grün markiert)_, in dem der Inhalt der Seite bearbeitet werden kann. Dabei gibt es eine Liste von Formatierungsmöglichkeiten _(blau markiert)_, mit denen der Text formatiert werden kann. Erfahrenere Benutzer können jedoch auch direkt mit der Markdownsyntax arbeiten.

Zuunterst ist standardmässig ein Medienfeld _(pink markiert)_ zu finden. Hier können Bilder, Videos oder andere Medien hochgeladen und in den Text eingefügt werden.

## Optionen

Bei den Optionen können verschiedene Einstellungen der Seite bearbeitet werden. Dies betrifft beispielsweise die URL, die Metadaten oder die Veröffentlichung.  
Je nach Konfiguration des Systems können auch weitere/ weniger Optionen zur Verfügung stehen oder die Optionen anders benannt sein.

![Optionen](optionen.webp?lightbox)

### 1. Veröffentlichen

In diesem Abschnitt können Optionen zur Veröffentlichung der Seite bearbeitet werden:

- **Veröffentlicht**: ob die Seite veröffentlicht ist oder nicht
- **Datum**: das Veröffentlichungsdatum der Seite (**Achtung**: bei manchen Systemen wird das Datum der Sitemap verwendet)
- **Veröffentlichungsdatum**: Zeitpunkt, ab dem die Seite veröffentlicht wird
- **Ablaufdatum**: Zeitpunkt, an dem die Seite nicht mehr veröffentlicht wird
- **Metadaten**: Metadaten der Seite, als Schlüssel-Wert Paare

### 2. Tags

Hier werden Tags der Seite bearbeitet. Tags sind Schlagwörter (Metadaten), die die Seite beschreiben und die Suche erleichtern.

- **Kategorie**: Kategorie, in der die Seite erscheint
- **Tags**: Schlagwörter, die die Seite beschreiben
- **Monat**: Monat, in dem die Seite erscheint
- **Autor**: Autor der Seite
- **Filter**: Filter, der auf die Seite angewendet wird

### 3. Seitenleiste

Dies sind die Einstellungen der Seitenleiste. Hier kann beispielsweise festgelegt werden, ob die Seitenleiste angezeigt wird oder nicht.

!!! Die Seitenleiste ist nur bei bestimmten Seitentypen verfügbar.

- **Zeige Seitenleiste**: ob die Seitenleiste angezeigt wird
- **Zeige beliebte Tags**: ob beliebte Tags angezeigt werden (z.B. bei einem Blog)
- **Zeige Feed**: ob der Feed angezeigt wird (z.B. bei einem Blog)
- **Zeige Inhaltsverzeichnis**: ob das Inhaltsverzeichnis angezeigt wird
- **Zeige Suche**: ob ein Suchfeld angezeigt wird

## Erweitert

Hier können administrative Einstellungen der Seite bearbeitet werden. Dies betrifft beispielsweise die URL oder die Seitentypen.

![Erweitert](erweitert.webp?lightbox)

### 1. Einstellungen

- **Ordnername**: Name des Ordners, in dem die Seite gespeichert ist
- **Übergeordnet**: übergeordnete Seite/ Ordner
- **Seiten Template**: Template, das für die Seite verwendet wird (Seitentyp)
- **Body CSS Klassen**: CSS Klassen, die angewendet werden sollen

### 2. Sortierung

- **Numerisches Ordnerpräfix**: ob ein numerisches Ordnerpräfix verwendet wird (für sortierbare Seiten)
- **Sortierung**: Sortierung der Seiten auf gleicher Ebene

### 3. Überschreibungen

- **Seiten Datumsformat**: Format des Datums der Seite
- **Menü**: Text, der in Menüs angezeigt wird (Überschreibung des Titels)
- **Slug**: URL der Seite (Überschreibung des Ordnernamens)
- **Weiterleitung**: Weiterleitung der Seite auf eine andere URL
- **Verarbeitung**: Ob Markdown und Twig verarbeitet werden sollen
- **Twig Verarbeitung priorisieren**: Ob die Twig Verarbeitung vor der Markdown Verarbeitung geschehen soll
- **Twig niemals cachen**: Ob Twig zwischengespeichert werden soll
- **Standardtyp für Unterseiten**: Welchen Typ Unterseiten per Standard haben sollen
- **Aufrufbar**: Ob die Seite aufrufbar ist
- **Caching**: Ob die Seite gecached werden darf (Zwischenspeicherung)
- **Sichtbar**: Ob die Seite in Menüs sichtbar ist
- **Debugger**: Ob der Debugger aktiviert ist
- **URL Endung hinzufügen**: Ob eine URL Endung hinzugefügt werden soll (für Verarbeitung)

### 4. Routenüberschreibungen

- **Weiterleitung auf Standardroute**: Automatische Weiterleitung auf die Standardroute
- **Standardroute**: Standardroute der Seite
- **Kanonische Route**: Kanonische Route der Seite (die bevorzugte URL)
- **Aliase**: Aliase der Seite (zusätzliche URLs, die auf die Seite verweisen)

### 5. administrative Anpassungen

- **Sortierung der Unterseiten**: Wonach die Unterseiten sortiert werden sollen

## Sicherheit

Bei den Sicherheitseinstellungen können verschiedene Sicherheitseinstellungen der Seite bearbeitet werden. Dies betrifft beispielsweise die Zugriffsrechte.

![Sicherheit](sicherheit.webp?lightbox)

### 1. Seitenzugriff

Hier können die Zugriffsrechte der Seite bearbeitet werden. Dies betrifft beispielsweise, ob jeder die Seite sehen kann oder ob ein Login erforderlich ist.

- **Menüsichtbarkeit erfordert Zugriff**: Falls aktiviert wird die Seite in Menüs nur angezeigt, wenn der Benutzer Zugriff auf die Seite hat
- **Seitenzugriff**: Einstellung, welche Berechtigungen für den Zugriff auf die Seite erforderlich sind

### 2. Seitenberechtigungen

Hier können die Berechtigungen der Seite bearbeitet werden. Dies betrifft beispielsweise, wer die Seite bearbeiten oder löschen darf.

- **Berechtigungen erben**: ob die Berechtigungen von übergeordneten Seiten geerbt werden
- **Seitengruppen**: Spezielle Berechtigungen für Gruppen, nach CRUD (Create, Read, Update, Delete)/ (Erstellen, Lesen, Aktualisieren, Löschen)

### weiteres

Je nach Seitentyp und Konfiguration des Systems können weitere Optionen zur Verfügung stehen. Dies ist zum Beispiel bei Blogs & Beiträgen der Fall. Auch durch Plugins können weitere Optionen hinzugefügt werden. Eine Anleitung zu diesen Optionen findest du im [Tutorial Seiten bearbeiten - erweitert](/tutorial/seiten/seiten-bearbeiten-erweitert).
