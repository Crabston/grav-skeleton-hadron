---
title: Installation | Skeleton
slug: installation
menu: Installation
subtitle: Diese Seite beschreibt die verschiedenen Wege, das Hadron Skeleton zu installieren und führt dich durch die Installation des Skeletons für eine neue Grav Site.
sitemap:
    changefreq: yearly
    priority: 0.5
    lastmod: 02-07-2026
date: 02-07-2026
taxonomy:
    category: [ Dokumentation, Hadron, Skeleton ]
    tag: [ Anfänger, Experte, Installation, Skeleton ]
custom_hero_header_image: "media://logo/hadron-logo.svg"
---

## Installation
Es gibt grundsätzlich zwei Methoden, um das Hadron Skeleton zu installieren: Schau dir die Quick Start Methoden [Installation (für Entwickler)](#installation-fuer-entwick) & [Installation (für Anfänger)](#installation-fuer-anfaeng) an.

## Installation (für Entwickler)
Wenn du mit Git Änderungen am Skeleton vornehmen möchtest, ist das Klonen des Repositories der bequemste Weg. So kannst du einfach Updates und Änderungen aus dem Original Repository übernehmen. Es gibt mehrere Varianten, je nachdem, was du mit dem Skeleton machen möchtest:

### Erstelle aus der Vorlage (empfohlen)
Wenn du ein neues Repository basierend auf diesem Skeleton erstellen möchtest, kannst du den `Use this template` Button auf der GitHub Repository Seite verwenden. Dies erstellt ein neues Repository in deinem Account basierend auf dem Skeleton. Du wirst aber nicht in der Lage sein, Updates aus dem Original Repository zu übernehmen. <br />
_Dies ist der empfohlene Weg, wenn du eine neue Site basierend auf diesem Skeleton entwickeln möchtest und nicht planst, zum Original Skeleton beizutragen oder Updates von ihm zu übernehmen._

Um ein neues Repository basierend auf diesem Skeleton zu erstellen, klicke den `Use this template` Button auf der GitHub Repository Seite. Du wirst aufgefordert, einen Repository Namen und eine Beschreibung einzugeben. Danach hast du eine aktuelle Kopie des Skeletons in deinem Account. Du kannst das Repository jetzt auf deinen Computer klonen und anfangen, deine Site zu entwickeln.

> [!Note]
> Du musst das Repository in den `user` Ordner deiner Grav Installation (Grav Core) klonen. Siehe unten wie du das machst.

### Erstelle einen Fork
Indem du dieses Repository forkst, erstellst du eine verlinkte Kopie des Original Repositories in deinem eigenen GitHub Account. So kannst du Änderungen am Skeleton vornehmen und sie in dein eigenes Repository pushen. Du kannst dann eine neue Site mit deinem Fork als Skeleton erstellen. <br />
_Dies ist der empfohlene Weg, wenn du zum Original Skeleton beitragen möchtest oder Updates von ihm übernehmen möchtest._

Um das Repository zu forken, klicke den `Fork` Button auf der GitHub Repository Seite. Du hast jetzt eine Kopie des Skeletons in deinem Account. Du kannst das Repository auf deinen Computer klonen und anfangen, deine Site zu entwickeln.

> [!Note]
> Du musst das Repository in den `user` Ordner deiner Grav Installation (Grav Core) klonen. Siehe unten wie du das machst.

### Klone das Repository direkt (nicht empfohlen)
Das direkte Klonen des Repositories erstellt eine lokale Kopie des Skeletons auf deinem Computer.
_Dies ist nur empfohlen, wenn du das Skeleton ausprobieren möchtest oder Änderungen daran vornehmen möchtest, ohne zum Original Repository beizutragen oder Updates von ihm zu übernehmen. Wenn du lieber eine neue Website basierend auf dem Skeleton erstellen möchtest, verwende eine der obigen Methoden._

Um das Repository direkt zu klonen, nutze die folgenden Befehle:
```bash
cd /your/preferred/directory
git clone https://github.com/Crabston/grav.git .
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
```

## Installation (für Anfänger)
Wenn du neu in Grav / Website Entwicklung / Programmierung bist, kannst du das Skeleton als ZIP Datei herunterladen und manuell installieren. Du kannst zwei verschiedene Versionen des Skeletons herunterladen:

### Lade ZIP Datei herunter
Wenn du das Skeleton herunterlädst, erhältst du eine ZIP Datei, die den Grav Core, Plugins und Themes enthält, die benötigt werden, um das Skeleton auszuführen. Dies ist der einfachste Weg, um mit dem Skeleton anzufangen, da du alles hast, was du brauchst, um es auszuführen.

Um das Skeleton herunterzuladen, gehe zur [Releases Seite](https://github.com/Crabston/grav-skeleton-hadron/releases) und lade die neueste Version mit Abhängigkeiten herunter. Du kannst die Datei dann in das Root Verzeichnis deines Servers / Computers entpacken.

## Starte den Server
Öffne die Konsole auf deinem Computer (CMD / Terminal), navigiere zu deinem Grav Ordner mit `cd` und führe die unten stehenden Befehle aus:
```bash
bin/grav install
bin/grav server
```

Dies startet einen kleinen Webserver auf deinem Gerät, und du kannst die Website mit der bereitgestellten URL besuchen (in den meisten Fällen `http://127.0.0.1:8000`). Navigiere zu `/admin` und erstelle einen lokalen Account.

## Nächste Schritte
Nach der Installation des Skeletons kannst du [anfangen, deine Website einzurichten](/docs/skeleton/setup).
