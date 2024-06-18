---
# TODO: Add slideshare shortcode
title: Shortcode Media Plugin
slug: shortcode-media
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 31-05-2024
date: 31-05-2024
taxonomy:
  category: Plugins
  tag: [ Anleitung, Plugins ]
header_image_file: shortcode-media.webp
hero_image: shortcode-media.webp
hero_classes: 'text-light overlay-dark parallax'
---

!!! Lerne, wie du das Shortcode Media Plugin verwendest, um Medieninhalte in deiner Grav-Seite einzubetten.

===

Die Originaldokumentation des Plugins findest du hier:
[![Shortcode Media Plugin](https://opengraph.githubassets.com/2c2e2a1143483b32043a5387d08ff08cd2488f6b002a45691250edd3d6bd2ae4/getgrav/grav-plugin-shortcode-media)](https://github.com/getgrav/grav-plugin-shortcode-media#readme)

## Funktionen

Das Shortcode Media-Plugin bietet verschiedene medienbezogene Shortcodes zum Einbetten von Inhalten. Folgende Shortcodes sind verfügbar:

- `iframe` - Einbetten von iFrames (z.B. YouTube, Google Maps, ...)
- `pdf` - Einbetten von PDF Dateien
- `docviewer` - Einbetten von Dokumenten (PDF, DOCX, XLSX, ...)
- `slideshare` - Einbetten von SlideShare-Präsentationen

### Iframe

Mit dem `iframe` Shortcode können iFrames von verschiedenen Websites eingebettet werden.

> Syntax: `[raw][iframe url="URL" width="WIDTH" height="HEIGHT" /][/raw]`
> - `url` - URL der Website, die eingebettet werden soll
> - `width` - Breite des iFrames (Standardmässig in Pixel, nutze `100%` für die volle Breite)
> - `height` - Höhe des iFrames (Standardmässig in Pixel)
> 
> _die Parameter `width` und `height` sind optional._

[iframe url="https://grav.demo.crabston.dev" width="100%" height="500" /]

```md
[raw][iframe url="https://grav.demo.crabston.dev" width="100%" height="500" /][/raw]
```

### PDF

Mit dem `pdf` Shortcode können PDF Dateien eingebettet werden.

> Syntax: `[raw][pdf url="datei.pdf"][/raw]`
> - `url` - URL der PDF-Datei, die eingebettet werden soll

[pdf url="beispiel-pdf.pdf"]

```md
[raw][pdf url="beispiel-pdf.pdf"][/raw]
```

### DocViewwer

Mit dem `docviewer` Shortcode können beliebige Dateiformate eingebettet werden, die der Browser zulässt. Andernfalls sollte der Google Viewer verwendet werden.

> Syntax: `[raw][docviewer url="datei.pdf" google=true][/raw]`
> - `url` - URL der Datei, die eingebettet werden soll
> - `google` - Verwende den Google Viewer, um die Datei anzuzeigen (Standardmässig `false`)
> 
> _der Parameter `google` ist optional._

[docviewer url="beispiel-pdf.pdf" google=true]

```md
[raw][docviewer url="beispiel-pdf.pdf" google=true][/raw]
```

### SlideShare

_Noch nicht verfügbar, siehe in der Originaldokumentation des Plugins._

## Konfiguration

Im Admin Panel gibt es unter `Plugins > Shortcode Media` folgende Konfigurationsmöglichkeiten:

```yaml
enabled: true        # Plugin Aktiviert
google_viewer: false # Google Viewer
```

- **Plugin aktiviert**: Aktiviere oder deaktiviere das Plugin
- **Google Viewer**: Verwende standardmässig den Google Viewer für den `docviewer` Shortcode

