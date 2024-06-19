---
published: true
title: Seiten Typen
slug: seiten-typen
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 14-06-2024
date: 14-06-2024
taxonomy:
  category: Seiten
  tag: [ Anleitung, Seiten ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-dark overlay-dark parallax'
---

!!! In diesem Tutorial werden die verschiedenen Typen von Seiten und wie sie verwendet werden erklärt.

===

## Seiten Typen

Es gibt viele verschiedene Typen von Seiten, die alle einen speziellen Zweck erfüllen. Diese Typen haben verschiedene Vor- und Nachteile. Je nach Setup der Seite kann es zusätzliche Typen geben. Folgende Typen werden am häufigsten verwendet:

| Typ              | Beschreibung                                                                                                                       |
|:-----------------|:-----------------------------------------------------------------------------------------------------------------------------------|
| **Standard**     | Eine normale Seite, die Text und Medien enthält. Optimal für Seiten, die den gesamten Inhalt in einer Datei speichern.             |
| **Modular**      | Eine Seite, die aus mehreren Modulen besteht. Optimal wenn Teile unabhängig voneinander sind und einzeln bearbeitet werden sollen. |
| **Blog**         | Blogseite, die mehrere Beiträge enthalten. Wird für Blogs und Newsseiten verwendet.                                                |
| **Beitrag**      | Beitrag einer Blogseite, die zusätzliche Optionen für News Beiträge beinhalten.                                                    |
| **Formular**     | Komponente, um ein Formular anzuzeigen, welches ausgefüllt und an eine E-Mail Adresse gesendet werden kann.                        |
| **H5P**          | Einbetten von interaktiven H5P Elementen.                                                                                          |
| **Sektion**      | Komplexere Komponente, um Seiten mit verschiedenen Sektionen anzuzeigen.                                                           |
| **Präsentation** | Erstellen von Präsentationsähnlichen Inhalten.                                                                                     |

### Standard

> Eine normale Seite, die Text und Medien enthält. Optimal für Seiten, die den gesamten Inhalt in einer Datei speichern.

Eine Standardseite ist eine einfache Seite, die Text und Medien enthält. Sie ist optimal für Seiten, die den gesamten Inhalt in einer Datei speichern. Die Standardseite ist die einfachste Art von Seite und wird am häufigsten verwendet.

**Weitere Informationen:**
- Seiten Template: `Default`
- Beispiel: [Beispiele/Standardseite](/beispiele/standardseite)
- Originaldatei: [/pages/04.beispiele/01.standardseite/default.md](https://github.com/Crabston/grav-demo/blob/main/pages/04.beispiele/01.standardseite/default.md?plain=1)

### Modular

> Eine Seite, die aus mehreren Modulen besteht. Optimal wenn Teile unabhängig voneinander sind und einzeln bearbeitet werden sollen.

Eine modulare Seite ist eine Seite, die aus mehreren Modulen besteht. Jedes Modul kann unabhängig voneinander bearbeitet werden. Dies ist bei komplexen Seiten mit vielen verschiedenen Elementen nützlich. Mit modularen Seiten können Seiten einfach strukturiert und organisiert werden, was die Wartung und Pflege erleichtert.

**Weitere Informationen:**
- Seiten Template: `Modular`
- Beispiel: [Beispiele/Modulare Seite](/beispiele/modulare-seite)
- Originaldatei: [/pages/04.beispiele/02.modulare-seite/modular.md](https://github.com/Crabston/grav-demo/blob/main/pages/04.beispiele/02.modulare-seite/modular.md?plain=1)
- Unterseiten: _siehe [Modulare Typen](#modulare-typen)_

### Blog

> Blogseite, die mehrere Beiträge enthalten. Wird für Blogs und Newsseiten verwendet.

Eine Blogseite ist eine Seite, die mehrere Beiträge enthält. Sie wird für Blogs und Newsseiten verwendet. Mit einer Blogseite können einfach und korrekt formatierte Beiträge und News veröffentlicht werden. Blogs sind eine ideale Möglichkeit, um regelmässig neue Inhalte zu veröffentlichen und die Leser auf dem Laufenden zu halten.

**Weitere Informationen:**
- Seiten Template: `Blog`
- Beispiel: [Tutorial](/tutorial)
- Originaldatei: [/pages/01.tutorial/blog.de.md](https://github.com/Crabston/grav-demo/blob/main/pages/01.tutorial/blog.de.md?plain=1)

### Beitrag

> Beitrag einer Blogseite, die zusätzliche Optionen für News Beiträge beinhalten.

Ein Beitrag ist ein einzelner Beitrag einer Blogseite. Dieser kann kategorisiert und getaggt werden. So können diese durch den Benutzer gefiltert werden. Beiträge können auch mit einem Datum versehen werden, um die Reihenfolge zu bestimmen. Auch andere Metadaten wie Autor, Schlagwörter und Beschreibung können hinzugefügt werden.

**Weitere Informationen:**
- Seiten Template: `Item`
- Beispiel: [Tutorial/Seiten/Seiten Typen](/tutorial/seiten/seiten-typen)
- Originaldatei: [/pages/01.tutorial/04.seiten/04.seiten-typen/item.de.md](https://github.com/Crabston/grav-demo/blob/main/pages/01.tutorial/04.seiten/04.seiten-typen/item.de.md?plain=1)

### Formular

> Komponente, um ein Formular anzuzeigen, welches ausgefüllt und an eine E-Mail Adresse gesendet werden kann.

Ein Formular ist eine Komponente, um ein Formular anzuzeigen, welches durch einen Besucher ausgefüllt werden kann. Der Inhalt des Formulars kann an eine E-Mail Adresse gesendet werden oder in einer Datenbank gespeichert werden. Formulare sind eine einfache Möglichkeit, um Feedback von Benutzern zu erhalten oder Informationen zu sammeln. Auch für Kontaktformulare oder Anmeldeformulare sind sie ideal. 

**Weitere Informationen:**
- Seiten Template: `Form`
- Beispiel: [Beispiele/Formular](/beispiele/formular)
- Originaldatei: [/pages/04.beispiele/07.formular/form.de.md](https://github.com/Crabston/grav-demo/blob/main/pages/04.beispiele/07.formular/form.de.md?plain=1)
- weitere Referenzen:
  - [Tutorials / Seiten / Kontaktformular erstellen](/tutorial/seiten/kontaktformular-erstellen)

### H5P

> Einbetten von interaktiven H5P Elementen.

H5P ist ein Framework, um interaktive Inhalte zu erstellen. Mit H5P können verschiedene Arten von interaktiven Inhalten erstellt werden, wie z.B. Quizze, Präsentationen, Spiele, Videos und mehr. H5P Elemente können in Grav eingebettet werden, um interaktive Inhalte auf der Website anzuzeigen.

**Weitere Informationen:**
- Seiten Template: `H5P`
- Beispiel: _noch kein Beispiel vorhanden_
<!-- TODO: H5P Beispiel hinzufügen -->

### Sektion

> Komplexere Komponente, um Seiten mit verschiedenen Sektionen anzuzeigen.

Eine Sektion ist eine komplexere Komponente, um Seiten mit verschiedenen Sektionen anzuzeigen. Eine Sektion kann mehrere Sektionen enthalten, die unabhängig voneinander sind. Sie sind eine ideale Möglichkeit, um komplexe Inhalte zu strukturieren und zu organisieren.

**Weitere Informationen:**
- Seiten Template:
  - `Sections` (Hauptseite der Sektionen/ Übergeordnete)
  - `Section` (einzelne Sektion)
  - `Subsection` (Untersektion)
- Beispiel: [Beispiele/Multi Sektion Seite](/beispiele/multi-sektion-seite)
- Originaldatei: [/pages/04.beispiele/03.multi-sektion-seite](https://github.com/Crabston/grav-demo/blob/main/pages/04.beispiele/03.multi-sektion-seite?plain=1)

### Präsentation

> Erstellen von Präsentationsähnlichen Inhalten.

**Weitere Informationen:**
- Seiten Template: `Presentation` & `Presentations`
- Beispiel: _noch kein Beispiel vorhanden_
<!-- TODO: Präsentation Beispiel hinzufügen & beschreiben -->

## Modulare Typen

| Typ           | Beschreibung |
|:--------------|:-------------|
| **Standard**  |              |
| **Text**      |              |
| **Hero**      |              |
| **Nachricht** |              |
| **Gallery**   |              |
| **Item**      |              |
| **Features**  |              |
| **Sponsoren** |              |

### Standard

> Standard Modul

**Weitere Informationen:**
- Seiten Template: `Default`
- Beispiel: _noch kein Beispiel vorhanden_
<!-- TODO: Standard Beispiel hinzufügen & beschreiben-->

### Text

> Modularer Abschnitt für Text und Medien, ähnlich wie eine Standardseite.

Das Text Modul ist ein modularer Abschnitt, der Text und Medien anzeigt. Es ist ähnlich wie eine Standardseite, aber es kann unabhängig von anderen Modulen bearbeitet werden. Dies ist nützlich, um Text und Medien in einem separaten Abschnitt anzuzeigen.

**Weitere Informationen:**
- Seiten Template: `Text`
- Beispiel: [Beispiele/Modulare Seite/Easy Content](/beispiele/modulare-seite#easy_content)
- Originaldatei: [/pages/04.beispiele/02.modulare-seite/03._callout/text.md](https://github.com/Crabston/grav-demo/blob/main/pages/04.beispiele/02.modulare-seite/03._callout/text.md?plain=1)

### Hero

> Modularer Abschnitt für ein Hero Element, welches als Titelbild oder Header verwendet werden kann.

Das Hero Modul wird meist als Titelelement oder Header verwendet. Es ist ein auffälliges Element, das den Benutzer auf die Seite aufmerksam macht. Das Hero Modul kann ein Bild, einen Titel, einen Untertitel und einen «Call-to-Action-Button» enthalten.

**Weitere Informationen:**
- Seiten Template: `Hero`
- Beispiel: [Beispiele/Modulare Seite/Top](/beispiele/modulare-seite#top)
- Originaldatei: [/pages/04.beispiele/02.modulare-seite/01._hero/hero.md](https://github.com/Crabston/grav-demo/blob/main/pages/04.beispiele/02.modulare-seite/01._hero/hero.md?plain=1)

### Nachricht

> Modularer Abschnitt für eine Nachricht oder Hinweis, der hervorgehoben werden soll.

Ein Nachricht Modul ist ein modularer Abschnitt, mit dem eine Nachricht oder ein Hinweis hervorgehoben werden kann. Dies ist nützlich, um wichtige Informationen oder Warnungen auf der Seite anzuzeigen.

**Weitere Informationen:**
- Seiten Template: `Alert`
- Beispiel: _noch kein Beispiel vorhanden_
<!-- TODO: Alert Beispiel hinzufügen -->

### Gallery

> Modularer Abschnitt für eine Bildergalerie.

**Weitere Informationen:**
- Seiten Template: `XXX`
- Beispiel: _noch kein Beispiel vorhanden_
<!-- TODO: Gallery Beispiel hinzufügen & beschreiben -->

### Item

> Modularer Abschnitt für ein einzelnes Element.

**Weitere Informationen:**
- Seiten Template: `Item`
- Beispiel: _noch kein Beispiel vorhanden_
<!-- TODO: Item Beispiel hinzufügen & beschreiben -->

### Features

> Modularer Abschnitt für Features, welche mit Icons hervorgehoben werden sollen.

Abschnitt für Features, die mit Icons hervorgehoben werden sollen. Diese können einfach via Frontmatter oder speziellen Tab im Admin Panel konfiguriert werden.

**Weitere Informationen:**
- Seiten Template: `Features`
- Beispiele: 
  - [Beispiele/Modulare Seite/Features](/beispiele/modulare-seite#features)
  - [Beispiele/Modulare Seite/Highlights](/beispiele/modulare-seite#highlights)
- Originaldateien:
  - [/pages/04.beispiele/02.modulare-seite/02._highlights/features.md](https://github.com/Crabston/grav-demo/blob/main/pages/04.beispiele/02.modulare-seite/02._highlights/features.md?plain=1)
  - [/pages/04.beispiele/02.modulare-seite/04._features/features.md](https://github.com/Crabston/grav-demo/blob/main/pages/04.beispiele/02.modulare-seite/04._features/features.md?plain=1)

### Sponsoren

> Modularer Abschnitt für Sponsoren oder Partner Logos.

Das Sponsoren Modul ist ein modularer Abschnitt, speziell angefertigt um eine Liste von Sponsoren oder Partner Logos anzuzeigen.

**Weitere Informationen:**
- Seiten Template: `Sponsoren`
- Beispiel: _noch kein Beispiel vorhanden_
<!-- TODO: Sponsoren Beispiel hinzufügen -->
