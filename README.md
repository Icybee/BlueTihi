# BlueTihi [![Build Status](https://secure.travis-ci.org/Icybee/BlueTihi.svg?branch=master)](http://travis-ci.org/Icybee/BlueTihi)

----------

## Requirements

The package requires PHP 5.4 or later.





## Installation

The recommended way to install this package is through [Composer](http://getcomposer.org/).
Create a `composer.json` file and run `php composer.phar install` command to install it:

```json
{
	"minimum-stability": "dev",

	"require": {
		"icybee/bluetihi": "*"
	}
}
```

The following package is required, you might want to check it out:

* [icanboogie/common](https://packagist.org/packages/icanboogie/common)





### Cloning the repository

The package is [available on GitHub](https://github.com/Icybee/BlueTihi), its repository can be
cloned with the following command line:

	$ git clone https://github.com/Icybee/BlueTihi.git





## Documentation

The package is documented as part of the [ICanBoogie](http://icanboogie.org/) framework
[documentation](http://icanboogie.org/docs/). You can generate the documentation for the package
and its dependencies with the `make doc` command. The documentation is generated in the `docs`
directory. [ApiGen](http://apigen.org/) is required. You can later clean the directory with
the `make clean` command.





## Testing

The test suite is ran with the `make test` command. [Composer](http://getcomposer.org/) is
automatically installed as well as all dependencies required to run the suite. You can later
clean the directory with the `make clean` command.

The package is continuously tested by [Travis CI](http://about.travis-ci.org/).

[![Build Status](https://secure.travis-ci.org/Icybee/BlueTihi.svg?branch=master)](http://travis-ci.org/Icybee/BlueTihi)





## License

Icybee/BlueTihi is licensed under the New BSD License - See the [LICENSE](LICENSE) file for details.