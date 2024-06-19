---
title: Seiten – Grundlagen
slug: seiten
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 19-04-2024
date: 19-04-2024
taxonomy:
  tag: [ Grundlagen, Seiten ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-light overlay-dark parallax'
---

!!! In dieser Anleitung lernst du, wie du in Grav Seiten erstellen, bearbeiten und löschen kannst und welche Einstellungen für Seiten vorgenommen werden können.

===

1. Melde dich im Admin Panel an
2. Navigiere zu den Seiten _(orange markiert)_
3. Jetzt siehst du die Seitenübersicht:
![Screenshot Seitenübersicht](seiten-übersicht.webp?lightbox)

## Übersicht
Die 3 Spalten zeigen dir die Seiten und Ordner auf verschiedenen Ebenen, 1. Ebene _(rot markiert)_, 2. Ebene _(grün markiert)_ und 3. Ebene _(blau markiert)_. Die Ebenen repräsentieren die Hierarchie der Seiten. Je nachdem können weitere Ebenen hinzukommen.

1. Ebene: Startseite, Hauptseiten
2. Ebene: Unterseiten, Module von Hauptseiten
3. Ebene: Unterseiten von Unterseiten, Module von Unterseiten
4. Ebene: ...

Oben rechts _(pink markiert)_ kannst du eine Blogseite, Standardseite oder modulspezifische Komponenten erstellen. Je nach Konfiguration der Seite sind verschiedene Optionen verfügbar.

### Legende Symbole
![Screenshot Seitenübersicht](seiten-übersicht.webp?lightbox)

| Komponente  | Beschreibung  | Bedeutung                |
|:------------|:--------------|:-------------------------|
| Symbol      | 🏠 _Haus_     | Startseite               |
|             | 📝 _Dokument_ | Seite                    |
|             | 🧱 _Baustein_ | Modul                    |
| Hintergrund | 🟦 _blau_     | via URL zugänglich       |
|             | ⬜ _grau_      | nicht via URL zugänglich |
| Badge       | 🟢 _grün_     | veröffentlichte Seite    |
|             | 🔴 _rot_      | unveröffentlichte Seite  |

### Legende Optionen
![Seitenlegende](seiten-legende.webp?lightbox)

| P  | Beschreibung              |
|:--:|:--------------------------|
| 1  | Optionen für Seite öffnen |
| 2  | Seitenvorschau in Admin   |
| 3  | Seite bearbeiten          |
| 4  | Seite duplizieren         |
| 5  | Seite löschen             |
| 6  | Info Tags                 |
| 7  | verfügbare Sprachen       |
| 8  | Route/ Pfad               |
| 9  | genutzte Vorlage          |
| 10 | zuletzt bearbeitet        |
| 11 | Unterseiten anzeigen      |

## Seite

### Seite erstellen
Du kannst eine neue Seite erstellen, indem du entweder den Knopf «Neue Seite erstellen» drückst oder eine Seite duplizierst. Dann musst du folgende Angaben machen:

- `Seitentitel*`: Name der Seite der angezeigt wird
- `Ordnername*`: Name des Ordners, in dem die Seite erstellt werden soll; Pfad der Seite
- `Übergeordnete Seite`: Übergeordnete Seite, in der die Seite erstellt werden soll
- `Seiten Template`: Vorlage, die für die Seite verwendet werden soll
- `Veröffentlicht/Sichtbar*`: Ob die Seite veröffentlicht sein soll oder nicht

[size=14]mit `*` gekennzeichnete Angaben sind auszufüllen[/size]

### Seite bearbeiten
Um eine Seite zu bearbeiten, klicke ein Element in der Seitenübersicht an. Du kannst nun die Seite bearbeiten.
![Screenshot Seite bearbeiten](seite-bearbeiten.webp?lightbox)

In der Navigation oben _(rot markiert)_ kannst du zwischen Inhalt und verschiedenen Optionen wechseln.

In der Mitte _(grün markiert)_ kannst du den Inhalt der Seite bearbeiten. Am oberen Rand des Feldes hast du Formatierungsoptionen zur Verfügung, um den Text entsprechend zu formatieren. Andernfalls kannst du auch Markdown verwenden. Die Formatierungsoptionen/ Komponenten findest du in der [Übersicht der Komponenten](/komponenten).
Um eine grobe Vorschau der Seite zu sehen, klicke auf das Auge oben links. So erkennst du, ob es Fehler in Markdown gibt. Erweiterte Komponenten werden nicht angezeigt.

Zu unterst _(orange markiert)_ kannst du Bilder, Videos und andere Medien hochladen.

### Seite löschen
Um eine Seite zu löschen, klicke auf die drei Punkte neben dem Element in der Seitenübersicht. Klicke dann auf «Löschen». Du wirst gefragt, ob du die Seite wirklich löschen möchtest. Klicke auf «Löschen».

!! Änderungen können nicht rückgängig gemacht werden

## Optionen

### Optionen
In den Optionen findest du gängige Einstellungen, die du für eine Seite vornehmen kannst. Diese sind in den meisten Fällen relevant.
![Screenshot Optionen](seite-optionen.webp?lightbox)

| Option                   | Beschreibung                                                       |
|:-------------------------|:-------------------------------------------------------------------|
| `Veröffentlicht`         | Ob die Seite veröffentlicht sein soll oder nicht                   |
| `Datum`                  | Datum, mit dem die Seite versehen ist                              |
| `Veröffentlichungsdatum` | Datum, ab dem die Seite automatisch veröffentlicht wird            |
| `Ablaufdatum`            | Datum, ab dem die Seite automatisch nicht mehr veröffentlicht wird |
| `Metadaten`              | Metadaten, die für die Seite verwendet werden sollen               |
| `Category` _(Blog)_      | Kategorie, die für die Seite verwendet werden soll                 |
| `Tags` _(Blog)_          | Tags, die für die Seite verwendet werden sollen                    |

!!! Eine vollständige Liste der verfügbaren Optionen findest du unter [Tutorials / Seiten / Seiten bearbeiten # Optionen](/tutorial/seiten/seiten-bearbeiten#optionen)

### Erweiterte Optionen
Die erweiterten Optionen bieten weitere Einstellungen, die jedoch für die meisten Benutzer nicht relevant sind.
![Screenshot erweiterte Optionen](seite-erweiterte-optionen.webp?lightbox)

| Option               | Beschreibung                                                    |
|:---------------------|:----------------------------------------------------------------|
| `Ordnername`         | Name des Ordners, in dem die Seite erstellt werden soll         |
| `Numerischer Präfix` | Numerischer Präfix, der für den Ordner verwendet werden soll    |
| `Sortierung`         | Sortierung, die verwendet werden soll                           |
| `Übergeordnet`       | Übergeordnete Seite, in der die Seite erstellt werden soll      |
| `Seiten Template`    | Vorlage, die für die Seite verwendet werden soll                |
| `Body CSS Klassen`   | CSS-Klassen, die für den Body der Seite verwendet werden sollen |
| `Slug`               | URL, an der die Seite erreichbar sein soll                      |

!!! Eine vollständige Liste der verfügbaren erweiterten Optionen findest du unter [Tutorials / Seiten / Seiten bearbeiten # Erweitert](/tutorial/seiten/seiten-bearbeiten#erweitert)

## Module

Module werden verwendet, um auf einer Seite verschiedene Komponenten oder Abschnitte zu erstellen. Sie funktionieren grundsätzlich wie normale Seiten, was die Bearbeitung und die Optionen und Aktionsmöglichkeiten betrifft. 

Der Unterschied besteht darin, anders als bei normalen Seiten verschiedene Module auf einer Seite zu haben. Einzelne Module können auch temporär ausgeblendet werden, ohne sie zu löschen. Danach können sie wieder eingeblendet werden.

So können längere oder komplexere Seiten in mehrere Module aufgeteilt werden. Dies erleichtert die Bearbeitung und Übersichtlichkeit der Seite.
