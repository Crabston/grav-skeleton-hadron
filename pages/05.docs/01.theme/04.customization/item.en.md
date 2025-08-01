---
title: Customization | Hadron Theme
menu: Customization
slug: customization
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

!!! This tutorial shows you how to customize the Hadron theme. By customizing the theme, you do more than just changing some options: You change the look and feel of your website by editing the theme's source code (CSS/ SCSS, JavaScript, Twig).

===

! Since you may edit CSS/ SCSS, JavaScript, and Twig files, it is recommended to have some knowledge of these languages. If you are not familiar with them, you can still customize the theme by changing the theme options in the Admin Panel. See the [Hadron Theme Options](/hadron/theme/options) for more information.

## Variants to customize the theme
In Grav, there are multiple ways to customize a theme (see [Grav Docs](https://learn.getgrav.org/17/themes/customization) for further info). Basically, there are two ways to customize the Hadron theme:
1. Directly edit the theme's source code _(not recommended)_: You can edit the full source code of a theme directly. Although this is the easiest way to customize a theme, it is not recommended because you will lose your changes when you update the theme.
2. Use a child/ inherited theme _(recommended)_: You can create a child theme that inherits from the Hadron theme. This way, you can customize the theme without losing your changes when you update the theme. (Hadron itself is a child theme of Quark.)

## Hadron Skeleton
The easiest way to customize the Hadron theme is to use the [Hadron Skeleton](https://github.com/Crabston/grav-skeleton-hadron). The Hadron Skeleton is a pre-configured Grav package that includes the Hadron theme and some demo content.

The Hadron Skeleton also includes a 3rd theme called «Local», which basically is what it sounds like: a local theme, directly in the skeleton, ready to be customized. This way, you can customize the theme without losing your changes when you update the theme.

## other ways
If you rather not use the Hadron Skeleton, you can also create a child theme manually. For more information, see the [Grav Docs](https://learn.getgrav.org/17/themes/customization#theme-inheritance). This is useful if you already habe a Grav installation and want to add the Hadron theme to it. But if you want to create a new website with Grav + Hadron, the skeleton might be the better choice.

Nevertheless, it can be useful to take over some of the Local Theme to facilitate the customizations. You can find the code in the [Hadron Skeleton on GitHub under `themes/local`](https://github.com/Crabston/grav-skeleton-hadron/tree/main/themes/local).
