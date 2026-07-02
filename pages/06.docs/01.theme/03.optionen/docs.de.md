---
title: Optionen | Theme
slug: optionen
menu: Optionen
subtitle: Diese Seite zeigt, wie du das Hadron Theme nach deinen Wünschen konfigurieren kannst. Das Theme kann per Datei oder über das Admin Panel konfiguriert werden.
sitemap:
    changefreq: yearly
    priority: 0.5
    lastmod: 02-07-2026
date: 02-07-2026
taxonomy:
    category: [ Dokumentation, Hadron, Theme ]
    tag: [ Anfänger, Experte, Optionen, Theme ]
custom_hero_header_image: "media://logo/hadron-logo.svg"
---

## Theme Optionen
Das Hadron Theme bietet verschiedene Optionen, um das Aussehen und Verhalten der Seite anzupassen. Diese Optionen kannst du im Admin Panel konfigurieren oder indem du die Theme Konfigurationsdatei bearbeitest.

## Admin Panel
Um das Theme zu konfigurieren, navigiere im Admin Panel zu `Themes` und wähle das `Hadron` Theme aus:
![Hadron im Admin Panel](admin-themes.de.webp?lightbox)

Hier findest du die Theme Optionen, gruppiert in verschiedene Kategorien:
![Hadron Theme Optionen im Admin Panel](admin-hadron-settings.de.webp?lightbox)

### Erscheinungsbild
- **Voreinstellung Designmodus**: Legt den Standard Modus für das Theme fest. Optionen sind `Automatisch`, `Hell` und `Dunkel`. Wähle `Automatisch`, damit zwischen Hell und Dunkelmodus basierend auf den Systemeinstellungen des Benutzers gewechselt wird.
- **Akzentfarbe**: Legt die Akzentfarbe des Themes fest. Dies kann jeder gültige CSS HEX Farbwert sein.
_Branding_
  - **Benutzerdefiniertes Favicon**: Lade ein eigenes Favicon für die Seite hoch. Das Favicon ist das kleine Symbol im Browser Tab und in Lesezeichen.
  - **Einfarbiges Logo**: Aktiviere oder deaktiviere ein monochromes Logo, das sich je nach Theme Modus (hell/dunkel) ändert. Nur empfohlen, wenn du ein einfarbiges Logo hast.
  - **Benutzerdefiniertes Logo**: Lade ein eigenes Logo für die Header Navigation hoch
  - **Benutzerdefiniertes Logo (Mobile Ansicht)**: Lade ein eigenes Logo für die Header Navigation in der mobilen Ansicht hoch
_Header Einstellungen_
  - **Fixierter Header**: Aktivieren oder deaktivieren eines fixierten Headers.
  - **Header animieren**: Aktivieren oder deaktivieren einer Header Animation beim Scrollen
  - **Transparenter Header (Hero)**: Aktivieren oder deaktivieren eines transparenten Headers auf Hero Seiten
_Footer Einstellungen_
  - **Fester Footer**: Wenn aktiviert, bleibt der Footer immer am unteren Rand der Seite, auch wenn der Inhalt nicht lang genug ist, um die Ansicht auszufüllen.

### Menü
- **Titel ausblenden**: Aktivieren oder deaktivieren des Seitentitels in der Header Navigation.
- **Dropdowns im Menü anzeigen**: Aktivieren oder deaktivieren eines Dropdown Menüs in der Header Navigation. Wenn aktiviert, werden Unterseiten in einem Dropdown unter der Elternseite angezeigt.
- **Benutzerdefinierte Menüelemente anzeigen**: Aktivieren oder deaktivieren eigener Menüs in der Header Navigation. Wenn aktiviert, kannst du eigene Menüeinträge hinzufügen.
- **Benutzerdefinierte Menüelemente**: Füge eigene Menüeinträge für die Header Navigation hinzu. Du kannst für jeden Eintrag einen Titel, eine URL und optional ein Font Awesome Icon angeben.

### Funktionen
_Symbole (Fontawesome)_
  - **Font Awesome 7**: Aktivieren oder deaktivieren der Verwendung von Font Awesome Icons (V7). Wenn deaktiviert, werden keine Font Awesome Icons auf der gesamten Website angezeigt.
  - **Font Awesome lokal bereitstellen**: Aktivieren oder deaktivieren, ob Font Awesome lokal bereitgestellt wird. Wenn aktiviert, erwartet das Theme `css/fontawesome/all.min.css` im Theme Verzeichnis. Andernfalls wird das offizielle CDN verwendet.
