---
title: Installation | Skeleton
slug: installation
menu: Installation
subtitle: This page describes the different ways to install the Hadron Skeleton and guides you through the installation of the Skeleton for a new Grav site.
sitemap:
    changefreq: yearly
    priority: 0.5
    lastmod: 02-07-2026
date: 02-07-2026
taxonomy:
    category: [ Docs, Hadron, Skeleton ]
    tag: [ Beginner, Expert, Installation, Skeleton ]
custom_hero_header_image: "media://logo/hadron-logo.svg"
---

## Installation
There are basically two methods to install the Hadron Skeleton: check out the quickstart methods [Installation (for developers)](#installation-for-develope) & [Installation (for beginners)](#installation-for-beginner)

## Installation (for developers)
If you want to make changes with Git to the skeleton, the most comfortable way is to clone the repository. That way you can easily pull updates and changes from the original repository. There are multiple variations, depending on what you want to do with the skeleton:

### Creating from the template (recommended)
If you would like to create a new repository based on this skeleton, you can use the `Use this template` button on the GitHub repository page. This will create a new repository in your account based on the skeleton. But you will not be able to pull updates from the original repository. <br />
_This is the recommended way if you want to develop a new site based on this skeleton and do not plan to contribute to the original skeleton or pull updates from it._

To create a new repository based on this skeleton, click the `Use this template` button on the GitHub repository page. You will be asked to enter a repository name and description. After that, you have a current copy of the skeleton in your account. You can now clone the repository to your computer and start developing your site.

> [!Note]
> You will have to clone the repository to the `user` folder of your Grav installation (Grav core). See below how to do it.

### Creating a fork
By forking this repository, you create a linked copy of the original repository in your own GitHub account. This way you can make changes to the skeleton and push them to your own repository. You can then create a new site using your fork as a skeleton. <br />
_This is the recommended way if you want to contribute to the original skeleton or pull updates from it._

To fork the repository, click the `Fork` button on the GitHub repository page. You will now have a copy of the skeleton in your account. You can clone the repository to your computer and start developing your site.

> [!Note]
> You will have to clone the repository to the `user` folder of your Grav installation (Grav core). See below how to do it.

### Cloning the repository directly (not recommended)
Cloning the repository directly will create a local copy of the skeleton on your computer.
_This is only recommended if you want to try out the skeleton or make changes to it without contributing to the original repository or pulling updates from it. If you would rather create a new site based on the skeleton, use one of the above methods._

To clone the repository directly, use the following commands:
```bash
cd /your/preferred/directory
git clone https://github.com/Crabston/grav.git .
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
```

## Installation (for beginners)
If you are new to Grav / Website / Programming, you can download the skeleton as a ZIP file and install it manually. You can download two different versions of the skeleton:

### Download ZIP file
By downloading the skeleton, you will get a ZIP file that includes the Grav core, plugins, and themes required to run the skeleton. This is the easiest way to get started with the skeleton, since you will have everything you need to run it.

To download the skeleton, go to the [releases page](https://github.com/Crabston/grav-skeleton-hadron/releases) and download the latest release with dependencies. You can then unzip the file to the root of your server / computer

## Start the server
Open up the console on your computer (CMD / Terminal), navigate to your Grav folder with `cd` and run the below commands:
```bash
bin/grav install
bin/grav server
```

This will start a small webserver on your device, and you can visit the website using the provided URL (in most cases `http://127.0.0.1:8000`). Navigate to `/admin` and create a local account.

## Next steps
After installing the Skeleton, you can [start setting up your site](/docs/skeleton/setup).
