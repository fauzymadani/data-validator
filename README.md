# Data Validator

**Data Validator** is a PHP package that provides a set of validation methods for common data types such as emails, URLs, phone numbers, and more.

## Requirements

- PHP 7.4 or higher
- Composer

## Installation

You can install the package via Composer. Run the following command in your project directory:

```bash
composer require fauzy/data-validator
```

## Usage

To use the Data Validator package, follow these steps:

#### 1. Include the Autoload File

In your PHP script, include the Composer autoload file:

```php
require 'vendor/autoload.php';
```

#### 2. Create an Instance of the Validator

Create an instance of the `validator` class:

```php
use DataValidator\validator;

$validator = new validator();
```

#### 3. Use Validation Methods

You can now use the provided validation methods. Here are some examples:

##### Validate Email

```php
$email = "test@example.com";

if ($validator->validateEmail($email)) {
    echo "$email is a valid email.\n";
} else {
    echo "$email is not a valid email.\n";
}
```

##### validate url

```php
$url = "https://example.com";

if ($validator->validateUrl($url)) {
    echo "$url is a valid URL.\n";
} else {
    echo "$url is not a valid URL.\n";
}
```

##### Validate phone number

```php
$phone = "+628123456789";

if ($validator->validatePhoneNumber($phone)) {
    echo "$phone is a valid phone number.\n";
} else {
    echo "$phone is not a valid phone number.\n";
}
```

### Full example

```php
<?php

require 'vendor/autoload.php';

use DataValidator\validator;

$validator = new validator();

// Validate Email
$email = "test@example.com";
echo $validator->validateEmail($email) ? "$email is a valid email.\n" : "$email is not a valid email.\n";

// Validate URL
$url = "https://example.com";
echo $validator->validateUrl($url) ? "$url is a valid URL.\n" : "$url is not a valid URL.\n";

// Validate Phone Number
$phone = "+628123456789";
echo $validator->validatePhoneNumber($phone) ? "$phone is a valid phone number.\n" : "$phone is not a valid phone number.\n";
```

## License

This package is licensed under the MIT License. See the LICENSE file for more information.

## Contributing

If you would like to contribute to this project, please open an issue or submit a pull request on the GitHub repository.

## Real world example

if you have a form with an input that requires a phone number, you can validate it with this

```html
<!-- form.html -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Phone Number Validation</title>
  </head>
  <body>
    <h1>Phone Number Validator</h1>
    <form action="validate_phone.php" method="post">
      <label for="phone">Enter your phone number:</label>
      <input type="text" id="phone" name="phone" required />
      <br /><br />
      <input type="submit" value="Validate" />
    </form>
  </body>
</html>
```

```php
// validate_phone.php
<?php

require 'vendor/autoload.php';

use DataValidator\validator;


if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];

    $validator = new validator();

    // Validate phone number
    if ($validator->validatePhoneNumber($phone)) {
        echo "<h1>Result</h1>";
        echo "<p>$phone is a valid phone number.</p>";
    } else {
        echo "<h1>Result</h1>";
        echo "<p>$phone is not a valid phone number.</p>";
    }
} else {
    echo "<h1>Error</h1>";
    echo "<p>No phone number provided.</p>";
}

```

## Author

Fauzy madani : https://github.com/fauzy <br>
<a href="mailto:fauzymadani3@gmail.com">
<img src="https://img.shields.io/badge/Gmail-333333?style=for-the-badge&logo=gmail&logoColor=red" />
</a>

### Donate
donate bitcoin: `bc1q032apdhxqdn67rhaw48qs2mc84lqh4zyy3csh8`
