---
# TODO: translate
title: Setup | Hadron Skeleton
menu: Setup
slug: setup
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 17-10-2024
date: 17-10-2024
taxonomy:
  category: Hadron
  tag: [ Skeleton, Installation ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-light overlay-dark parallax'
---

!!! Diese Anleitung leitet dich durch das Setup des Hadron Skeletons. Darin wird erklärt, welche Änderungen nach der Installation vorgenommen werden sollten, um eine optimierte Website zu erstellen. 

===

! Um mit dem Setup zu beginnen, musst du das Skeleton zuerst installieren. Siehe dazu die [Installationsanleitung zum Hadron Skeleton](/hadron/skeleton/installation).

## 1. Formale Änderungen
Die formalen Änderungen beinhalten kleine, formale Anpassungen die nichts mit der Website zu tun haben, jedoch praktisch sind. Dies betrifft hier folgendes:

1. Readme: Anpassen der Readme Datei, um die wichtigsten Informationen zur Website zu speichern
2. Lizenz: Korrekte Lizenzdatei hinzufügen
3. ChangeLog: Anpassen des ChangeLogs, um die Änderungen der Website zu dokumentieren

_Die formalen Anpassungen können einfachheitshalber direkt versioniert werden und gegebenenfalls sogar über GitHub stattfinden._



## 2. Grundkonfiguration
Mit der Grav Grundkonfiguration können bekannte Änderungen noch vor der Installation gemacht werden, um nach der Installation bereits mit detail Anpassungen loslegen zu können.

1. Falls bereits Benutzeraccounts vorhanden sind, können diese erstellt werden
2. Wenn bereits bekannt ist, welche Plugins und Themes verwendet werden sollen, können diese direkt in der `.dependencies` Datei hinzugefügt oder entfernt werden.
3. Anschliessend können bereits Einstellungen am System und an der Seite angepasst werden.
4. Zuletzt können ebenfalls einzelne Änderungen an Plugins und Theme konfigurationen gemacht werden.

_Ab diesen Änderungen lohnt es sich, einen neuen Git Branch zu erstellen und je Konfiguration/ Kapitel mindestens einen Commit zu machen._

### 2.1 Accounts
Falls bereits Benutzeraccounts vorhanden sind, können diese erstellt werden. Dafür muss pro Account eine Datei in accounts/ erstellt werden. Die Datei muss folgende Struktur haben:

`accounts/username.yaml`:
```yaml
state: enabled
email: email@example.com
fullname: Name des Benutzers
title: Titel des Benutzers
hashed_password: HASHED_PASSWORD
language: de
content_editor: default
access:
	# ... individuelle Zugriffsberechtigungen
groups: # Liste von Gruppen
	- website     # kann sich an der Website anmelden
	- admin       # kann sich am Admin Panel anmelden
	- statistics  # kann Statistiken der Seite einsehen
	- editor      # kann bestehende Seiten bearbeiten
	- pages       # kann Seiten verwalten
	- maintainer  # kann die Seite warten
	- manager     # kann Seiten- & Systemeinstellungen verwalten
	- themes      # kann Themes verwalten
	- plugins     # kann Plugins verwalten
	- accounts    # kann Benutzerkonten verwalten
```

### 2.2 Dependencies
Mit der `.dependencies` Datei können alle nötigen Plugins und Themes einfach über eine eingebaute Funktion installiert werden.

### 2.3 Einstellungen
Bei den Einstellungen gibt es zwei wichtige Konfigurationsdateien, die angepasst werden sollten. Die lohnenswerten Anpassungen sind folgende:

`config/site.yaml`:
```yaml
title: 'Name der Website'
default_lang: de
author:
	name: 'Standardautor/ Organisationsname'
	email: contact@example.com
metadata:
	description: 'Standard Website Beschreibung'
blog:
	route: '/blog'
```

`config/system.yaml`:
```yaml
timezone: Europe/Zurich
languages:
	supported:
		- de
home:
	alias: /startseite
```

### 2.4 Theme & Plugins
Anschliessend können bereits auch schon folgende Änderungen am Themes & an den Plugins gemacht werden:

`config/themes/local.yaml`:
```yaml
header-fixed: true          # fixierter Header
header-animated: true       # animierter Header beim scrollen
header-dark: false          # dunkler Header
header-transparent: false   # transparenter Header
sticky-footer: true         # Footer immer zuunterst, auch wenn Website kleiner
blog-page: /blog            # Seite zum Blog
dropdown:
  enabled: false            # In der navigation Unterseiten anzeigen

# Breite der Website, entweder grid-lg für normal breite und grid-xl für extra breite Layouts
grid-size: grid-lg

# Standardklassen für alle Hero Elemente
blog_page_hero_classes: 'text-light title-h1h2 overlay-dark-gradient hero-large parallax'
```

`config/plugins/email.yaml`:
```yaml
from: noreply@services.crabston.dev  # woher die Mails standardmässig kommen (SendGrid standard)
to: contact@example.com              # wohin die Mails standardmässig gehen
```

`config/plugins/feed.yaml`:
```yaml
title: 'Name des Feeds'
description: 'Beschreibung des Feeds'
```

`config/plugins/sitemap.yaml`:
```yaml
news_enabled_paths:
	- /blog
```

`config/plugins/taxonomylist.yaml`:
```yaml
route: /blog
```

`config/plugins/umami-analytics.yaml`:
```yaml
script_src: 'https://umami.crabston.dev'  # Umami Host URL
website_id: 'UMAMI_WEBSITE_ID'            # Website ID falls nicht via Doppler
domains: 'example.com'                    # Domain die Daten senden sollen, getrennt mit ','
```



## 3. Installation
Sobald die Grundkonfiguration gemacht wurde, kann Grav installiert und gegebenenfalls der Server gestartet werden.

```sh
bin/grav install
bin/plugin tntsearch index
bin/grav server
```

Nun kann die Seite lokal geöffnet werden über http://127.0.0.1:8000. Falls noch keine Accounts erstellt wurden, muss jetzt der Admin Account erstellt werden. Anschliessend kann die Seite mit den Standardseiten des Skeletons geöffnet werden oder es können Anpassungen via Admin Panel gemacht werden.



## 4. weitere Anpassungen
Nun können weitere Einstellungen angepasst, das lokale Theme kann erweitert und neue Seiten erstellt und bearbeitet werden.

`config/theme/local.yaml`:
```yaml
# Logo Konfiguration
custom_logo:
  user/themes/local/images/logo/logo.png:
    name: logo.png
    full_path: logo.png
    type: image/png
    size: 77545
    path: user/themes/local/images/logo/logo.png
custom_logo_mobile:
  user/themes/local/images/logo/logo.png:
    name: logo.png
    full_path: logo.png
    type: image/png
    size: 77545
    path: user/themes/local/images/logo/logo.png
```



## 5. Optimierungen
Folgende Optimierungen können noch gemacht werden:

- SendGrid API Key: für das Versenden von E-Mails
- Umami Website Id: für erweiterte Statistiken
- Doppler Konfiguration: als Secrets Manager über den die nötigen API Keys verwaltet werden

### 5.1 SendGrid API Key
[SendGrid](https://sendgrid.com) ist ein E-Mail Service Provider, der es ermöglicht, E-Mails zu versenden. Dafür muss ein Account bei SendGrid vorhanden sein.

Wenn eine Grundkonfiguration besteht, kann einfach über [app.sendgrid.com/settings/api_keys](https://app.sendgrid.com/settings/api_keys) ein neuer API Key mit der Berechtigung «Mail Send > Mail Send: Yes» erstellt werden und in der Konfiguration eingetragen werden oder via Doppler verwaltet werden.

### 5.2 Umami Website Id
[Umami](https://github.com/Crabston/grav-plugin-umami-analytics) ist ein Open Source Analytics Tool, das es ermöglicht, detaillierte Statistiken über die Website zu sammeln. Dafür muss ein Account bei [Umami](https://umami.is/) vorhanden sein.

In Umami muss ein neues Projekt erstellt werden und die Website ID kopiert werden. Anschliessend kann die Website ID in der Umami Konfiguration eingetragen werden oder via Doppler verwaltet werden.

### 5.3 Doppler Konfiguration
[Doppler](https://www.doppler.com) ist ein Secrets Manager, der es ermöglicht, API Keys und andere sensible Daten sicher zu speichern und zu verwalten. Dafür muss ein Account bei Doppler vorhanden sein.

Als Nächstes muss ein neues Projekt in Doppler erstellt werden. Anschliessend können folgende Secrets hinzugefügt werden:

- `SENDGRID_API_KEY`: API_KEY_VALUE: `plugins.email_DASH_sendgrid.api_key`
- `UMAMI_WEBSITE_ID`: WEBSITE_ID_VALUE: `plugins.umami_DASH_analytics.website_id`

Die obere Liste ist im Format `SECRET_NAME: SECRET_VALUE: SECRET_PATH` geschrieben. Dabei ist `SECRET_NAME` der Name des Secrets, `SECRET_VALUE` der Wert des Secrets und `SECRET_PATH` der Pfad, wo das Secret verwendet wird. `SECRET_PATH` wird in Doppler als Notiz hinzugefügt.

Nachdem die Secrets hinzugefügt wurden, muss noch die Doppler Konfigurationsdatei `doppler.yaml` angepasst werden:
```yaml
setup:
	project: PROJECT_NAME
	config: prd
```
 