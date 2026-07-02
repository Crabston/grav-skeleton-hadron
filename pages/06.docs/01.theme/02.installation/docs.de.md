---
title: Installation | Theme
slug: installation
menu: Installation
subtitle: Diese Seite zeigt verschiedene Wege, das Hadron Theme zu installieren und führt dich durch die Installation auf einer vorhandenen Grav Seite.
sitemap:
    changefreq: yearly
    priority: 0.5
    lastmod: 02-07-2026
date: 02-07-2026
taxonomy:
    category: [ Dokumentation, Hadron, Theme ]
    tag: [ Anfänger, Experte, Installation, Theme ]
custom_hero_header_image: "media://logo/hadron-logo.svg"
---

## Installation
Das Hadron Theme kannst du auf verschiedene Arten installieren. Die GPM Installation ermöglicht dir, das Theme schnell und einfach mit einem Terminal Befehl zu installieren, während die manuelle Methode das Entpacken einer ZIP Datei verwendet. Es gibt weitere Methoden, zum Beispiel die Installation über das Admin Plugin oder via Git.

Das Theme alleine ist nützlich, aber es kann einfacher sein, mit einem Skeleton zu starten. Sieh dir das [Hadron Skeleton Repository](https://github.com/Crabston/grav-skeleton-hadron) oder die [Hadron Skeleton Docs](/docs/skeleton) an. Das Skeleton ist ein eigenständiges Repository für eine komplette Seite und enthält Beispiel Inhalte, Seitentemplates, Konfiguration, Theme und Plugins und vieles mehr.

### 1. GPM Installation (empfohlen)
Die einfachste Art, dieses Theme zu installieren, ist über den [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) im Terminal. Wechsle ins Stammverzeichnis deiner Grav Installation und tippe:

```shell
bin/gpm install hadron
```

Dieser Befehl installiert das Hadron Theme in deinem `/user/themes` Verzeichnis innerhalb von Grav. Die Theme Dateien findest du unter `/dein/website/pfad/grav/user/themes/hadron`.

Der Hauptvorteil dieser Methode ist, dass du das Theme mit einem einfachen Befehl aktualisieren kannst:

```shell
bin/gpm update hadron
```

### 2. Admin Plugin Installation
Wenn du das [Admin Plugin](https://github.com/getgrav/grav-plugin-admin) oder [Admin2 Plugin](https://github.com/getgrav/grav-plugin-admin2) verwendest, kannst du das Theme direkt über das Admin Plugin installieren. Gehe zum Bereich `Designs`, klicke auf `Hinzufügen` und suche nach `hadron`. Wähle das Theme und klicke auf `Installieren`.

Das Theme wird nun in deinem `/user/themes` Verzeichnis installiert. Es kann auch über das Admin Plugin aktualisiert werden, wenn eine neue Version verfügbar ist.

### 3. Git Installation
Alternativ kannst du das Theme auch via Git installieren. Wechsle in dein Grav Stammverzeichnis und führe folgenden Befehl aus:

```shell
git clone https://github.com/Crabston/grav-theme-hadron.git /user/themes/hadron
```

Das Theme findest du danach im Verzeichnis `/dein/website/pfad/grav/user/themes/hadron`.

Um das Theme zu aktualisieren, wechsle ins Theme Verzeichnis und führe `git pull` aus:

```shell
cd dein/website/pfad/grav/user/themes/hadron
git pull
```

### 4. Manuelle Installation (nicht empfohlen)
Um das Theme manuell zu installieren, lade die ZIP Version dieses Repositories herunter und entpacke sie unter `dein/website/pfad/grav/user/themes/`. Benenne anschliessend den Ordner in `hadron` um. Die Design Dateien sind auf [GitHub](https://github.com/Crabston/grav-theme-hadron) oder auf [GetGrav.org](http://getgrav.org/downloads/themes) verfügbar.

Du hast nun alle Theme Dateien unter `dein/website/pfad/grav/user/themes/hadron`.

## Nächste Schritte
Nach der Installation kannst du das Theme im Grav Admin aktivieren. Gehe dazu in den Bereich `Designs`, wähle `Hadron` und klicke auf `Aktivieren`.

Das Theme ist nun aktiviert und sollte auf deiner Seite sichtbar sein. Du kannst jetzt die Theme Einstellungen anpassen und das Layout nach deinen Wünschen gestalten. Erfahre mehr über die [Theme Optionen](/docs/theme/optionen).
