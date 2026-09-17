---
title: Customization | Theme
slug: customization
menu: Customization
subtitle: This page shows you how to customize the Hadron theme. By customizing the theme, you do more than just changing some options; You change the look and feel of your website by editing the theme's source code (CSS/ SCSS, JavaScript, Twig).
sitemap:
    changefreq: yearly
    priority: 0.5
    lastmod: 02-07-2026
date: 02-07-2026
taxonomy:
    category: [ Docs, Hadron, Theme ]
    tag: [ Expert, Customization, Theme ]
custom_hero_header_image: "media://logo/hadron-logo.svg"
---

> [!WARNING]
> Since you may edit CSS/ SCSS, JavaScript, and Twig files, it is recommended to have some knowledge of these languages. If you are not familiar with them, you can still customize the theme by changing the theme options in the Admin Panel. See the [Hadron Theme Options](/docs/theme/options) for more information.

> [!TIP]
> We don't recommend customizing the theme directly, as updates to the theme would overrite your changes. A more recommended way is to create a child theme for that. <br />
> See [section Hadron Customizer](#hadron-customizer) below for further information,

## Variants to customize the theme
In Grav, there are multiple ways to customize a theme (see [Grav Docs](https://learn.getgrav.org/20/themes/customization) for further info). Basically, there are two ways to customize the Hadron theme:
1. Directly edit the theme's source code _(not recommended)_: You can edit the full source code of a theme directly. Although this is the easiest way to customize a theme, it is not recommended because you will lose your changes when you update the theme.
2. Use a child/ inherited theme _(recommended)_: You can create a child theme that inherits from the Hadron theme. This way, you can customize the theme without losing your changes when you update the theme. (Hadron itself is a child theme of Quark.)

## Hadron Customizer
**By using our [Hadron Skeleton](/docs/skeleton), you have the _Hadron Customizer_ (`custom`) theme included, which acts as a pre-configured child theme of Hadron.** It also includes other Skeleton typical data, like configurations, pages, plugins & more. If you are only interested in the theme customization, we recommend just using the `user/themes` directory. <br />
That way, your changes stay when doing updates to the Hadron theme - we customize all our created websites that way.

The _Hadron Customizer_ (`custom`) theme is exactly what it sounds like: A child theme of Hadron, made for one purpose, customize the whole Hadron theme easily. It is structured the same way as the Hadron theme, and can be activated without making any changes to it. It uses Hadron as fallback, if it is not (yet) configured, like templates and styles. This way you can start customizing on the go after you activated it.

> [!CAUTION]
> By updating Hadron, it is possible that some configuration may break the theme. This is the case when you overwrite templates, styles, or configs. However, it won't delete your changes at any time, you may just need to edit your own changes to match Hadron's updated version.

### Customize CSS / SCSS styles
Customize CSS / SCSS to apply custom styles to your website.

Simply edit the `user/themes/custom/css/custom.css` file and apply your own styles. They will already be applied to your website. Have in mind, that when styles won't get applied, you need to be more specific with your CSS selector, or add `!important` to your rules.

For more possibilities, you may want to edit the `user/themes/custom/scss/custom.scss` file, i.e. if you want to use the SCSS variables and mixins provided by Hadron. Simply add your styles to the `custom.scss` file or its modules. There is a module `_theme.scss` for predefined variables from Hadron, and a module `_styles` to use too.

To compile SCSS / SASS, there already is a build process configured with gulp (`gulpfile.js`). Run `npm i` in the root directory of the `user/themes/custom` directory to install dependencies. After, you can run various command over npm:
- `npm run compileStyles`: Compiles SCSS to CSS
- `npm run compressCSS`: Compresses the compiled CSS
- `npm run buildCSS`: Run compileSCSS first, then compressCSS
- `npm run watchCSS`: Run compileSCSS & compressCSS with a file watcher for changes

This will also recompile `hadron.scss` to apply your changed variables & co and be used on the website instead of the original `hadron.css`

> [!CAUTION]
> Have in mind that when compiling SCSS, any changes to the `custom.css` that were made manually, will be overwritten. Copy your CSS styles to SCSS before when switching!

### Customize JavaScript / TypeScript
Customize JavaScript or TypeScript files to apply custom functionality to your website.

Simply edit the `user/themes/custom/js/custom.js` file and apply your own scripts. They will already be applied to your website. You can also edit the `user/themes/custom/ts/custom.ts` file to apply custom TypeScript functionality.

To compile TypeScript, there already is a build process configured with gulp (`gulpfile.js`). Run `npm i` in the root directory of the `user/themes/custom` directory to install dependencies. After, you can run various command over npm:
- `npm run compileTypescript`: Compiles TypeScript to JavaScript
- `npm run compressJavascript`: Compresses the compiled JavaScript
- `npm run buildJS`: Run compileTypescript first, then compressJavascript
- `npm run watchJS`: Run compileTypescript & compressJavascript with a file watcher for changes

> [!CAUTION]
> Have in mind that when compiling TypeScript, any changes to the `custom.js` that were made manually, will be overwritten. Copy your JavaScript code to TypeScript before when switching!

### Customize Twig templates
Customize Twig templates to change the layout of your pages from the generated HTML, or creating new page types with your own logic.

To edit a template, simply copy the desired template from the Hadron / Quark2 theme to the Hadron Customizer theme using the same structure: i.e. copy `user/themes/hadron/templates/partials/base.html.twig` to `user/themes/custom/templates/partials/base.html.twig`. <br />
To create a new page type, create a new template file in the `user/themes/custom/templates` directory. For modular page types, use `user/themes/custom/templates/modular`.

### Customize theme options
Customize theme options by editing `user/themes/custom/blueprints.yaml`. This will change the configuration options of the Hadron Customizer theme in the Admin.

See [Blueprints in Grav Docs](https://learn.getgrav.org/20/forms/blueprints#themes-and-plugins) for more information.

### Customize translations
To add or change existing translation keys, create and edit the `user/themes/custom/languages.yaml` file. Add the desired language code and below the key:
```yaml
en:
  ICU:
    ADMIN_NEXT:
      SETTINGS:
        GRAV_LOGO: Grav Logo
## OR
EN.ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO: Grav Logo
```
This will set `ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO` to 'Grav Logo' for English language.

You could also create a language file for each language, e.g. `user/themes/custom/translations/en.yaml`:
```yaml
ICU:
  ADMIN_NEXT:
    SETTINGS:
      GRAV_LOGO: Grav Logo
## OR
ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO: Grav Logo
```
This will set `ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO` to 'Grav Logo' for English language.

To add a translation anywhere, you can put a valid translation key like `ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO` in a `blueprints.yaml` file, or using it as `{{ ICU.ADMIN_NEXT.SETTINGS.GRAV_LOGO | t }} in Twig.

See [Twig filters `t` & `tl` in Grav Docs](https://learn.getgrav.org/20/themes/twig-tags-filters-functions/functions#t)

### Customize other functionality
You can also customize other functionality of the Hadron theme, by editing any part of the Hadron Customizer theme or Grav. See [Theme Customization in Grav Docs](https://learn.getgrav.org/20/themes/customization).

## other ways
If you rather not use the Hadron Skeleton / Hadron Customizer, you can also create a child theme manually. For more information, see the [Grav Docs](https://learn.getgrav.org/20/themes/customization#theme-inheritance). This is useful if you already habe a Grav installation and want to add the Hadron theme to it. But if you want to create a new website with Grav + Hadron, the skeleton might be the better choice.

Nevertheless, it can be useful to take over some of the Hadron Customizer Theme to facilitate the customizations. You can find the code in the [Hadron Skeleton on GitHub under `themes/custom`](https://github.com/Crabston/grav-skeleton-hadron/tree/main/themes/custom).
