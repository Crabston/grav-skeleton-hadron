---
title: Installation | Hadron Skeleton
menu: Installation
slug: installation
sitemap:
  changefreq: yearly
  priority: 0.5
  lastmod: 10-10-2024
date: 10-10-2024
taxonomy:
  category: Hadron
  tag: [ Skeleton, Installation ]
header_image_file: hero.webp
hero_image: hero.webp
hero_classes: 'text-light overlay-dark parallax'
---

!!! This tutorial describes the different ways to install the Hadron Skeleton and guides you through the installation of the Skeleton for a new Grav site.

===

## Installation
The Hadron Skeleton can be installed in different ways.

## Methods
There are basically two methods to install the Skeleton: via Git or as a ZIP file. Both methods have their advantages and disadvantages, depending on how you want to use the Skeleton. There are also different variants of how you can install the Skeleton, depending on whether you want to edit the Skeleton or just use it.

## 1. Installation (Git)
If you want to edit the Skeleton with Git, the easiest way is to clone the repository. This way you can easily pull updates and changes from the original repository. There are different variants depending on what you want to do with the Skeleton:

### 1.1 Copy repository (recommended)
If you want to create a new repository based on this Skeleton, you can use the `Use this template` button on the GitHub repository page. This creates a new repository in your account based on the Skeleton. However, you will not be able to pull updates from the original repository.  
_This is the recommended way if you want to develop a new site based on this Skeleton and do not plan to contribute to the original Skeleton or pull updates from it._

To create a new repository based on this Skeleton, click the `Use this template` button on the GitHub repository page. You will be prompted to enter a repository name and description. After that, you have a current copy of the Skeleton in your account. You can now clone the repository to your computer and start developing your site.

!!! See point 1.3 on how to clone the repository to your computer (with Grav)

### 1.2 Fork repository
By forking this repository, you create a linked copy of the original repository in your own GitHub account. This way you can make changes to the Skeleton and push them to your own repository. You can then create a new site by using your fork as a Skeleton.  
_This is the recommended way if you want to contribute to the original Skeleton or pull updates from it._

To fork the repository, click the `Fork` button on the GitHub repository page. You now have a copy of the Skeleton in your account. You can clone the repository to your computer and start developing your site.

!!! See point 1.3 on how to clone the repository to your computer (with Grav)

### 1.3 Clone repository directly (not recommended)
Cloning the repository directly creates a local copy of the Skeleton on your computer.  
_This is only recommended if you want to try out the Skeleton or make changes to it without contributing to the original repository or pulling updates from it. If you prefer to create a new site based on the Skeleton, use one of the methods mentioned above._

To clone the repository directly, use the following commands:
```bash
cd /your/site/
git clone https://github.com/getgrav/grav.git .
rm user/ -rf
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
bin/grav install
```

You can also use our [modified Grav Core](https://github.com/Crabston/grav) with additional features:
```bash
cd /your/site/
git clone https://github.com/Crabston/grav.git .
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
bin/grav install
```

## 2. Installation (ZIP)
If you don't want to use Git, you can download the Skeleton as a ZIP file and install it manually. There are two different versions of the Skeleton:

### 2.1 with dependencies
If you download the Skeleton with dependencies, you will receive a ZIP file containing the Grav Core, plugins, and themes required to run the Skeleton. This is the easiest way to get started with the Skeleton, as you have everything you need to run it.

To download the Skeleton with dependencies, go to the [Releases page](https://github.com/Crabston/grav-demo/releases) and download the latest version. You can then extract the file into the root directory of your server.

### 2.2 manually (not recommended)
To install this package manually, you basically replace the standard `user` folder with the Skeleton. To do this, download the ZIP version of this repository and extract it to `/your/site/grav/`. Then rename the folder to `user`.

If there is already a `user` folder, back it up to a safe location, delete it (if there are no custom contents you want to keep), or replace its contents with the files in the extracted folder.

You should now have all Skeleton files under `/your/site/grav/user/`.

!!! This Skeleton is a modular component for Grav that requires [Grav](http://github.com/getgrav/grav), multiple plugins, and themes to function. If you download this Skeleton as part of a pre-packaged bundle from [GetGrav.org](http://getgrav.org/downloads/skeletons#extras) or [GitHub Releases](https://github.com/Crabston/grav-demo/releases), you should have everything you need to get started.

## Next steps
After installing the Skeleton, you can start developing/ editing your site.
