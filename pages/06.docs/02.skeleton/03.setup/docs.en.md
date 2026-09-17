---
title: Setup | Skeleton
slug: setup
menu: Setup
subtitle: This guide walks you through setting up the Hadron Skeleton. It explains which changes should be made after installation to create an optimized website.
sitemap:
    changefreq: yearly
    priority: 0.5
    lastmod: 03-07-2026
date: 03-07-2026
taxonomy:
    category: [ Documentation, Hadron, Skeleton ]
    tag: [ Expert, Setup, Skeleton ]
custom_hero_header_image: "media://logo/hadron-logo.svg"
twig_content.xss_scan_output: false
---

> [!TIP]
> Follow this step-by-step guide which describes how we at [Crabston GmbH](https://crabston.ch/) create and configure websites for our clients using the [Hadron Skeleton](https://github.com/Crabston/grav-skeleton-hadron).

## 0. Preparation
1. Fork the skeleton repository / create from template
2. Clone the repository including Grav:
```shell
cd /your/preferred/directory
git clone https://github.com/Crabston/grav.git .
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
```

> [!NOTE]
> See the [Hadron Skeleton installation guide](/docs/skeleton/installation) for additional cloning methods and alternatives.

### 0.1 SendGrid API Key
[SendGrid](https://sendgrid.com) is an email service provider that enables sending email. You need an account with SendGrid for this.

Once a basic configuration exists, create a new API key at [app.sendgrid.com/settings/api_keys](https://app.sendgrid.com/settings/api_keys) with the permission Mail Send (Mail Send: Yes). Add the key to your configuration or manage it via Doppler.

### 0.2 Umami Website ID
[Umami Analytics](https://github.com/Crabston/grav-plugin-umami-analytics) is an open-source analytics tool for collecting detailed website statistics. You need an account on [Umami](https://umami.is/) or access to a hosting server.

Create a new site/project in Umami and copy the website ID. Then add the website ID in the Umami configuration or manage it via Doppler.

### 0.3 Doppler configuration
[Doppler](https://www.doppler.com) is a secrets manager for securely storing and managing API keys and other sensitive data. You need a Doppler account for this.

Create a new project in Doppler, then add the following secrets:
- `SENDGRID_API_KEY`: API_KEY_VALUE: `plugins.email_DASH_sendgrid.api_key`
- `UMAMI_WEBSITE_ID`: WEBSITE_ID_VALUE: `plugins.umami_DASH_analytics.website_id`

The list above is in the format `SECRET_NAME: SECRET_VALUE: SECRET_PATH`. `SECRET_NAME` is the secret's name, `SECRET_VALUE` is its value and `SECRET_PATH` is the path where the secret is used. Add `SECRET_PATH` as a note in Doppler.

After adding the secrets, update the Doppler configuration file `doppler.yaml`:
```yaml
setup:
    project: PROJECT_NAME
    config: prd
```

## 1. Formal changes
Formal changes include small administrative adjustments that are not directly related to the website content but are practical. This affects the following files:
1. `README.md`: Update the readme to store key information about the site
2. `LICENSE`: Add the correct license file
3. `CHANGELOG.md`: Update the changelog to document site changes

_For convenience, you can version these administrative changes directly (e.g. on GitHub) before cloning the repository._

## 2. Base configuration
With the Grav base configuration you can apply well-known changes before installation so you can start fine-tuning after installation.

> [!TIP]
> Find more information about a local development environment here: [Documentation / Skeleton / Development Environment](/docs/skeleton/entwicklungsumgebung)

1. If user accounts already exist, create or copy them
2. If you already know which plugins and themes you want to use, add or remove them in the `.dependencies` file
3. Afterwards you can adjust system and site settings
4. Finally, you can make individual changes to plugin and theme configurations

_At this point it's worth creating a new Git branch and making at least one commit per configuration/chapter._

### 2.1 Accounts
If user accounts already exist they can be created. Create one file per account in `user/accounts`. The file must have the following structure:

`accounts/username.yaml`:
```yaml
state: enabled
email: email@example.com
fullname: User's full name
title: User's title
hashed_password: HASHED_PASSWORD
admin_next:
    preferences:
        adminLanguage: en-US # Language
access: # ... individual access permissions (if not handled via groups)
    api:
        login: true # Admin login
        super: true # Super user
    site:
        login: true # Site login
groups: # List of groups
    - website     # Can log in to the website and view protected pages
    - admin       # Can log in to the admin panel and access the API
    - accounts    # Can manage user accounts and groups
    - editor      # Can edit content on the site, including pages and media
    - maintainer  # Can manage restricted parts of the site & see relevant system information
    - manager     # Can manage the site as a whole themselves. DO ONLY GRANT TO TRAINED & EXPERIENCED USERS!
    - statistics  # Can see site statistics
```

### 2.2 Dependencies
Use the `.dependencies` file to install required plugins and themes via the built-in function. Adjust it: remove unwanted plugins/themes and add the ones you need.

### 2.3 Settings
There are two main configuration files you should adjust. Recommended edits include:

`config/site.yaml`:
```yaml
title: 'Site name'
default_lang: en # Default language
author:
    name: 'Default author / organization'
    email: contact@example.com
metadata:
    description: 'Default site description'
    keywords: 'relevant, keywords, for, the, site'
blog:
    route: '/blog'
```

`config/system.yaml`:
```yaml
timezone: Europe/Zurich # Server / site timezone
custom_base_url: https://usehadron.dev/ # Base URL
languages:
    supported: # List supported languages
        - en
default_lang: en # Default language
home:
    alias: /home # Path of the homepage
pages:
    theme: custom # Theme to use
```

### 2.4 Theme & plugins
You can already make the following changes to themes and plugins:

`config/themes/custom.yaml`:
See [Documentation / Theme / Options](/docs/theme/optionen#konfigurationsdatei)

`config/plugins/email.yaml`:
```yaml
from: your@provider.mail # Default sender (SendGrid by default)
to: contact@example.com  # Default recipient
```

`config/plugins/feed.yaml`:
```yaml
title: 'Feed name'
description: 'Feed description'
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
script_src: 'https://umami.crabston.ch'   # Umami host URL
website_id: 'UMAMI_WEBSITE_ID'            # Website ID if not provided via Doppler
domains: 'example.com'                    # Domains that may send data, separated by commas
```

## 3. Installation
After the base configuration is ready, install Grav and start the server if necessary.

```sh
bin/grav install
bin/plugin tntsearch index
bin/grav server
```

Open the site locally at `http://127.0.0.1:8000`. If no accounts exist yet, create the admin account at `http://127.0.0.1:8000/admin`. You can then view the skeleton's default pages or make further adjustments via the admin panel.

## 4. Further adjustments
You can now adjust more settings, extend the custom theme and create or edit new pages.

`config/theme/custom.yaml`:
```yaml
# Logo configuration
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
