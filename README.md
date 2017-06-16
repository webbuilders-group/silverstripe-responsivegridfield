Responsive GridField
=================
Responsive addon for frontendgridfield that makes a SilverStripe GridField work better on various screensizes.

## Maintainer Contact
* Ed Chipman ([UndefinedOffset](https://github.com/UndefinedOffset))

## Requirements
* SilverStripe Framework 3.1+
* [webbuilders-group/silverstripe-frontendgridfield](https://github.com/webbuilders-group/silverstripe-frontendgridfield)


## Installation
__Composer (recommended):__
```
composer require webbuilders-group/silverstripe-responsivegridfield
```


If you prefer you may also install manually:
* Download the module from here https://github.com/webbuilders-group/silverstripe-responsivegridfield/archive/master.zip
* Extract the downloaded archive into your site root so that the destination folder is called responsivegridfield, opening the extracted folder should contain _config.php in the root along with other files/folders
* Run dev/build?flush=all to regenerate the manifest


## Usage
Usage of the module is simple, you just need to add the component ``ResponsiveGridFieldColumns`` to your GridField's configuration. See the [documentation](docs/en) for more information on how to use the module.