_Sprachauswahl_
  - **Sprachauswahl aktivieren**: Aktiviere oder deaktiviere die Sprachauswahl in der Header Navigation. Wenn aktiviert, kannst du zwischen verschiedenen Sprachen wechseln, sofern die Seite für Mehrsprachigkeit konfiguriert ist.
  - **Anzeigestil**: Wähle den Anzeigestil für die Sprachauswahl. Optionen sind `dropdown` und `inline`.
  - **Format**: Wähle das Format für die Sprachauswahl. Optionen sind `Flagge`, `Name`, `Kurzform` oder `Kombiniert`.
_Blog Optionen_
  - **Blog Seitenroute**: Setze die Route zur Blog Seite.
_H5P Einrichtung_
  - **H5P Einbettungsquellen URL**: Setze den Root Pfad für H5P Embed Dateien. Wenn nicht gesetzt, wird das öffentliche H5P CDN verwendet.

## Konfigurationsdatei
Alle oben genannten Einstellungen kannst du auch per Datei konfigurieren. Die Konfigurationsdatei befindet sich unter `user/config/themes/hadron.yaml`. Die Datei enthält standardmässig folgende Einstellungen:

```yaml
theme-mode: auto            # Farbmodus für das Theme, Optionen sind: `auto`, `light` und `dark`
accent-color: '#242424'     # Die Akzentfarbe des Themes, kann jeder gültige CSS HEX Farbwert sein
monochrome-logo: false      # Falls true, wird das Logo einfarbig und ändert sich je nach Theme Modus (hell/dunkel)
favicon:                    # Benutzerdefiniertes Favicon
  user/themes/hadron/images/favicon.svg: # Pfad zum Favicon
    name: favicon.svg       # Name der Datei
    full_path: favicon.svg  # Vollständiger Pfad zur Datei
    type: image/svg+xml     # Dateityp
    size: 4868              # Dateigrösse
    path: user/themes/hadron/images/favicon.svg
custom_logo:                # Benutzerdefiniertes Logo für die Header Navigation
  user/themes/hadron/images/logo/logo.svg:
    name: logo.svg
    full_path: logo.svg
    type: image/svg+xml
    size: 4868
    path: user/themes/hadron/images/logo/logo.svg
custom_logo_mobile:         # Benutzerdefiniertes Logo für die mobile Navigation
  user/themes/hadron/images/logo/logo.svg:
    name: logo.svg
    full_path: logo.svg
    type: image/svg+xml
    size: 4868
    path: user/themes/hadron/images/logo/logo.svg
header-fixed: true          # Fixiert den Header oben im Browser
header-animated: true       # Ermöglicht dem Header, beim Scrollen kleiner zu werden mit einer Animation
header-transparent: false   # Ermöglicht dem Header, transparent über der Seite zu sein (nur für Hero Elemente)
sticky-footer: true         # Fixiert den Footer am unteren Rand der Seite
hide_title: false           # Blendet den Seitentitel in der Header Navigation aus
dropdown.enabled: true      # Aktiviert die Dropdown Navigation
custommenus.enabled: true   # Aktiviert benutzerdefinierte Menüs in der Header Navigation
menu:                       # Setzt benutzerdefinierte Menüelemente für die Header Navigation als Array
  - text: Grav              # Der Text / Titel für das Menüelement
    icon: external-link     # Das Font Awesome Icon für das Menüelement
    url: ''                 # Die URL für das Menüelement
    target: _blank          # Das Ziel für das Menüelement, z.B. _blank zum Öffnen in einem neuen Tab
fontawesome.enabled: true   # Aktiviert die Verwendung von Font Awesome Icons (V7)
langswitcher:               # Einstellungen für die Sprachauswahl in der Header Navigation
  enable: true              # Aktiviert die Sprachauswahl in der Header Navigation
  display: inline           # Der Anzeigestil für die Sprachauswahl, Optionen sind: `dropdown` und `inline`
  format: icon              # Das Format für die Sprachauswahl, Optionen sind: `flag`, `name`, `shortcode` oder `combined`
blog-page: /blog            # Die Route zur Blog Seite
h5pembedrootpath: ''        # Der Root Pfad für H5P Embed Dateien, falls nicht gesetzt wird das öffentliche H5P CDN verwendet
```
