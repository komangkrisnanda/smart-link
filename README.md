# SmartLink Package

The SmartLink package is a PHP library that facilitates the generation of smart links for mobile and desktop applications. It allows you to create dynamic links that can be used to direct users to specific content or actions within your application.

## Installation

You can install the SmartLink package via Composer. Run the following command in your terminal:

```bash
composer require komangkrisnanda/smart-link
```

## Usage

You can use the SmartLink package in your PHP code as follows:

```php
use SmartLink\SmartLink;

// Set the package name and desktop URL (optional if set globally)
SmartLink::setPackageName('com.yourcompany.yourapp');
SmartLink::setDesktopURL('https://example.com/desktop-landing-page');

// Generate a smart link for mobile or desktop
$payload = ['referral_code' => 'ABC123'];
$smartLink = SmartLink::generateSmartLink($payload);

// Use the generated smart link in your application
echo $smartLink;
```

## Configuration

You can configure the package globally in your Laravel application by setting the package name and desktop URL in the `config/smartlink.php` file. You can publish the configuration file using the following command:

```bash
php artisan vendor:publish --tag=config --provider="SmartLink\SmartLinkServiceProvider"
```

## Testing

You can run the tests for the SmartLink package using PHPUnit. Make sure to set the package name and desktop URL in the `setUp` method of the test file before running the tests.

## Contributing

Contributions are welcome! If you have any ideas, suggestions, or bug reports, please create an issue or submit a pull request on the [GitHub repository](https://github.com/komangkrisnanda/smart-link).

## License

The SmartLink package is open-source software licensed under the GNU General Public License v3.0. See the [LICENSE](LICENSE) file for more information.

Feel free to contribute to the project or report any issues on the [GitHub repository](https://github.com/komangkrisnanda/smart-link).
```

Feel free to include additional sections or customize the content further based on the specific features and use cases of your SmartLink package. This README file will serve as a comprehensive guide for users who want to install, configure, and use your package in their PHP applications.