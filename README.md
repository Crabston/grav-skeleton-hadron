# Grav Demo Site

Demo site for Grav CMS by Crabston.

## Installation

See [Crabston/grav/blob/main/docs/install.md](https://github.com/Crabston/grav/blob/main/docs/install.md)

## Installation (clone repository)
If you want to make changes with Git to the skeleton, the most comfortable way is to clone the repository. This way you can easily pull updates and changes from the original repository. There are multiple variations, depending on what you want to do with the skeleton:

### Creating from the template (recommended)
If you would like to create a new repository based on this skeleton, you can use the `Use this template` button on the GitHub repository page. This will create a new repository in your account based on the skeleton. But you will not be able to pull updates from the original repository.  
_This is the recommended way if you want to develop a new site based on this skeleton and do not plan to contribute to the original skeleton or pull updates from it._

To create a new repository based on this skeleton, click the `Use this template` button on the GitHub repository page. You will be asked to enter a repository name and description. After that, you have a current copy of the skeleton in your account. You can now clone the repository to your computer and start developing your site.

> Note: You will have to clone the repository to the `user` folder of your Grav installation (Grav core).

### Creating a fork
By forking this repository, you create a linked copy of the original repository in your own GitHub account. This way you can make changes to the skeleton and push them to your own repository. You can then create a new site using your fork as a skeleton.  
_This is the recommended way if you want to contribute to the original skeleton or pull updates from it._

To fork the repository, click the `Fork` button on the GitHub repository page. You will now have a copy of the skeleton in your account. You can clone the repository to your computer and start developing your site.

> Note: You will have to clone the repository to the `user` folder of your Grav installation (Grav core).

### Cloning the repository directly (not recommended)
Cloning the repository directly will create a local copy of the skeleton on your computer.  
_This is only recommended if you want to try out the skeleton or make changes to it without contributing to the original repository or pulling updates from it. If you would rather create a new site based on the skeleton, use one of the above methods._

To clone the repository directly, use the following commands:
```bash
cd /your/
git clone https://github.com/getgrav/grav.git .
rm user/ -rf
git clone https://github.com/Crabston/grav-demo.git user
bin/grav install
```

## Installation (ZIP)
If you do not want to use Git, you can download the skeleton as a ZIP file and install it manually. You can download two different versions of the skeleton:

### with dependencies
By downloading the skeleton with dependencies, you will get a ZIP file that includes the Grav core, plugins, and themes required to run the skeleton. This is the easiest way to get started with the skeleton, since you will have everything you need to run it.

To download the skeleton with dependencies, go to the [releases page](https://github.com/Crabston/grav-demo/releases) and download the latest release. You can then unzip the file to the root of your server.

### manual (not recommended)
To install this package manually, you will essentially be replacing the default `user` folder with the skeleton. To do this, download the zip version of this repository and unzip it under `/your/site/grav/`. Then, rename the folder to `user`.

If a user folder already exists, back up the folder to a safe place, delete it (if there is no custom content in it you wish to keep) or replace its contents with the files in the unzipped folder.

You should now have all the skeleton files under

	/your/site/grav/user/

> NOTE: This skeleton is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav), multiple plugins and themes to be installed in order to operate. If you download this skeleton as part of a pre-assembled package from [GetGrav.org](http://getgrav.org/downloads/skeletons#extras) or [GitHub Releases](https://github.com/Crabston/grav-demo/releases), you should have everything you need to get started.
