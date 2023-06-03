# A Chinese translation for phpVMS <sup>7</sup>

[![License](https://poser.pugx.org/nabeel/phpvms/license)](https://packagist.org/packages/nabeel/phpvms)
# Introductions
### This is a resource for phpVMS "lang",translated to Chinese Simplified.Also includeing the config of choosing language selctions.

### Refer: [Official WEB of phpVMS](https://www.phpvms.net)

# Install official phpVMS(refers)

A full distribution, with all of the composer dependencies, is available at this 
[phpVMS's GitHub Releases](https://github.com/nabeelio/phpvms/releases) link. (To know more info,please go there too.)

# Install this "lang" pack

- Personal Computer boot:
  - git clone OR download all files
  - upload to your virtual airlines server
  - extract(directly)
  - Find "env.php" in your directory,then open and edit like "The EXAMPLE part of env.php"
- Server directly boot:
  - git clone OR download to your server phpVMS web directory
  - Find "env.php" in your directory,then open and edit like "The EXAMPLE part of env.php"

- The EXAMPLE part of env.php
```
# THIS FILE MUST BE KEPT SECRET! IT IS BLOCKED IN THE HTACCESS FILE
# HOWEVER, THIS DIRECTORY SHOULDN'T BE EXPOSED TO THE PUBLIC AT ALL
# SEE THE DOCS FOR PROPER (SECURE) INSTALLATION:
# https://docs.phpvms.net/installation/uploading
#
# This is the place to edit your configuration. To change a config that's
# not present here, you need to either edit the file/config in the config
# folder, or change it to read the value from the environment. Something like:
#
# 'some_key' = env('ENVIRONMENT_VARIABLE_KEY_ADDED_BELOW', 'default value')
#
# Various other settings in the configs also read from some environment variables
# by default. You can override those here

APP_KEY='XXX'
APP_NAME='XXX Virtual Airlines'
SITE_NAME='XXX Virtual Airlines'
APP_URL='http(s)://va.yourdomin.domin'
APP_LOCALE=cn
```

# Declaration:All the things can't fully ensure that it always works well

### If you find any problems,you can file issues then help me to solve it.
### Also git push to be added in "Contributor".
### This is only including fore-end translation.

# TODO
### Traditional Chinese translation language pack
### Rear-end translation dev
### Installation page translate