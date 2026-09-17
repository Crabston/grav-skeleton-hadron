---
title: Options | Theme
slug: options
menu: Options
subtitle: This page shows how to configure the Hadron theme to your liking. The theme can be configured by file or using the Admin Panel.
sitemap:
    changefreq: yearly
    priority: 0.5
    lastmod: 02-07-2026
date: 02-07-2026
taxonomy:
    category: [ Docs, Hadron, Theme ]
    tag: [ Beginner, Expert, Options, Theme ]
custom_hero_header_image: "media://logo/hadron-logo.svg"
---

## Theme Options
The Hadron theme offers a variety of options to customize the appearance and behavior of the site. These options can be configured in the Admin Panel or by editing the theme configuration file.

## Admin Panel
To configure the theme, navigate in the Admin Panel to `Themes` and select the `Hadron` theme:
![Hadron in Admin Panel](admin-themes.en.webp?lightbox)

Here you can find the theme options, grouped into different categories:
![Hadron Theme Options in Admin Panel](admin-hadron-settings.en.webp?lightbox)

### Appearance
- **Theme Mode Default**: Sets the default theme mode for the site. Options include `auto`, `light`, and `dark`. Use `auto` to automatically switch between light and dark mode based on the user's system preferences.
- **Accent Color**: Sets the accent color for the theme. This can be any valid CSS HEX color value.
- _Branding_
  - **Custom Favicon**: Upload a custom favicon for the site. The favicon is the small icon that appears in the browser tab and bookmarks.
  - **Monochrome Logo**: Enable or disable a monochrome logo that changes depending on the theme mode (light/dark). Only recommended if you have a grayscale logo. If you have a colored logo, it is recommended to disable this option.
  - **Custom logo**: Upload a custom logo for the header navigation
  - **Custom logo (Mobile View)**: Upload a custom logo for the header navigation in mobile view
- _Header Settings_
  - **Fixed Header**: Enable or disable a fixed (sticky) header.
  - **Animate Header**: Enable or disable an animated header on scroll
  - **Transparent Header (hero)**: Enable or disable a transparent header on hero pages
- _Footer Settings_
  - **Sticky Footer**: Enable or disable a sticky footer. When enabled, the footer is always at the bottom of the page, even if the content is not long enough to fill the viewport.

### Menu
- **Hide TItle**: Enable or disable the site title in the header navigation.
- **Display Dropdowns in Menu**: Enable or disable a dropdown menu in the header navigation. When enabled, subpages will be displayed in a dropdown menu under their parent page.
- **Display Custom Menus in Menu**: Enable or disable custom menus in the header navigation. When enabled, you can add custom menu items to the header navigation.
- **Custom Menu Items**: Add custom menu items to the header navigation. You can add a title and a URL for each menu item and an optional Font Awesome icon.

### Features
- _Icon Settings (Font Awesome)_
  - **Font Awesome 7**: Enable or disable the use of Font Awesome icons (V7). If disabled, no Font Awesome icons will be displayed on the entire website.
  - **Serve Font Awesome locally**: Enable or disable serving Font Awesome icons locally. When enabled, expects `css/fontawesome/all.min.css` to exist in the theme. Otherwise, uses the official CDN.
- _Language Switcher_
  - **Enable Language Switcher**: Enable or disable the language switcher in the header navigation. When enabled, users can switch between different languages if the site is configured for multilingual support.
  - **Display Style**: Choose the display style for the language switcher. Options include `dropdown` and `inline`. The dropdown style displays the languages in a dropdown menu, while the inline style displays the languages as a list of links.
  - **Format**: Choose the format for the language switcher. Options include `flag`, `name`, `shortcode` or `combined`.
- _Blog Options_
  - **Blog Page Route**: Set the route to the blog page.
- _H5P Setup_
  - **H5P Embed Source URL**: Set the root path for H5P embed files. If not set, the public H5P CDN will be used.

## Configuration File
All the above settings can also be configured by file. The configuration file is located in `user/config/themes/hadron.yaml`. The file contains the following settings by default:

```yaml
theme-mode: auto            # Color mode for the theme, options include: `auto`, `light`, and `dark`
accent-color: '#242424'     # The accent color for the theme, can be any valid CSS HEX color value
monochrome-logo: false      # If true, the logo will be monochrome and will change depending on the theme mode (light/dark).
favicon:                    # Custom Favicon
  user/themes/hadron/images/favicon.svg: # Path to the favicon
    name: favicon.svg       # Name of the file
    full_path: favicon.svg  # Full path to the file
    type: image/svg+xml     # File type
    size: 4868              # File size
    path: user/themes/hadron/images/favicon.svg
custom_logo:                # Custom Logo for the header navigation
  user/themes/hadron/images/logo/logo.svg:
    name: logo.svg
    full_path: logo.svg
    type: image/svg+xml
    size: 4868
    path: user/themes/hadron/images/logo/logo.svg
custom_logo_mobile:         # Custom Logo for the mobile navigation
  user/themes/hadron/images/logo/logo.svg:
    name: logo.svg
    full_path: logo.svg
    type: image/svg+xml
    size: 4868
    path: user/themes/hadron/images/logo/logo.svg
header-fixed: true          # Causes the header to be fixed at the top of the browser
header-animated: true       # Allows the fixed header to resize to a smaller header when scrolled
header-transparent: false   # Allows the header to be transparent over the page (only for hero elements)
sticky-footer: true         # Causes the footer to be sticky at the bottom of the page
hide_title: false           # Hides the site title in the header
dropdown.enabled: true      # Enables dropdown navigation
custommenus.enabled: true   # Enables custom menus in the header
menu:                       # Sets custom menu items for the header navigation as an array
  - text: Grav              # The text / title for the menu item
    icon: external-link     # The Font Awesome icon for the menu item
    url: ''                 # The URL for the menu item
    target: _blank          # The target for the menu item, e.g. _blank for opening in a new tab
fontawesome.enabled: true   # Enables the use of Font Awesome icons (V7)
langswitcher:               # Settings for the language switcher in the header
  enable: true              # Enables the language switcher in the header
  display: inline           # The display style for the language switcher, options include: `dropdown` and `inline`
  format: icon              # The format for the language switcher, options include: `flag`, `name`, `shortcode` or `combined`
blog-page: /blog            # The route to the blog page
h5pembedrootpath: ''        # The root path for H5P embed files, if not set, the public H5P CDN will be used.
```
