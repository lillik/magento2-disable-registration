### Introduction
The **«Disable Registration»** Magento 2 extension allows a store administrator to disable functionality of customer registration in the store.

![alt text](https://res.cloudinary.com/dho2b9ukb/image/upload/v1590866209/disable-registration/Screenshot_2020-05-30_21-47-07.png "Magento 2 Extension Disable Customer Registration")

The extension allow you to replace in the store the customer **Register** button with the **Contact Us** button with a message.
### What can the extension do for your store?
###### Disable Customer Registration, and remove Customer Registration form.
![alt text](https://res.cloudinary.com/dho2b9ukb/image/upload/v1590866209/disable-registration/Screenshot_2020-05-30_21-47-37.png "Magento 2 Extension Disable Customer Registration")
###### Replace Customer Registration form with **Contact Us** button.
![alt text](https://res.cloudinary.com/dho2b9ukb/image/upload/v1590866209/disable-registration/Screenshot_2020-05-30_21-49-19.png "Magento 2 Extension Disable Customer Registration")
### Features
 - Disable customer registration form.
 - Support multiple store websites.
 - Disable access to direct url for account creation in store.
 - Replace in the store the customer **Register** button with the **Contact Us** button. 
### Installation
The preferred way of installing **lillik/module-disable-registration** is through Composer. Simply add **lillik/module-disable-registration** as a dependency:
```bash
composer require lillik/module-disable-registration
```
Install and Enable Module:
```bash
php bin/magento module:enable Lillik_DisableRegistration
php bin/magento setup:upgrade --keep-generated
php bin/magento setup:di:compile
php bin/magento cache:clean
```
### Configuration

```
Stores -> Configuration -> Customer -> Customer Configuration -> Create New Account Options
```
![alt text](https://res.cloudinary.com/dho2b9ukb/image/upload/v1590866209/disable-registration/Screenshot_2020-05-30_21-47-07.png "Magento 2 Extension Disable Customer Registration")

### Contribution
If you have any issues, please [contact me](https://twitter.com/clipro) or open a bug report in GitHub's [issue tracker]().

### License
The code is licensed under [Apache-2.0 License](https://www.apache.org/licenses/LICENSE-2.0).

### TODO 
