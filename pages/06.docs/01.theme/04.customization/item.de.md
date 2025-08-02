---
title: Anpassen | Hadron Theme
menu: Anpassen
slug: anpassen
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 17-10-2024
date: 17-10-2024
taxonomy:
  category: Hadron
  tag: [ Theme, Konfiguration ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-light overlay-dark parallax'
---

!!! Diese Anleitung beschreibt, wie du das Hadron Theme anpassen kannst. Durch die Anpassung des Themes änderst du mehr als nur einige Optionen: Du veränderst das Aussehen deiner Website, indem du den Quellcode des Themes (CSS/ SCSS, JavaScript, Twig) bearbeitest.

===

! Da du CSS/ SCSS, JavaScript und Twig Dateien bearbeitest, wird empfohlen, dass du über Kenntnisse in diesen Sprachen verfügst. Wenn du nicht vertraut mit ihnen bist, kannst du das Theme trotzdem anpassen, indem du die Theme-Optionen im Admin-Panel änderst. Siehe die [Hadron Theme-Optionen](/hadron/theme/optionen) für weitere Informationen.

## Varianten zur Anpassung des Themes
In Grav gibt es mehrere Möglichkeiten, ein Theme anzupassen (siehe [Grav Docs](https://learn.getgrav.org/17/themes/customization) für weitere Informationen). Grundsätzlich gibt es zwei Möglichkeiten, das Hadron Theme anzupassen:
1. Bearbeiten des Quellcodes des Themes direkt _(nicht empfohlen)_: Du kannst den gesamten Quellcode eines Themes direkt bearbeiten. Obwohl dies der einfachste Weg ist, ein Theme anzupassen, wird dies nicht empfohlen, da du deine Änderungen verlierst, wenn du das Theme aktualisierst.
2. Verwendung eines Child-/ inherited Themes _(empfohlen)_: Du kannst ein Child Theme erstellen, das vom Hadron Theme erbt. Auf diese Weise kannst du das Theme anpassen, ohne deine Änderungen zu verlieren, wenn du Hadron aktualisierst. (Hadron selbst ist ein Child-Theme von Quark.)

## Hadron Skeleton
Der einfachste Weg, das Hadron Theme anzupassen, ist die Verwendung des [Hadron Skeletons](https://github.com/Crabston/grav-skeleton-hadron). Der Hadron Skeleton ist ein vorinstalliertes Grav-Paket, das das Hadron Theme und einige Demo-Inhalte enthält.

Das Hadron Skeleton enthält auch ein drittes Theme namens «Local», das im Grunde das ist, was es klingt: ein lokales Theme, direkt im Skeleton, bereit zur Anpassung. Auf diese Weise kannst du das Theme anpassen, ohne deine Änderungen zu verlieren, wenn du das Theme aktualisierst.

## Andere Möglichkeiten
Wenn du das Hadron Skeleton lieber nicht verwenden möchtest, kannst du auch manuell ein Child Theme erstellen. Weitere Informationen findest du in den [Grav Docs](https://learn.getgrav.org/17/themes/customization#theme-inheritance). Dies ist nützlich, wenn du bereits eine Grav-Installation hast und das Hadron Theme hinzufügen möchtest. Wenn du jedoch eine neue Website mit Grav + Hadron erstellen möchtest, ist das Skeleton möglicherweise die bessere Wahl.

Dennoch kann es nützlich sein, einiges vom Local Theme zu übernehmen, um die Anpassungen zu erleichtern. Den Code dazu findest du im [Hadron Skeleton auf GitHub unter `themes/local`](https://github.com/Crabston/grav-skeleton-hadron/tree/main/themes/local).
