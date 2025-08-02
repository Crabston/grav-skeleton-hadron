---
title: Installation | Hadron Skeleton
menu: Installation
slug: installation
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 08-10-2024
date: 08-10-2024
taxonomy:
  category: Hadron
  tag: [ Skeleton, Installation ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-light overlay-dark parallax'
---

!!! Diese Anleitung beschreibt die verschiedenen Möglichkeiten, das Hadron Skeleton zu installieren und leitet dich durch die Installation des Skeletons für eine neue Grav Seite.

===

## Installation
Das Hadron Skeleton kann auf verschiedene Arten installiert werden.

## Methoden
Es gibt grundlegend zwei Methoden, das Skeleton zu installieren: via Git oder als ZIP-Datei. Beide Methoden haben ihre Vor- und Nachteile, je nachdem, wie du das Skeleton verwenden möchtest. Zudem gibt es verschiedene Varianten, wie du das Skeleton installieren kannst, je nachdem, ob du das Skeleton bearbeiten oder nur verwenden möchtest.

## 1. Installation (Git)
Wenn du das Skeleton mit Git bearbeiten möchtest, ist das einfachste, das Repository zu klonen. So kannst du einfach Updates und Änderungen aus dem Original-Repository ziehen. Es gibt verschiedene Varianten, je nachdem, was du mit dem Skeleton machen möchtest:

### 1.1 Repository kopieren (empfohlen)
Wenn du ein neues Repository basierend auf diesem Skeleton erstellen möchtest, kannst du den `Nutze diese Vorlage` Knopf auf der GitHub Repository Seite verwenden. Dies erstellt ein neues Repository in deinem Account basierend auf dem Skeleton. Du wirst jedoch keine Updates aus dem Original-Repository ziehen können.
_Dies ist der empfohlene Weg, wenn du eine neue Seite basierend auf diesem Skeleton entwickeln möchtest und nicht planst, zum ursprünglichen Skeleton beizutragen oder Updates daraus zu ziehen._

Um ein neues Repository basierend auf diesem Skeleton zu erstellen, klicke auf den `Nutze diese Vorlage` Knopf auf der GitHub Repository Seite. Du wirst aufgefordert, einen Repository-Namen und eine Beschreibung einzugeben. Danach hast du eine aktuelle Kopie des Skeletons in deinem Account. Du kannst nun das Repository auf deinen Computer klonen und mit der Entwicklung deiner Seite beginnen.

!!! Siehe Punkt 1.3, wie du das Repository auf deinen Computer klonen kannst (mit Grav)

### 1.2 Repository forken
Durch das forken dieses Repositorys erstellst du eine verknüpfte Kopie des ursprünglichen Repositorys in deinem eigenen GitHub Account. Auf diese Weise kannst du Änderungen am Skeleton vornehmen und sie in dein eigenes Repository pushen. Du kannst dann eine neue Seite erstellen, indem du dein Fork als Skeleton verwendest.
_Dies ist der empfohlene Weg, wenn du zum ursprünglichen Skeleton beitragen oder Updates daraus ziehen möchtest._

Um das Repository zu forken, klicke auf den `Fork` Knopf auf der GitHub Repository Seite. Du hast nun eine Kopie des Skeletons in deinem Account. Du kannst das Repository auf deinen Computer klonen und mit der Entwicklung deiner Seite beginnen.

!!! Siehe Punkt 1.3, wie du das Repository auf deinen Computer klonen kannst (mit Grav)

### 1.3 Repository direkt klonen (nicht empfohlen)
Das direkte Klonen des Repositorys erstellt eine lokale Kopie des Skeletons auf deinem Computer.
_Dies ist nur empfohlen, wenn du das Skeleton ausprobieren oder Änderungen daran vornehmen möchtest, ohne zum ursprünglichen Repository beizutragen oder Updates daraus zu ziehen. Wenn du lieber eine neue Seite basierend auf dem Skeleton erstellen möchtest, verwende eine der oben genannten Methoden._

Um das Repository direkt zu klonen, verwende die folgenden Befehle:
```bash
cd /deine/seite/
git clone https://github.com/getgrav/grav.git .
rm user/ -rf
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
bin/grav install
```

Du kannst auch unseren [modifizierten Grav Core](https://github.com/Crabston/grav) mit zusätzlichen Funktionen verwenden:
```bash
cd /deine/seite/
git clone https://github.com/Crabston/grav.git .
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
bin/grav install
```

## 2. Installation (ZIP)
Wenn du Git nicht verwenden möchtest, kannst du das Skeleton als ZIP-Datei herunterladen und manuell installieren. Es gibt zwei verschiedene Versionen des Skeletons:

### 2.1 mit Abhängigkeiten
Wenn du das Skeleton mit Abhängigkeiten herunterlädst, erhältst du eine ZIP-Datei, die den Grav Core, Plugins und Themes enthält, die zum Ausführen des Skeletons erforderlich sind. Dies ist der einfachste Weg, um mit dem Skeleton zu beginnen, da du alles hast, was du zum Ausführen benötigst.

Um das Skeleton mit Abhängigkeiten herunterzuladen, gehe zur [Releases Seite](https://github.com/Crabston/grav-demo/releases) und lade die neueste Version herunter. Du kannst dann die Datei in das Root-Verzeichnis deines Servers entpacken.

### 2.2 manuell (nicht empfohlen)
Um dieses Paket manuell zu installieren, ersetzt du im Grunde den Standard `user` Ordner durch das Skeleton. Lade dazu die ZIP-Version dieses Repositorys herunter und entpacke sie unter `/deine/seite/grav/`. Benenne dann den Ordner in `user` um.

Wenn bereits ein `user` Ordner vorhanden ist, sichere ihn an einem sicheren Ort, lösche ihn (wenn sich keine benutzerdefinierten Inhalte darin befinden, die du behalten möchtest) oder ersetze seinen Inhalt durch die Dateien im entpackten Ordner.

Du solltest nun alle Skeleton-Dateien unter `/deine/seite/grav/user/` haben.

!!! Dieses Skeleton ist ein modulares Komponente für Grav, die [Grav](http://github.com/getgrav/grav), mehrere Plugins und Themes erfordert, um zu funktionieren. Wenn du dieses Skeleton als Teil eines vorgefertigten Pakets von [GetGrav.org](http://getgrav.org/downloads/skeletons#extras) oder [GitHub Releases](https://github.com/Crabston/grav-demo/releases) herunterlädst, solltest du alles haben, was du zum Starten benötigst.

## weitere Schritte
Nach der Installation des Skeletons kannst du mit der Entwicklung/ Bearbeitung deiner Seite beginnen.
