# L10n Validator Config

WordPoints-specific configuration for [the WP L10n Validator](https://github.com/JDGrimes/wp-l10n-validator).

## Usage

Load these ignore rules using the `bootstrap` option in your JSON config file for the
validator:

```json
{
	"bootstrap": "/path/to/l10n-validator-config/bootstrap.php"
}
```

This will configure the validator with the same rules used for the WordPoints plugin.
This includes ignoring some PHP predefined and WordPress functions that you might not
always want to ignore, depending on your project. To only use the ignore rules for
functions defined by WordPoints itself, use the `wordpoints.php` file instead.
