---
title: Optionen | Hadron Theme
menu: Optionen
slug: optionen
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

!!! Diese Anleitung zeigt, wie das Hadron Theme beliebig konfiguriert werden kann. Die Konfiguration kann entweder über die Datei oder das Admin Panel erfolgen.

===

## Theme Optionen
Das Hadron Theme bietet eine Vielzahl von Optionen, um das Theme beliebig anzupassen. Die Optionen enthalten die Standard Quark Einstellungen + einige zusätzliche Optionen von Hadron.

## Admin Panel
Um das Theme zu konfigurieren, navigiere im Admin Panel zu `Themes` und wähle das `Hadron` Theme aus.
![Hadron im Admin Panel](admin.webp?lightbox)
Dort findest du die Theme Optionen, gruppiert nach Hadron & Quark Einstellungen.

### Hadron Einstellungen
Die Hadron Einstellungen enthalten die folgenden Optionen:
![Hadron Einstellungen](hadron-settings.webp?lightbox)

- **H5P Source URL**: The URL to the H5P library. This is required to use H5P content.
- **Show dropdown menu**: Show a dropdown menu in the header navigation with subpages.

- **H5P Quelle URL**: Die URL zur H5P Bibliothek. Dies ist erforderlich, um H5P-Inhalte zu verwenden.
- **Zeige Dropdowns im Menü**: Zeige ein Dropdown-Menü in der Header-Navigation mit Unterseiten.

### Quark Einstellungen
Die Quark Einstellungen enthalten die folgenden Optionen:
![Quark Einstellungen](quark-settings.webp?lightbox)

- **Produktionsmodus**: Aktivieren oder deaktivieren des Produktionsmodus. Wenn aktiviert, werden minimierte CSS-Dateien verwendet.
- **Grid Grösse**: Die Breite des Themes. Eine grössere Grid Grösse führt zu breiteren Layouts.
- _Header Standards_
  - **Benutzerdefiniertes Favicon**: Lade ein benutzerdefiniertes Favicon für die Website hoch
  - **Benutzerdefiniertes Logo**: Lade ein benutzerdefiniertes Logo für die Header-Navigation hoch
  - **Benutzerdefiniertes mobiles Logo**: Lade ein benutzerdefiniertes Logo für die mobile Navigation hoch
  - **Fixierter Header**: Aktivieren oder deaktivieren eines fixierten (sticky) Headers
  - **Header animieren**: Aktivieren oder deaktivieren eines animierten Headers beim Scrollen
  - **Dunkler Header**: Aktivieren oder deaktivieren eines dunklen Headers
  - **Transparenter Header**: Aktivieren oder deaktivieren eines transparenten Headers
- _Footer Standards_
  - **Fixierter Footer**: Aktivieren oder deaktivieren eines fixierten Footers (Footer immer zuunterst)
- _Blog Standards_
  - **Blog URL**: Die URL zur Blog-Seite
  - **Hero Klassen**: Die Standard Hero-Klassen für das Hero-Element auf der Blog-Seite
- _Spectre.css Optionen_
  - **Experimentelles CSS**: Aktivieren oder deaktivieren von experimentellen CSS-Funktionen
  - **Icons CSS**: Aktivieren oder deaktivieren des Icons CSS

## Configuration File
Alle oben genannten Einstellungen können auch über die Datei konfiguriert werden. Die Konfigurationsdatei befindet sich in `user/config/themes/hadron.yaml`. Die Datei enthält standardmässig die folgenden Einstellungen:

```yaml
grid-size: grid-lg        # Grid Grösse des Themes: grid-lg, grid-md, grid-sm
blog-page: /blog          # URL zur Blog-Seite
dropdown:
  enabled: true           # Zeige Dropdown-Menü in der Header-Navigation
header-fixed: true        # Aktiviere fixierten (sticky) Header
header-animated: true     # Aktiviere animierten Header beim Scrollen
header-dark: false        # Aktiviere dunklen Header
header-transparent: false # Aktiviere transparenten Header
sticky-footer: true       # Aktiviere fixierten Footer (Footer immer zuunterst)
spectre:
  exp: false              # Aktiviere experimentelle CSS-Funktionen
  icons: false            # Aktiviere Icons CSS
production-mode: true     # Aktiviere Produktionsmodus (verwende minimierte CSS-Dateien)

# URL zur H5P Bibliothek
h5pembedrootpath: 'https://h5p.org/h5p/embed/'

# Standard Hero-Klassen für das Hero-Element auf der Blog-Seite
blog_page_hero_classes: 'text-light title-h1h2 overlay-dark-gradient hero-large parallax'

# Benutzerdefiniertes Favicon
favicon:
  # Pfad zum Favicon
  user/themes/hadron/images/favicon.svg:
    name: favicon.svg       # Name der Datei
    full_path: favicon.svg  # Pfad zur Datei
    type: image/svg+xml     # Dateityp
    size: 4868              # Dateigrösse
    path: user/themes/hadron/images/favicon.svg

# Benutzerdefiniertes Logo für die Header-Navigation
custom_logo:
  user/themes/hadron/images/logo/logo.svg:
    name: logo.svg
    full_path: logo.svg
    type: image/svg+xml
    size: 4868
    path: user/themes/hadron/images/logo/logo.svg

# Benutzerdefiniertes Logo für die mobile Navigation
custom_logo_mobile:
  user/themes/hadron/images/logo/logo.svg:
    name: logo.svg
    full_path: logo.svg
    type: image/svg+xml
    size: 4868
    path: user/themes/hadron/images/logo/logo.svg
```
