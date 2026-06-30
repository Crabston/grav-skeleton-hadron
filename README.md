![Hadron Logo](hadron.svg)

# Grav Hadron Skeleton
[Hadron](https://usehadron.dev/) is more than a modern and customizable [Grav](https://getgrav.org/) theme and skeleton. On the one hand, it is optimized for beginners to quickly create a simple website, but on the other hand, it is also suitable for professionals who want to use Hadron as a foundation for a complex website with self-developed functions.

This skeleton includes the [Hadron Theme](https://github.com/Crabston/grav-theme-hadron/) itself, plus a ready-to-use user folder with examples, templates and much more to start building upon our templates to create a new website easily using Grav CMS.

> [!NOTE]
> With the latest Hadron 3 we now support [Grav v2](https://getgrav.org/blog/grav-2-stable-released) & [Quark2](https://github.com/getgrav/grav-theme-quark2)!

## Demo
You can see the Hadron skeleton & theme in action on the [Hadron Website](https://usehadron.dev/). There you will find a short introduction to the skeleton/ theme and its features too. There is an elements page and some template / example pages too.

If you want, you can also follow the [installation instructions](#installation), to test Hadron live on your device. It is very easy and just takes a few minutes to set up.

## Features
_Learn more about all the features of Hadron in detail on [usehadron.dev/docs](https://usehadron.dev/docs)._

Here are some of the main features of the Hadron skeleton:
- **Ready-to-use Grav instance with Hadron theme.**
- Full website template with examples for websites with optional webshop.
- Configured for multilingual and can be easily extended to support other languages.
- Many standard features that are needed for most websites already included.
- Pre-defined groups configuration to easily manage user permissions via admin.
- Pre-installed plugins + pre-setup config to enhance the site for publishing.

## Get Started
To get started quickly with the Hadron skeleton, you can check the [installation instructions](#installation) below. If you want to learn more about the Hadron theme & skeleton, you can visit the [Hadron Documentation](https://usehadron.dev/docs). There you will also find a detailed guide on how to install the skeleton and publish your first site.

## Installation
_See [usehadron.dev/docs/skeleton/installation](https://usehadron.dev/docs/skeleton/installation) for detailed info_ or check out the quickstart methods [Installation (for developers)]() & [Installation (for beginners)]()

### Installation (for developers)
If you want to make changes with Git to the skeleton, the most comfortable way is to clone the repository. That way you can easily pull updates and changes from the original repository. There are multiple variations, depending on what you want to do with the skeleton:

#### Creating from the template (recommended)
If you would like to create a new repository based on this skeleton, you can use the `Use this template` button on the GitHub repository page. This will create a new repository in your account based on the skeleton. But you will not be able to pull updates from the original repository.
_This is the recommended way if you want to develop a new site based on this skeleton and do not plan to contribute to the original skeleton or pull updates from it._

To create a new repository based on this skeleton, click the `Use this template` button on the GitHub repository page. You will be asked to enter a repository name and description. After that, you have a current copy of the skeleton in your account. You can now clone the repository to your computer and start developing your site.

> Note: You will have to clone the repository to the `user` folder of your Grav installation (Grav core).

#### Creating a fork
By forking this repository, you create a linked copy of the original repository in your own GitHub account. This way you can make changes to the skeleton and push them to your own repository. You can then create a new site using your fork as a skeleton.
_This is the recommended way if you want to contribute to the original skeleton or pull updates from it._

To fork the repository, click the `Fork` button on the GitHub repository page. You will now have a copy of the skeleton in your account. You can clone the repository to your computer and start developing your site.

> Note: You will have to clone the repository to the `user` folder of your Grav installation (Grav core).

#### Cloning the repository directly (not recommended)
Cloning the repository directly will create a local copy of the skeleton on your computer.
_This is only recommended if you want to try out the skeleton or make changes to it without contributing to the original repository or pulling updates from it. If you would rather create a new site based on the skeleton, use one of the above methods._

To clone the repository directly, use the following commands:
```bash
cd /your/preferred/directory
git clone https://github.com/Crabston/grav.git .
git clone https://github.com/Crabston/grav-skeleton-hadron.git user
```

#### Install and start the server
```bash
bin/grav install
bin/grav server
```

### Installation (for beginners)
If you are new to Grav / Website / Programming, you can download the skeleton as a ZIP file and install it manually. You can download two different versions of the skeleton:

#### Download ZIP file
By downloading the skeleton, you will get a ZIP file that includes the Grav core, plugins, and themes required to run the skeleton. This is the easiest way to get started with the skeleton, since you will have everything you need to run it.

To download the skeleton, go to the [releases page](https://github.com/Crabston/grav-demo/releases) and download the latest release with dependencies. You can then unzip the file to the root of your server / computer

### Start the server
Open up the console on your computer (CMD / Terminal), navigate to your Grav folder with `cd` and run the command `bin/grav server`. This will start a small webserver on your device, and you can visit the website  using the provided URL (in most cases `http://127.0.0.1:8000`). Navigate to `/admin` and create a local account.
