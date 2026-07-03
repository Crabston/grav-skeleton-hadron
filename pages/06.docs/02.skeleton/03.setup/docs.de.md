---
title: Setup | Skeleton
slug: setup
menu: Setup
subtitle: Diese Anleitung leitet dich durch das Setup des Hadron Skeletons. Darin wird erklärt, welche Änderungen nach der Installation vorgenommen werden sollten, um eine optimierte Website zu erstellen.
sitemap:
    changefreq: yearly
    priority: 0.5
    lastmod: 03-07-2026
date: 03-07-2026
taxonomy:
    category: [ Dokumentation, Hadron, Skeleton ]
    tag: [ Experte, Setup, Skeleton ]
custom_hero_header_image: "media://logo/hadron-logo.svg"
twig_content.xss_scan_output: false
---

> [!TIP]
> Folge dieser Schritt für Schritt Anleitung, wonach wir bei der [Crabston GmbH](https://crabston.ch/) Websites für unsere Kunden mit dem [Hadron Skeleton](https://github.com/Crabston/grav-skeleton-hadron) erstellen & konfigurieren.

## 0. Vorbereitung
1. Skeleton Repository forken / aus Vorlage erstellen
2. Repository inkl. Grav klonen:
```shell
cd /your/preferred/directory
git clone https://github.com/Crabston/grav.git .
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
```

> [!NOTE]
> Siehe die [Installationsanleitung zum Hadron Skeleton](/docs/skeleton/installation) für weitere Klon Methoden und Alternativen.

### 0.1 SendGrid API Key
[SendGrid](https://sendgrid.com) ist ein E-Mail Service Provider, der es ermöglicht, E-Mails zu versenden. Dafür muss ein Account bei SendGrid vorhanden sein.

Wenn eine Grundkonfiguration besteht, kann einfach über [app.sendgrid.com/settings/api_keys](https://app.sendgrid.com/settings/api_keys) ein neuer API Key mit der Berechtigung «Mail Send > Mail Send: Yes» erstellt werden und in der Konfiguration eingetragen werden oder via Doppler verwaltet werden.

### 0.2 Umami Website Id
[Umami Analytics](https://github.com/Crabston/grav-plugin-umami-analytics) ist ein Open Source Analytics Tool, das es ermöglicht, detaillierte Statistiken über die Website zu sammeln. Dafür muss ein Account bei [Umami](https://umami.is/) oder verwendeten Server vorhanden sein.

In Umami muss ein neues Projekt erstellt werden und die Website ID kopiert werden. Anschliessend kann die Website ID in der Umami Konfiguration eingetragen werden oder via Doppler verwaltet werden.

### 0.3 Doppler Konfiguration
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

## 1. Formale Änderungen
Die formalen Änderungen beinhalten kleine, formale Anpassungen, die nichts mit der Website zu tun haben, jedoch praktisch sind. Dies betrifft hier folgende Dateien:
1. `README.md`: Anpassen der Readme Datei, um die wichtigsten Informationen zur Website zu speichern
2. `LICENSE`: Korrekte Lizenzdatei hinzufügen
3. `CHANGELOG.md`: Anpassen des Changelogs, um die Änderungen der Website zu dokumentieren

_Die formalen Anpassungen können einfachheitshalber direkt versioniert werden und gegebenenfalls sogar über GitHub stattfinden, bevor das Repository geklont wird._

## 2. Grundkonfiguration
Mit der Grav Grundkonfiguration können bereits bekannte Änderungen noch vor der Installation gemacht werden, um nach der Installation bereits mit Detailanpassungen loslegen zu können.

> [!TIP]
> Finde weitere Informationen für eine lokale Eintwicklungsumgebung hier: [Dokumentation / Skeleton / Entwicklungsumgebung](/docs/skeleton/entwicklungsumgebung)

1. Falls bereits Benutzeraccounts vorhanden sind, können diese erstellt / kopiert werden
2. Wenn bereits bekannt ist, welche Plugins und Themes verwendet werden sollen, können diese direkt in der `.dependencies` Datei hinzugefügt oder entfernt werden.
3. Anschliessend können bereits Einstellungen am System und an der Seite angepasst werden.
4. Zuletzt können ebenfalls einzelne Änderungen an Plugins und Theme konfigurationen gemacht werden.

_Ab diesen Änderungen lohnt es sich, einen neuen Git Branch zu erstellen und je Konfiguration/ Kapitel mindestens einen Commit zu machen._

### 2.1 Accounts
Falls bereits Benutzeraccounts vorhanden sind, können diese erstellt werden. Dafür muss pro Account eine Datei in `user/accounts` erstellt werden. Die Datei muss folgende Struktur haben:

`accounts/username.yaml`:
```yaml
state: enabled
email: email@example.com
fullname: Name des Benutzers
title: Titel des Benutzers
hashed_password: HASHED_PASSWORD
admin_next:
    preferences:
        adminLanguage: de-de # Sprache
access: # ... individuelle Zugriffsberechtigungen (falls nicht über Gruppen)
    api:
        login: true # Admin Anmelden
        super: true # Super User
    site:
        login: true # Website Anmelden
groups: # Liste von Gruppen
	- website     # kann sich an der Website anmelden
	- admin       # kann sich am Admin Panel anmelden + Zugriff API
	- accounts    # kann Benutzerkonten verwalten
	- editor      # kann Seiten & Medien bearbeiten
	- maintainer  # kann die Seite warten und Systeminformationen einsehen
	- manager     # kann Website eigenständig verwalten (ADMINs)
	- statistics  # kann Statistiken der Seite einsehen
```

### 2.2 Dependencies
Mit der `.dependencies` Datei können alle nötigen Plugins und Themes einfach über eine eingebaute Funktion installiert werden. Passe diese an, lösche ungewünschte Plugins / Themes heraus und füge erwünschte hinzu.

### 2.3 Einstellungen
Bei den Einstellungen gibt es zwei wichtige Konfigurationsdateien, die angepasst werden sollten. Die lohnenswerten Anpassungen sind folgende:

`config/site.yaml`:
```yaml
title: 'Name der Website'
default_lang: de # Standard Sprache
author:
	name: 'Standardautor/ Organisationsname'
	email: contact@example.com
metadata:
	description: 'Standard Website Beschreibung'
	keywords: 'passende, keywords, für, die, website'
blog:
	route: '/blog'
```

`config/system.yaml`:
```yaml
timezone: Europe/Zurich # Zeitzone der Website / Servers
custom_base_url: https://usehadron.dev/ # Base URL
languages:
	supported: # Unterstützte Sprachen auflisten
		- de
default_lang: de # Standard Sprache
home:
	alias: /home # Pfad der Startseite
pages:
    theme: custom # Zu verwendendes Theme
```

### 2.4 Theme & Plugins
Anschliessend können bereits auch schon folgende Änderungen am Themes & an den Plugins gemacht werden:

`config/themes/custom.yaml`: <br />
siehe [Dokumentation / Theme / Optionen](/docs/theme/optionen#konfigurationsdatei)

`config/plugins/email.yaml`:
```yaml
from: your@provider.mail # woher die Mails standardmässig kommen (SendGrid standard)
to: contact@example.com  # wohin die Mails standardmässig gehen
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
script_src: 'https://umami.crabston.ch'   # Umami Host URL
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

Nun kann die Seite lokal geöffnet werden über `http://127.0.0.1:8000`. Falls noch keine Accounts erstellt wurden, muss jetzt der Admin Account erstellt werden über `http://127.0.0.1:8000/admin`. Anschliessend kann die Seite mit den Standardseiten des Skeletons geöffnet werden oder es können Anpassungen via Admin Panel gemacht werden.

## 4. weitere Anpassungen
Nun können weitere Einstellungen angepasst, das custom Theme kann erweitert und neue Seiten erstellt und bearbeitet werden.

`config/theme/custom.yaml`:
```yaml
# Logo Konfiguration
favicon:
    user/media/favicon/hadron-favicon.svg:
        name: hadron-favicon.svg
        type: image/svg+xml
        size: 566
        path: user/media/favicon/hadron-favicon.svg
custom_logo:
    user/media/logo/hadron-logo.svg:
        name: hadron-logo.svg
        type: image/svg+xml
        size: 3076
        path: user/media/logo/hadron-logo.svg
custom_logo_mobile:
    user/media/logo/hadron-logo.svg:
        name: hadron-logo.svg
        type: image/svg+xml
        size: 3076
        path: user/media/logo/hadron-logo.svg
```
