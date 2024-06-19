---
title: Seiten Benutzeroberfläche
slug: seiten-benutzeroberfläche
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 07-05-2024
date: 07-05-2024
taxonomy:
  category: Seiten
  tag: [ Anleitung, Seiten ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-dark overlay-dark parallax'
---

!!! Diese Anleitung zeigt dir, wie du die Benutzeroberfläche der Seiten von Grav optimal verwendest und welche Funktionen dir zur Verfügung stehen.

===

## Ziel

Mit dieser Anleitung lernst du die Funktionen der Benutzeroberfläche der Seiten kennen und wie du diese optimal verwendest.

Dabei lernst du nicht nur die Standardfunktionen kennen, sondern lernst auch, wie du schnell zwischen den Seiten navigieren kannst und weitere Funktionen, die die Arbeit mit Grav vereinfachen.

## Basiswissen

Für diese Anleitung benötigst du Grundkenntnisse in Grav. Du solltest die Anleitung [Seiten – Grundlagen](/tutorial/grundlagen/seiten) gelesen haben und bereits erste Erfahrungen mit Grav gesammelt haben.

## Menüleiste

![Menüleiste Übersicht](seiten-menu-übersicht.webp?lightbox&resize=600)

Ziemlich sicher ist dir die Menüleiste, die du bei allen Seiten hast, bereits aufgefallen. Vielleicht hast du einige davon auch bereits verwendet oder ausprobiert.

In dieser Sektion lernst du im Detail, welche Funktionen die einzelnen Elemente der Menüleiste haben.

### Navigation innerhalb der Seiten

![Navigation innerhalb der Seiten](seiten-menu-navigation.webp)

Mit dieser Navigation kannst du schnell zwischen den Seiten wechseln.

1. **↰**: Mit diesem Button kannst du zur letzten Seite zurückkehren.
2. **🮤**: Navigiere zur vorherigen Seite.
3. **🮧**: Navigiere zur übergeordneten Seite.
4. **🮦**: Navigation zur untergeordneten Seite.
5. **🮥**: Navigiere zur nächsten Seite.

### Seitenvorschau

![Seitenvorschau](seiten-menu-vorschau.webp)

Mit der Vorschaufunktion kannst du dir die Seite innerhalb des Adminpanel ansehen. Zudem kannst du die Seite auch in einem neuen Tab öffnen oder wieder zurück zur Bearbeitung wechseln.

### Seitenoptionen

![Seitenoptionen](seiten-menu-optionen.webp)

Die Seitenoptionen bieten dir verschiedene Funktionen, die dir die Arbeit mit Grav erleichtern.

Mit diesen Optionen kannst du:

- **Löschen**: Die Seite mit allen Inhalten löschen
- **Hinzufügen**: Eine neue Seite (mit Typ) hinzufügen
- **Kopieren**: Die Seite inklusive allen Inhalten duplizieren
- **Verschieben**: Die Seite an eine andere Position verschieben

## Expertenansicht

_Die Expertenansicht ist nicht für alle Benutzer sichtbar._

![Expertenansicht](seiten-expertenansicht.webp?lightbox&resize=600)

Bei der Expertenansicht handelt es sich um eine erweiterte Ansicht, die dir zusätzliche Funktionen bietet. Genau gesagt lässt es die Optionen einer Seite in einer Textansicht statt einer Optionsansicht anzeigen. Diese nennt man Frontmatter.

### Frontmatter

> Der Frontmatter ist ein spezieller Bereich in einer Markdown Datei, der Metadaten im YAML Format enthält. In Grav sind diese Metadaten nicht anderes als Einstellungen der Seite.

![Frontmatter in der Expertenansicht](seiten-expertenansicht-frontmatter.webp?lightbox&resize=600)

Hier ist gut zu erkennen, dass diese Ansicht für normale Benutzer nicht unbedingt benutzerfreundlich ist. Für Entwickler und erfahrene Benutzer bietet diese Ansicht jedoch viele Vorteile.

Zum einen können so Einstellungen viel leichter angepasst werden. Auch das Übertragen von Einstellungen auf andere Seiten ist so deutlich einfacher, da diese direkt kopiert und eingefügt werden können. Zum anderen spart es viel Zeit, da man nicht durch die einzelnen Einstellungen klicken muss, sondern diese direkt bearbeiten kann.

Trotzdem gibt es noch einen Tab «Optionen». In diesem Tab können Einstellungen getätigt werden, die nicht im Frontmatter vorhanden sind. Dies betrifft hauptsächlich Einstellungen, die mit dem Dateinamen und Dateipfad zusammenhängen, zum Beispiel Typ, Ordnername, Speicherort und Sortierung:

![Optionen in der Expertenansicht](seiten-expertenansicht-optionen.webp?lightbox&resize=600)
