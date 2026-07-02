---
title: Anpassung | Theme
slug: anpassung
menu: Anpassung
subtitle: Diese Seite zeigt dir, wie du das Hadron Theme anpassen kannst. Wenn du das Theme anpasst, machst du mehr als nur ein paar Optionen zu ändern; du veränderst das Aussehen deiner Website, indem du den Quellcode des Themes bearbeitest (CSS/SCSS, JavaScript, Twig).
sitemap:
    changefreq: yearly
    priority: 0.5
    lastmod: 02-07-2026
date: 02-07-2026
taxonomy:
    category: [ Dokumentation, Hadron, Theme ]
    tag: [ Experte, Anpassung, Theme ]
custom_hero_header_image: "media://logo/hadron-logo.svg"
---

> [!WARNING]
> Da du möglicherweise CSS/SCSS, JavaScript und Twig Dateien bearbeitest, wird empfohlen, einige Kenntnisse in diesen Sprachen zu haben. Wenn du damit nicht vertraut bist, kannst du das Theme trotzdem anpassen, indem du die Theme Optionen im Admin Panel änderst. Siehe [Hadron Theme Optionen](/docs/theme/optionen) für weitere Informationen.

> [!TIP]
> Wir empfehlen nicht, das Theme direkt anzupassen, da Updates des Themes deine Änderungen überschreiben würden. Eine empfohlene Methode ist es, ein Child Theme zu erstellen. <br />
> Siehe [Abschnitt Hadron Customizer](#hadron-customizer) unten für weitere Informationen.

## Varianten zum Anpassen des Themes
In Grav gibt es mehrere Möglichkeiten, ein Theme anzupassen (siehe [Grav Docs](https://learn.getgrav.org/20/themes/customization) für weitere Informationen). Im Grunde gibt es zwei Wege, das Hadron Theme anzupassen:
1. Den Quellcode des Themes direkt bearbeiten _(nicht empfohlen)_: Du kannst den gesamten Quellcode eines Themes direkt bearbeiten. Obwohl dies der einfachste Weg ist, ein Theme anzupassen, wird dies nicht empfohlen, da du deine Änderungen verlierst, wenn du das Theme aktualisierst.
2. Ein Child Theme oder vererbtes Theme verwenden _(empfohlen)_: Du kannst ein Child Theme erstellen, das vom Hadron Theme erbt. Auf diese Weise kannst du das Theme anpassen, ohne deine Änderungen zu verlieren, wenn du das Theme aktualisierst. (Hadron selbst ist ein Child Theme von Quark.)

## Hadron Customizer
**Wenn du unser [Hadron Skeleton](/docs/skeleton) nutzt, hast du das _Hadron Customizer_ (`custom`) Theme dabei, das als vorkonfiguriertes Child Theme von Hadron fungiert.** Es enthält auch andere typische Skeleton Daten, wie Konfigurationen, Seiten, Plugins und mehr. Wenn du dich nur für die Theme Anpassung interessierst, empfehlen wir, einfach das `user/themes` Verzeichnis zu verwenden. <br />
So bleiben deine Änderungen bestehen, wenn du das Hadron Theme aktualisierst – wir passen alle unsere erstellten Websites auf diese Weise an.

Das _Hadron Customizer_ (`custom`) Theme ist genau das, was es klingt: Ein Child Theme von Hadron, das für einen Zweck gemacht ist – das gesamte Hadron Theme einfach anzupassen. Es ist genauso strukturiert wie das Hadron Theme und kann ohne Änderungen daran aktiviert werden. Es nutzt Hadron als Fallback, wenn es (noch) nicht konfiguriert ist, wie zum Beispiel bei Vorlagen und Styles. So kannst du beginnen, es anzupassen, nachdem du es aktiviert hast.

> [!CAUTION]
> Durch das Aktualisieren von Hadron ist es möglich, dass einige Konfigurationen das Theme beschädigen. Dies ist der Fall, wenn du Templates, Stile oder Konfigurationen überschreibst. Es wird jedoch nie deine Änderungen löschen; du musst möglicherweise nur deine Änderungen anpassen, um sie an die aktualisierte Version von Hadron anzupassen.

### CSS / SCSS Stile anpassen
Passe CSS / SCSS an, um benutzerdefinierte Stile auf deiner Website anzuwenden.

Bearbeite einfach die Datei `user/themes/custom/css/custom.css` und wende deine eigenen Stile an. Sie werden bereits auf deiner Website angewendet. Bedenke, dass du, wenn Stile nicht angewendet werden, CSS Selektoren spezifischer sein müssen, oder `!important` zu deinen Regeln hinzufügen musst.

Für mehr Möglichkeiten kannst du die Datei `user/themes/custom/scss/custom.scss` bearbeiten, zum Beispiel wenn du die SCSS Variablen und Mixins von Hadron nutzen möchtest. Füge deine Stile einfach zu der Datei `custom.scss` oder deren Module hinzu. Es gibt ein Modul `_theme.scss` für vordefinierte Variablen von Hadron und ein Modul `_styles` zum Nutzen.

Um SCSS / SASS zu kompilieren, gibt es bereits einen Build Prozess mit gulp (`gulpfile.js`). Führe `npm i` im Root Verzeichnis des `user/themes/custom` Verzeichnisses aus, um Abhängigkeiten zu installieren. Danach kannst du verschiedene Befehle über npm ausführen:
- `npm run compileStyles`: Kompiliert SCSS zu CSS
- `npm run compressCSS`: Komprimiert das kompilierte CSS
- `npm run buildCSS`: Führt zuerst compileSCSS aus, dann compressCSS
- `npm run watchCSS`: Führt compileSCSS und compressCSS mit Dateibeobachter aus, um auf Änderungen zu reagieren

Dies kompiliert auch `hadron.scss`, um deine geänderten Variablen anzuwenden und verwendet diese statt der ursprünglichen `hadron.css` auf der Website.

> [!CAUTION]
> Bedenke, dass wenn du SCSS kompilierst, alle manuell gemachten Änderungen an `custom.css` überschrieben werden. Kopiere deine CSS Stile zu SCSS, bevor du wechselst!

### JavaScript / TypeScript anpassen
Passe JavaScript oder TypeScript Dateien an, um benutzerdefinierte Funktionalität auf deiner Website anzuwenden.

Bearbeite einfach die Datei `user/themes/custom/js/custom.js` und wende deine eigenen Skripte an. Sie werden bereits auf deiner Website angewendet. Du kannst auch die Datei `user/themes/custom/ts/custom.ts` bearbeiten, um benutzerdefinierte TypeScript Funktionalität anzuwenden.

Um TypeScript zu kompilieren, gibt es bereits einen Build Prozess mit gulp (`gulpfile.js`). Führe `npm i` im Root Verzeichnis des `user/themes/custom` Verzeichnisses aus, um Abhängigkeiten zu installieren. Danach kannst du verschiedene Befehle über npm ausführen:
- `npm run compileTypescript`: Kompiliert TypeScript zu JavaScript
- `npm run compressJavascript`: Komprimiert das kompilierte JavaScript
- `npm run buildJS`: Führt zuerst compileTypescript aus, dann compressJavascript
- `npm run watchJS`: Führt compileTypescript und compressJavascript mit Dateibeobachter aus, um auf Änderungen zu reagieren

> [!CAUTION]
> Bedenke, dass wenn du TypeScript kompilierst, alle manuell gemachten Änderungen an `custom.js` überschrieben werden. Kopiere dein JavaScript Code zu TypeScript, bevor du wechselst!

### Twig Vorlagen anpassen
Passe Twig Vorlagen an, um das Layout deiner Seiten aus dem generierten HTML zu verändern, oder erstelle neue Seitentypen mit deiner eigenen Logik.

Um eine Vorlage zu bearbeiten, kopiere einfach das gewünschte Template vom Hadron / Quark2 Theme zum Hadron Customizer Theme mit der gleichen Struktur: zum Beispiel kopiere `user/themes/hadron/templates/partials/base.html.twig` zu `user/themes/custom/templates/partials/base.html.twig`. <br />
Um einen neuen Seitentyp zu erstellen, erstelle eine neue Vorlage Datei im `user/themes/custom/templates` Verzeichnis. Für modulare Seitentypen nutze `user/themes/custom/templates/modular`.

### Theme Optionen anpassen
Passe Theme Optionen an, indem du `user/themes/custom/blueprints.yaml` bearbeitest. Dies ändert die Konfigurationsoptionen des Hadron Customizer Themes im Admin.

Siehe [Blueprints in Grav Docs](https://learn.getgrav.org/20/forms/blueprints#themes-and-plugins) für weitere Informationen.

### Übersetzungen anpassen
Um neue oder bestehende Übersetzungsschlüssel hinzuzufügen oder zu ändern, erstelle und bearbeite die Datei `user/themes/custom/languages.yaml`. Füge den gewünschten Sprachcode hinzu und darunter den Schlüssel:
```yaml
de:
  ICU:
    ADMIN_NEXT:
      SETTINGS:
        GRAV_LOGO: Grav Logo
## ODER
DE.ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO: Grav Logo
```
Dies setzt `ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO` auf 'Grav Logo' für die deutsche Sprache.

Du könntest auch eine Sprachdatei für jede Sprache erstellen, z.B. `user/themes/custom/translations/de.yaml`:
```yaml
ICU:
  ADMIN_NEXT:
    SETTINGS:
      GRAV_LOGO: Grav Logo
## ODER
ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO: Grav Logo
```
Dies setzt `ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO` auf 'Grav Logo' für die deutsche Sprache.

Um eine Übersetzung irgendwo hinzuzufügen, kannst du einen gültigen Übersetzungsschlüssel wie `ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO` in eine `blueprints.yaml` Datei einfügen, oder ihn in Twig wie folgt nutzen: `{{ ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO | t }}`.

Siehe [Twig Filter `t` & `tl` in Grav Docs](https://learn.getgrav.org/20/themes/twig-tags-filters-functions/functions#t)

### Andere Funktionalität anpassen
Du kannst auch andere Funktionalitäten des Hadron Themes anpassen, indem du einen beliebigen Teil des Hadron Customizer Themes oder Grav bearbeitest. Siehe [Theme Customization in Grav Docs](https://learn.getgrav.org/20/themes/customization).

## Andere Wege
Wenn du lieber nicht das Hadron Skeleton / Hadron Customizer nutzen möchtest, kannst du auch manuell ein Child Theme erstellen. Für weitere Informationen, siehe die [Grav Docs](https://learn.getgrav.org/20/themes/customization#theme-inheritance). Dies ist hilfreich, wenn du bereits eine Grav Installation hast und das Hadron Theme dazu addieren möchtest. Aber wenn du eine neue Website mit Grav und Hadron erstellen möchtest, könnte das Skeleton die bessere Wahl sein.

Trotzdem kann es nützlich sein, einige Teile des Hadron Customizer Themes zu übernehmen, um die Anpassungen zu erleichtern. Du findest den Code im [Hadron Skeleton auf GitHub unter `themes/custom`](https://github.com/Crabston/grav-skeleton-hadron/tree/main/themes/custom).
