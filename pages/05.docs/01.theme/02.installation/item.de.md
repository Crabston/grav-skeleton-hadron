---
title: Installation | Hadron Theme
menu: Installation
slug: installation
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 08-10-2024
date: 08-10-2024
taxonomy:
  category: Hadron
  tag: [ Theme, Installation ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-light overlay-dark parallax'
---

!!! Diese Anleitung zeigt die verschiedenen Möglichkeiten, um das Hadron Theme zu installieren und leitet dich durch die Installation des Hadron Themes auf einer bestehenden Grav Seite.

===

## Installation
Das Hadron Theme kann auf verschiedene Arten installiert werden. Die Installation via den GPM (Grav Package Manager) ermöglicht eine schnelle und einfache Installation des Themes mit einem einfachen Terminalbefehl, während die manuelle Methode die Installation über eine Zip-Datei ermöglicht. Es gibt auch eine Möglichkeit, das Theme via Git oder über das Admin Plugin zu installieren.

Das Theme selber ist nützlich, jedoch kann es einfacher sein, eine Website mit dem Hadron Skeleton zu erstellen. Das Hadron Theme ist im [Hadron Skeleton](https://github.com/Crabston/grav-skeleton-hadron) enthalten, welches eine vollständige Website beinhaltet. Dieses beinhaltet: Beispiele für Inhalte, Konfigurationen, Themes und Plugins.

### 1. GPM Installation (empfohlen)
_Diese Methode wird aktuell noch nicht unterstützt, da das Theme noch nicht im GPM verfügbar ist. Bitte nutze eine andere Methode._

Der einfachste Weg, dieses Theme zu installieren, ist über den [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) in deinem System-Terminal (auch Kommandozeile genannt). Tippe dazu im Root-Verzeichnis deiner Grav Installation folgenden Befehl:

```shell
bin/gpm install hadron
```

Dieser Befehl installiert das Hadron Theme in deinem `/user/themes` Verzeichnis innerhalb von Grav. Die Dateien des Themes können unter `/deine/seite/grav/user/themes/hadron` gefunden werden.

Der Vorzug dieser Methode ist, dass du das Theme mit einem einfachen Befehl aktualisieren kannst:

```shell
bin/gpm update hadron
```

### 2. Git Installation
Als Alternative kannst du das Theme auch über Git installieren. Gehe dazu in dein `/user/themes` Verzeichnis und führe folgenden Befehl aus:

```shell
git clone https://github.com/Crabston/grav-theme-hadron.git hadron
```

Das Theme sollte nun im Verzeichnis `/deine/seite/grav/user/themes/hadron` zu finden sein.

Um das Theme zu aktualisieren, kannst du einfach in das Theme-Verzeichnis wechseln und `git pull` ausführen:

```shell
cd /deine/seite/grav/user/themes/hadron
git pull
```

### 3. Admin Plugin Installation
_Diese Methode wird aktuell noch nicht unterstützt, da das Theme noch nicht im GPM verfügbar ist. Bitte nutze eine andere Methode._

Wenn du das [Admin Plugin](https://github.com/getgrav/grav-plugin-admin) nutzt, kannst du das Theme direkt über das Admin Plugin installieren. Gehe dazu in den Bereich `Themes` und klicke auf `Add` und suche nach `hadron`. Wähle das Theme aus und klicke auf `Install`.

Das Theme wird nun in deinem `/user/themes` Verzeichnis installiert. Zudem kann es über das Admin Plugin aktualisiert werden, wenn eine neue Version verfügbar ist.

### 4. manuelle Installation (nicht empfohlen)
Um das Theme manuell zu installieren, lade einfach die Zip-Version dieses Repositories herunter und entpacke sie unter `/deine/seite/grav/user/themes`. Benenne den Ordner dann in `hadron` um. Die Dateien des Themes können entweder auf [GitHub](https://github.com/Crabston/grav-theme-hadron) oder über [GetGrav.org](http://getgrav.org/downloads/themes) gefunden werden.

Du solltest nun alle Theme-Dateien unter `/deine/seite/grav/user/themes/hadron` haben.

## weitere Schritte
Nach der Installation des Themes, kannst du das Theme in der `Grav Admin` Oberfläche aktivieren. Gehe dazu in den Bereich `Themes` und wähle `Hadron` aus. Klicke auf `Activate` um das Theme zu aktivieren.

Das Theme ist nun aktiviert und sollte auf deiner Seite sichtbar sein. Du kannst nun die Theme-Einstellungen anpassen und die Seite nach deinen Wünschen gestalten. Lerne mehr über die [Theme Optionen](/hadron/theme/optionen).
