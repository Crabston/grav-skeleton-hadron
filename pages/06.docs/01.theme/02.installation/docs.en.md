---
title: Installation | Theme
slug: installation
menu: Installation
subtitle: This page shows the different ways to install the Hadron theme and guides you through the installation of the Hadron theme on an existing Grav site.
sitemap:
    changefreq: yearly
    priority: 0.5
    lastmod: 02-07-2026
date: 02-07-2026
taxonomy:
    category: [ Docs, Hadron, Theme ]
    tag: [ Beginner, Expert, Installation, Theme ]
custom_hero_header_image: "media://logo/hadron-logo.svg"
---

## Installation
Installing the Hadron theme can be done in multiple ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the theme with a simple terminal command, while the manual method enables you to do so via a zip file. There are other methods available, such as installing via the Admin Plugin or via Git.

The theme by itself is useful, but you may have an easier time getting up and running by installing a skeleton. See the [Hadron Skeleton Repository](https://github.com/Crabston/grav-skeleton-hadron) or [Hadron Skeleton Docs](/docs/skeleton) which is a self-contained repository for a complete site which include: sample content, page templates, configuration, theme, and plugins and much more!

### 1. GPM Installation (recommended)
The simplest way to install this theme is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line). From the root of your Grav installation, type:

```shell
bin/gpm install hadron
```

This command installs the Hadron theme in your `/user/themes` directory within Grav. The theme files can be found under `/your/site/grav/user/themes/hadron`.

The main advantage of this method is that you can update the theme with a simple command:

```shell
bin/gpm update hadron
```

### 2. Admin Plugin Installation
If you are using the [Admin Plugin](https://github.com/getgrav/grav-plugin-admin) or [Admin2 Plugin](https://github.com/getgrav/grav-plugin-admin2), you can install the theme directly through the Admin(2) Plugin. Go to the `Themes` section, click on `Add` and search for `hadron`. Select the theme and click on `Install`.

The theme will now be installed in your `/user/themes` directory. It can also be updated via the Admin Plugin when a new version is available.

### 3. Git Installation
As an alternative, you can also install the theme via Git. Go to your Grav root `/your/site/grav` directory and run the following command:

```shell
git clone https://github.com/Crabston/grav-theme-hadron.git /user/themes/hadron
```

The theme can now be found in the directory `/your/site/grav/user/themes/hadron`.

To update the theme, you can simply change to the theme directory and run `git pull`:

```shell
cd /your/site/grav/user/themes/hadron
git pull
```

### 4. Manual Installation (not recommended)
To manually install the theme, simply download the zip version of this repository and unpack it under `/your/site/grav/user/themes`. Then rename the folder to `hadron`. The theme files can be found on [GitHub](https://github.com/Crabston/grav-theme-hadron) or on [GetGrav.org](http://getgrav.org/downloads/themes).

You now have all theme files under `/your/site/grav/user/themes/hadron`.

## Next steps
After installing the theme, you can activate the theme in the `Grav Admin` interface. To do this, go to the `Themes` section and select `Hadron`. Click on `Activate` to activate the theme.

The theme is now activated and should be visible on your site. You can now customize the theme settings and design the page to your liking. Learn more about the [Theme Options](/docs/theme/options).
