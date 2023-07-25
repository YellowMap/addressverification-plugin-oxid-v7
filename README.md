# Plugin-oxid-yellowmap
An Oxid eShop plugin to suggest address in forms

## Installation via composer
- Connect to the webserver with a console, navigate to the shop base folder (where the composer.json file is located)
- execute the following command:
```
composer require yellowmap/addressverification-plugin-oxid-v7 --update-no-dev
```
- activate the module after the composer install is finished
```
vendor/bin/oe-console oe:module:activate ymaddressverification
```

## Manual Installation
- Copy the content into a new directory "vendor/yellowmap/addressverification-plugin-oxid-v7" of the shop installation

- Update the shop's main composer.json file (next to source and vendor folders). Add the following block :
```
  "autoload": {
    "psr-4": {
      "YellowMap\\YMAddressVerification\\": "./vendor/yellowmap/addressverification-plugin-oxid-v7"
    }
  }
```

- Connect to the webserver with a console, navigate to the shop base folder
- install oxid module configuration
```
vendor/bin/oe-console oe:module:install vendor/yellowmap/addressverification-plugin-oxid-v7
```

- install module assets
```
vendor/bin/oe-console oe:module:install-assets
```

- activate oxid module
```
vendor/bin/oe-console oe:module:activate ymaddressverification
```

## Configuration

### Module Configuration
Through the module settings you can setup the Smartmaps API Key, mandatory to use the functionality. 

See https://www.smartmaps.net/

## Usage

- When landing on a form asking for an address (regitration, guest checkout, user profile addresses), the yellowmap module will enhance the **street** field.
- In this field, you will be able to type in the address hints (street, zip code, house number ...) and the module will suggest existing results based on the entry.

### Note about country restriction
- By default, the suggestions will be restricted to configured country(ies) in "Master Settings > Settings > Global".
- If the form's country field is set (selecting a country, or after a first autocompletion), the search is now restricted to this country alone.
  - If no country is selected (dropdown set back to "-"), the default behaviour applies.


## Author
FATCHIP GmbH | https://www.fatchip.de | support@fatchip.de

## License
see LICENSE file