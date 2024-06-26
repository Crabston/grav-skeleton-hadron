---
title: Setup
sitemap:
  ignore: true
date: 19-06-2024
---

[div class="columns"]
[div class="column col-9 col-md-12 extra-spacing"]

# Konfiguration
!!! Diese Seite dient als Guide für das Erstellen einer neuen Grav Website.  
!!! Dieser Guide beinhaltet alle notwendigen Schritte, um eine neue Grav Website von einer Vorlage zu erstellen. Dies beinhaltet vom Klonen des Repositories über das Anpassen der Konfigurationen und Theme bis hin zum Veröffentlichen der Website.

## 1. Repository klonen
Es muss das Repository geklont werden, um lokal auf dem Computer zu arbeiten. Dafür gibt es folgende Möglichkeiten:
1. Repository Code herunterladen
2. Release herunterladen
3. Repository forken/ kopieren

Da es sich um ein Grav Skeleton handelt, wird nur der `/user` Ordner bearbeitet. Dafür muss jedoch der Grav Core (`/`) ebenfalls vorhanden sein. Dafür kann unser [veränderter Grav Core](https://github.com/Crabston/grav) in den webroot geklont werden und anschliessend das skeleton in den `/user` Ordner.

### 1.1 Repository Code herunterladen
Das Herunterladen des Repository Codes ist die einfachste Methode, um den Code auf den Computer zu bekommen. Jedoch ist diese Methode nur empfehlenswert, wenn keine anderen Möglichkeiten zur Verfügung stehen.

### 1.2 Release herunterladen
Das Herunterladen eines Releases ist eine gute Methode, um eine stabile Version des Codes zu erhalten. Zudem enthalten sie bereits alle notwendigen Dependencies um direkt loszulegen.

### 1.3 Repository forken/ kopieren
Das Forken oder Kopieren des Repositories ist die beste Methode, um den Code zu erhalten. Es ermöglicht das einfache Updaten des Codes und das Teilen von Änderungen mit anderen. Das Forken eines Repositories ist empfehlenswert wenn Änderungen wieder zurückgeführt werden sollen. Ansonsten ist das Kopieren des Repositories die bessere Wahl, da man so ein eigenes Repository erhält, welches man unabhängig vom Original nutzen kann.

## 2. Formale Änderungen
Die formalen Änderungen beinhalten kleine, formale Anpassungen die nichts mit der Website zu tun haben, jedoch praktisch sind. Dies betrifft hier folgendes:

1. Readme: Anpassen der Readme Datei, um die wichtigsten Informationen zur Website zu speichern
2. Lizenz: Korrekte Lizenzdatei hinzufügen
3. ChangeLog: Anpassen des ChangeLogs, um die Änderungen der Website zu dokumentieren

_Die formalen Anpassungen können einfachheitshalber direkt versioniert werden und gegebenenfalls sogar über GitHub stattfinden._

## 3. Grundkonfiguration
Mit der Grav Grundkonfiguration können bekannte Änderungen noch vor der Installation gemacht werden, um nach der Installation bereits mit detail Anpassungen loslegen zu können.

1. Falls bereits Benutzeraccounts vorhanden sind, können diese erstellt werden
2. Wenn bereits bekannt ist, welche Plugins und Themes verwendet werden sollen, können diese direkt in der `.dependencies` Datei hinzugefügt oder entfernt werden.
3. Anschliessend können bereits Einstellungen am System und an der Seite angepasst werden.
4. Zuletzt können ebenfalls einzelne Änderungen an Plugins und Theme konfigurationen gemacht werden.

_Ab diesen Änderungen lohnt es sich, einen neuen Git Branch zu erstellen und je Konfiguration/ Kapitel mindestens einen Commit zu machen._

### Accounts
Falls bereits Benutzeraccounts vorhanden sind, können diese erstellt werden. Dafür muss pro Account eine Datei in `accounts/` erstellt werden. Die Datei muss folgende Struktur haben:

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

### 3.2 Dependencies
Mit der `.dependencies` Datei können alle nötigen Plugins und Themes einfach über eine eingebaute Funktion installiert werden.

### 3.3 Einstellungen
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

### 3.4 Theme & Plugins
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

## 4. Installation
Sobald die Grundkonfiguration gemacht wurde, kann Grav installiert und gegebenenfalls der Server gestartet werden.

```shell
bin/grav install
bin/plugin tntsearch index
bin/grav server
```

Nun kann die Seite lokal geöffnet werden über http://127.0.0.1:8000. Falls noch keine Accounts erstellt wurden, muss jetzt der Admin Account erstellt werden. Anschliessend kann die Seite mit den Standardseiten des Skeletons geöffnet werden oder es können Anpassungen via Admin Panel gemacht werden.

## 5. weitere Anpassungen
Nun können weitere Einstellungen angepasst, das lokale Theme kann erweitert und neue Seiten erstellt und bearbeitet werden.

`TODO: Theme customization & branding:`
```yaml
# config/theme/local.yaml
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

## 6. Optimierungen
Folgende Optimierungen können noch gemacht werden:
1. SendGrid API Key: für das Versenden von E-Mails
2. Umami Website Id: für erweiterte Statistiken
3. Doppler Konfiguration: als Secrets Manager über den die nötigen API Keys verwaltet werden

### 6.1 SendGrid API Key
SendGrid ist ein E-Mail Service Provider, der es ermöglicht, E-Mails zu versenden. Dafür muss ein Account bei SendGrid vorhanden sein.

Wenn eine Grundkonfiguration besteht, kann einfach über [app.sendgrid.com/settings/api_keys](https://app.sendgrid.com/settings/api_keys) ein neuer API Key mit der Berechtigung «Mail Send > Mail Send: Yes» erstellt werden und in der Konfiguration eingetragen werden oder via Doppler verwaltet werden.

### 6.2 Umami Website Id
Umami ist ein Open Source Analytics Tool, das es ermöglicht, detaillierte Statistiken über die Website zu sammeln. Dafür muss ein Account bei Umami vorhanden sein.

In Umami muss ein neues Projekt erstellt werden und die Website ID kopiert werden. Anschliessend kann die Website ID in der Umami Konfiguration eingetragen werden oder via Doppler verwaltet werden. 

### 6.3 Doppler Konfiguration
Doppler ist ein Secrets Manager, der es ermöglicht, API Keys und andere sensible Daten sicher zu speichern und zu verwalten. Dafür muss ein Account bei Doppler vorhanden sein.

Als Nächstes muss ein neues Projekt in Doppler erstellt werden. Anschliessend können folgende Secrets hinzugefügt werden:
- `SENDGRID_API_KEY`: API_KEY_VALUE: `plugins.email_DASH_sendgrid.api_key`
- `UMAMI_WEBSITE_ID`: WEBSITE_ID_VALUE: `plugins.umami_DASH_analytics.website_id`
_Die obere Liste ist im Format `SECRET_NAME: SECRET_VALUE: SECRET_PATH` geschrieben. Dabei ist `SECRET_NAME` der Name des Secrets, `SECRET_VALUE` der Wert des Secrets und `SECRET_PATH` der Pfad, wo das Secret verwendet wird. `SECRET_PATH` wird in Doppler als Notiz hinzugefügt._

Nachdem die Secrets hinzugefügt wurden, muss noch die Doppler Konfigurationsdatei `doppler.yaml` angepasst werden:
```yaml
setup:
  project: PROJECT_NAME
  config: prd
```

[/div]

[div class="column col-3 col-md-12"]
[div style="position: sticky; top: 4rem;"][TOC][/div]
[/div]

[/div]
