---
title: Installation | Hadron Theme
menu: Installation
slug: installation
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 10-10-2024
date: 10-10-2024
taxonomy:
  category: Hadron
  tag: [ Theme, Installation ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-light overlay-dark parallax'
---

!!! This tutorial shows the different ways to install the Hadron theme and guides you through the installation of the Hadron theme on an existing Grav site.

===

## Installation
The Hadron theme can be installed in different ways. The installation via the GPM (Grav Package Manager) allows for a quick and easy installation of the theme with a simple terminal command, while the manual method allows for installation via a zip file. There is also a way to install the theme via Git or through the Admin Plugin.

The theme itself is useful, however, it may be easier to create a website with the Hadron Skeleton. The Hadron theme is included in the [Hadron Skeleton](https://github.com/Crabston/grav-skeleton-hadron), which includes a complete website. This includes: examples of content, configurations, themes, and plugins.

### 1. GPM Installation (recommended)
_This method is currently not supported as the theme is not yet available in the GPM. Please use another method._

The easiest way to install this theme is through the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) in your system terminal (also called command line). To do this, type the following command in the root directory of your Grav installation:

```shell
bin/gpm install hadron
```

This command installs the Hadron theme in your `/user/themes` directory within Grav. The theme files can be found under `/your/site/grav/user/themes/hadron`.

The advantage of this method is that you can update the theme with a simple command:

```shell
bin/gpm update hadron
```

### 2. Git Installation
As an alternative, you can also install the theme via Git. Go to your `/user/themes` directory and run the following command:

```shell
git clone https://github.com/Crabston/grav-theme-hadron.git hadron
```

The theme should now be found in the directory `/your/site/grav/user/themes/hadron`.

To update the theme, you can simply change to the theme directory and run `git pull`:

```shell
cd /your/site/grav/user/themes/hadron
git pull
```

### 3. Admin Plugin Installation
_This method is currently not supported as the theme is not yet available in the GPM. Please use another method._

If you are using the [Admin Plugin](https://github.com/getgrav/grav-plugin-admin), you can install the theme directly through the Admin Plugin. Go to the `Themes` section and click on `Add` and search for `hadron`. Select the theme and click on `Install`.

The theme will now be installed in your `/user/themes` directory. It can also be updated via the Admin Plugin when a new version is available.

### 4. Manual Installation (not recommended)
To manually install the theme, simply download the zip version of this repository and unpack it under `/your/site/grav/user/themes`. Then rename the folder to `hadron`. The theme files can be found on [GitHub](https://github.com/Crabston/grav-theme-hadron) or on [GetGrav.org](http://getgrav.org/downloads/themes).

You should now have all theme files under `/your/site/grav/user/themes/hadron`.

## Next steps
After installing the theme, you can activate the theme in the `Grav Admin` interface. To do this, go to the `Themes` section and select `Hadron`. Click on `Activate` to activate the theme.

The theme is now activated and should be visible on your site. You can now customize the theme settings and design the page to your liking. Learn more about the [Theme Options](/hadron/theme/options).
