wkhtmltopdf
================

This Repo contains the Binarys from the [wkhtmltopdf project](https://code.google.com/p/wkhtmltopdf/).
More about the functionality of wkhtmltopdf and wkthmltoimage can be found there.

## Installation

_Hint_:
The version of the binary is equal to the git tag.
To install the latest version, use '0.11.0-RC1'.

### Packagist

This package can be found on [Packagist](http://packagist.org) and installed with [Composer](http://getcomposer.com/).

Require the package for _i386_ with:

    php composer.phar require h4cc/wkhtmltopdf-i386

And for _amd64_ with:

    php composer.phar require h4cc/wkhtmltopdf-amd64

The binary will then be located at:

    vendor/h4cc/wkhtmltopdf-i386/bin/wkhtmltopdf-i386

Also a symlink will be created in your configured bin/ folder, for example:

    vendor/bin/wkhtmltopdf-i386

------------------------------------

An alternative way to install this package is using the direct download from google code.
You have to add _own package sources_ to the composer.json to provide a new installable package.

    {
        "repositories": [
            {
                "type": "package",
                "package": {
                    "name": "google/wkhtmltopdf-amd64",
                    "version": "0.11.0-RC1",
                    "dist": {
                        "url": "http://wkhtmltopdf.googlecode.com/files/wkhtmltopdf-0.11.0_rc1-static-amd64.tar.bz2",
                        "type": "tar"
                    }
                }
            },
            {
                "type": "package",
                "package": {
                    "name": "google/wkhtmltopdf-i386",
                    "version": "0.11.0-RC1",
                    "dist": {
                        "url": "http://wkhtmltopdf.googlecode.com/files/wkhtmltopdf-0.11.0_rc1-static-i386.tar.bz2",
                        "type": "tar"
                    }
                }
            }
        ]
    }

After that, you can require the defined packages like this in your composer.json for _i386_:

    {
        "require": {
            "google/wkhtmltopdf-i386": "0.11.0-RC1"
        }
    }

and for _amd64_:

    {
        "require": {
            "google/wkhtmltopdf-amd64": "0.11.0-RC1"
        }
    }
