---
title: Options | Hadron Theme
menu: Options
slug: options
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 17-10-2024
date: 17-10-2024
taxonomy:
  category: Hadron
  tag: [ Theme, Configuration ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-light overlay-dark parallax'
---

!!! This tutorial shows how to configure the Hadron theme to your liking. The theme can be configured by file or using the Admin Panel.

===

## Theme Options
The Hadron theme offers a variety of options to customize the theme to your liking. The options contain the default Quark settings + some additional options by Hadron.

## Admin Panel
To configure the theme, navigate in the Admin Panel to `Themes` and select the `Hadron` theme.
![Hadron in Admin Panel](admin.webp?lightbox)
Here you can find the theme options, grouped by Hadron & Quark settings.

### Hadron Settings
The Hadron settings contain the following options:
![Hadron Settings](hadron-settings.webp?lightbox)

- **H5P Source URL**: The URL to the H5P library. This is required to use H5P content.
- **Show dropdown menu**: Show a dropdown menu in the header navigation with subpages.

### Quark Settings
The Quark settings contain the following options:
![Quark Settings](quark-settings.webp?lightbox)

- **Production Mode**: Enable or disable production mode. If enabled, minimized CSS files are used.
- **Grid Size**: The grid size of the theme. A larger grid size will result in larger content.
- _Header Defaults_
  - **Custom Favicon**: Upload a custom favicon for the website
  - **Custom Logo**: Upload a custom logo for the header navigation
  - **Custom mobile Logo**: Upload a custom logo for the mobile navigation
  - **Fixed Header**: Enable or disable a fixed (sticky) header
  - **Animate Header**: Enable or disable an animated header on scroll
  - **Dark Header**: Enable or disable a dark header
  - **Transparent Header**: Enable or disable a transparent header
- _Footer Defaults_
  - **Sticky Footer**: Enable or disable a sticky footer (footer always at the bottom)
- _Blog Defaults_
  - **Blog URL**: The URL to the blog page
  - **Hero Classes**: The default hero classes for the hero element on the blog page
- _Spectre.css Options_
  - **Experimental CSS**: Enable or disable experimental CSS features
  - **Icons CSS**: Enable or disable the icons CSS

## Configuration File
All the above settings can also be configured by file. The configuration file is located in `user/config/themes/hadron.yaml`. The file contains the following settings by default:

```yaml
grid-size: grid-lg        # Grid size of the theme: grid-lg, grid-md, grid-sm
blog-page: /blog          # URL to the blog page
dropdown:
  enabled: true           # Show dropdown menu in header navigation
header-fixed: true        # Enable fixed (sticky) header
header-animated: true     # Enable animated header on scroll
header-dark: false        # Enable dark header
header-transparent: false # Enable transparent header
sticky-footer: true       # Enable sticky footer (footer always at the bottom)
spectre:
  exp: false              # Enable experimental CSS features
  icons: false            # Enable icons CSS
production-mode: true     # Enable production mode (use minimized CSS files)

# URL to the H5P library
h5pembedrootpath: 'https://h5p.org/h5p/embed/'

# Default hero classes for the blog page
blog_page_hero_classes: 'text-light title-h1h2 overlay-dark-gradient hero-large parallax'

# Custom Favicon
favicon:
  # Path to the favicon
  user/themes/hadron/images/favicon.svg:
    name: favicon.svg       # Name of the file
    full_path: favicon.svg  # Full path to the file
    type: image/svg+xml     # File type
    size: 4868              # File size
    path: user/themes/hadron/images/favicon.svg

# Custom Logo for the header navigation
custom_logo:
  user/themes/hadron/images/logo/logo.svg:
    name: logo.svg
    full_path: logo.svg
    type: image/svg+xml
    size: 4868
    path: user/themes/hadron/images/logo/logo.svg

# Custom Logo for the mobile navigation
custom_logo_mobile:
  user/themes/hadron/images/logo/logo.svg:
    name: logo.svg
    full_path: logo.svg
    type: image/svg+xml
    size: 4868
    path: user/themes/hadron/images/logo/logo.svg
```
