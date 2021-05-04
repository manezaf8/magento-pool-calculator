## magento pool calculator

- This is a module that adds a pool calculator to the product view page 

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main functionalities

- Adds the calculator
- Calculates the volume of the pool
- Adds Pool volume attribute to add the item volume.
- increases QTY According to the total amount 
- Hides the calculator if the product doesn't have the pool volume velue.

## Installation
\* = in production please use the `--keep-generated` option when running `bin/magento setup:upgrade`

### Type 1: Zip file

 - Unzip the zip file in `app/code/Maneza/Calculator`
 - Enable the module by running `php bin/magento module:enable Maneza_Calculator`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require maneza/module-calculator`
 - enable the module by running `php bin/magento module:enable Maneza_Calculator`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`
 
 ## Configuration

Enable option in the admin config


## Specifications

 - Block
	- CurrentProduct > script.phtml


## Attributes

 - Product - *Item Volume* (`item_volume`)
 

