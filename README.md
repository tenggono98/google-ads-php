# Google Ads API Client Library for PHP

This project hosts the PHP client library for the [Google Ads
API](https://developers.google.com/google-ads/api/docs/start).

## Features

*   Distributed via [Composer](https://getcomposer.org/) and
    [Packagist](https://packagist.org/packages/googleads/google-ads-php).
*   Easy management of credentials.
*   Easy creation of Google Ads API service clients.

## Requirements

*   This library depends on [Composer](https://getcomposer.org/). If you don't
    have it installed on your computer yet, follow the [installation guide for
    Linux/Unix/OS
    X](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) or
    [installation guide for
    Windows](https://getcomposer.org/doc/00-intro.md#installation-windows). For
    the rest of this guide, we're assuming that you're using Linux/Unix/OS X and
    have Composer installed
    [globally](https://getcomposer.org/doc/00-intro.md#globally), thus, your
    installed Composer is available on the command line as `composer`.
*   System requirements and dependencies can be found in
    [composer.json](composer.json) of this library.
    *   To install the gRPC PHP extension, see [this page](https://grpc.io/docs/quickstart/php.html)
*   You need a [developer
    token](https://developers.google.com/google-ads/api/docs/first-call/dev-token)
    to connect to the Google Ads API.

## Getting started

1.  Clone this project in the directory of your choice via:

        git clone https://github.com/googleads/google-ads-php.git

1.  Change into the `google-ads-php` directory.

        cd google-ads-php

    You'll see some files and subdirectories:

    *   `composer.json`: the composer file, which holds the requirements of this
        library.
    *   `src`: source code of the library.
    *   `tests`: tests of the library code.
    *   `examples`: many examples that demonstrate how to use the library to
        execute common use cases via the Google Ads API.
    *   `metadata`: some metadata files used internally by the source code.
        They're automatically generated files, so you shouldn't modify them.

1.  Run `composer install` at the command prompt. This will install all
    dependencies needed for using the library and running examples.

1.  Set up your OAuth2 credentials.

    The Google Ads API uses [OAuth2](http://oauth.net/2/) as the authentication
    mechanism. Choose the appropriate option below based on your use case, and
    read and follow the instructions that the example prints to the console.

    **If you already have credentials for the AdWords API...**

    *   If you have the `adsapi_php.ini` file you used for the AdWords API,
        copy and name it as `google_ads_php.ini`. Simply change the section name
        from `[ADWORDS]` to `[GOOGLE_ADS]`.

    *   If you don't have the file, copy the sample `google_ads_php.ini` to your
        [home
        directory](https://en.wikipedia.org/wiki/Home_directory#Default_home_directory_per_operating_system).
        This library determines the home directory of your computer by using
        [`EnvironmentalVariables::getHome()`](https://github.com/googleads/google-ads-php/blob/master/src/Google/Ads/GoogleAds/Util/EnvironmentalVariables.php#L36).

    **If you're accessing the Google Ads API using your own credentials...**

    *   Copy the sample [`google_ads_php.ini`](examples/Authentication/google_ads_php.ini)
        to your [home
        directory](https://en.wikipedia.org/wiki/Home_directory#Default_home_directory_per_operating_system).
        This library determines the home directory of your computer by using
        [`EnvironmentalVariables::getHome()`](https://github.com/googleads/google-ads-php/blob/master/src/Google/Ads/GoogleAds/Util/EnvironmentalVariables.php#L36).

    *   Follow the instructions at
        https://developers.google.com/google-ads/api/docs/oauth/cloud-project to
        create an OAuth2 client ID and secret for the **installed application**
        OAuth2 flow.

    *   Run the
        [AuthenticateInStandaloneApplication](https://github.com/googleads/google-ads-php/blob/master/examples/Authentication/AuthenticateInStandaloneApplication.php)
        example, which will prompt you for your OAuth2 client ID and secret.

    *   Copy the output from the last step of the example into the
        `google_ads_php.ini` file in your home directory. Don't forget to fill
        in your developer token too.

1.  Run the [GetCampaigns example](examples/BasicOperations/GetCampaigns.php) to
    test if your credentials are valid. You also need to pass your Google Ads
    account's customer ID without dashes as a command-line parameter:

        php examples/BasicOperations/GetCampaigns.php --customerId <YOUR_CUSTOMER_ID>

    **NOTE**: Code examples are meant to be run from command prompt, not via the
    web browsers.

1.  Explore other examples.

    The [examples](examples) directory contains several useful examples. Most of
    the examples require parameters. You can see what are required by running
    code examples with `--help` as a command-line parameter.

## Basic usage

To issue requests via the Google Ads API, you first need to create a
[GoogleAdsClient](https://github.com/googleads/google-ads-php/blob/master/src/Google/Ads/GoogleAds/Lib/GoogleAdsClient.php).
For convenience, you can store the required settings in a properties file
(`google_ads_php.ini`) with the following format:

    [GOOGLE_ADS]
    developerToken = "INSERT_DEVELOPER_TOKEN_HERE"

    [OAUTH2]
    clientId = "INSERT_OAUTH2_CLIENT_ID_HERE"
    clientSecret = "INSERT_OAUTH2_CLIENT_SECRET_HERE"
    refreshToken = "INSERT_OAUTH2_REFRESH_TOKEN_HERE"

If you're authenticating as a manager account, additionally you must specify the manager account ID
(with hyphens removed) as the login customer ID:

    [GOOGLE_ADS]
    loginCustomerId = "INSERT_LOGIN_CUSTOMER_ID_HERE"

This configuration file format is similar to the format used in the AdWords
API's [client library for PHP](https://github.com/googleads/googleads-php-lib).

If you have a `google_ads_php.ini` configuration file in the above format in
your home directory, you can use the no-arg version of `fromFile()` as follows:

```php
$googleAdsClient = (new GoogleAdsClientBuilder())
    ->fromFile()
    ->withOAuth2Credential($oAuth2Credential)
    ->build();
```

where `$oAuth2Credential` was created by:

```php
$oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();
```

If your configuration file is not in your home directory, you can pass the file
location to the `fromFile` methods as follows:

```php
$oAuth2Credential = (new OAuth2TokenBuilder())
    ->fromFile('/path/to/google_ads_php.ini')
    ->build();
$googleAdsClient = (new GoogleAdsClientBuilder())
    ->fromFile('/path/to/google_ads_php.ini')
    ->withOAuth2Credential($oAuth2Credential)
    ->build();
```

You can also construct an OAuth2 credential object by specifying the client ID,
client secret, and refresh token at runtime, then pass that to the
`GoogleAdsClientBuilder` as follows:

```php
$oAuth2Credential = (new OAuth2TokenBuilder())
    ->withClientId('INSERT_CLIENT_ID')
    ->withClientSecret('INSERT_CLIENT_SECRET')
    ->withRefreshToken('INSERT_REFRESH_TOKEN')
    ->build();
$googleAdsClient = (new GoogleAdsClientBuilder())
    ->withOAuth2Credential($oAuth2Credential)
    ->withDeveloperToken('INSERT_DEVELOPER_TOKEN_HERE')
    ->withLoginCustomerId('INSERT_LOGIN_CUSTOMER_ID_HERE')
    ->build();
```

### Get a service client

Once you have an instance of `GoogleAdsClient`, you can obtain a service client
for a particular service using one of the `get...ServiceClient()` methods.

## Logging

This library conforms to [PSR-3](http://www.php-fig.org/psr/psr-3) for logging
and provides a logger for gRPC calls.

The
[level](http://www.php-fig.org/psr/psr-3/#5-psr-log-loglevel) at which messages
are logged depends on whether the event succeeded.

Log message \ Event status         | Success | Failure
---------------------------------- | ------- | -------
One-line summary                   | INFO    | WARNING
Debug message (e.g., call queries) | DEBUG   | NOTICE

#### Configuring logging

By default, each of the library loggers logs to
[`STDERR`](http://php.net/manual/en/features.commandline.io-streams.php) on a channel with default name specified
[here](https://github.com/googleads/google-ads-php/blob/147bc76202cf5a0beb8fa2360fdb559e22a775dc/src/Google/Ads/GoogleAds/Lib/GoogleAdsClientBuilder.php#L31) using a [Monolog
StreamHandler](https://github.com/Seldaek/monolog/blob/master/src/Monolog/Handler/StreamHandler.php).

You can configure some options for the default logger in the `google_ads_php.ini`
file:

```ini
[LOGGING]
; Optional logging settings.
logFilePath = "path/to/your/file.log"
logLevel = "INFO"
```

If you need to further customize logging, you can specify your own logger
entirely by providing a logger that implements
[LoggerInterface](https://github.com/php-fig/log/blob/master/Psr/Log/LoggerInterface.php)
in [`GoogleAdsClientBuilder`](https://github.com/googleads/google-ads-php/blob/master/src/Google/Ads/GoogleAds/Lib/GoogleAdsClientBuilder.php):

```php
$googleAdsClient = (new GoogleAdsClientBuilder())
    ...
    ->withLogger(new MyCustomLogger())
    ->build();
```

## Miscellaneous

### Wiki

-   https://github.com/googleads/google-ads-php/wiki

### Issue tracker

-   https://github.com/googleads/google-ads-php/issues

### API Documentation:

-   https://developers.google.com/google-ads/api/docs

### Support forum

-   https://groups.google.com/forum/#!forum/adwords-api

### Authors

*   [Thanet Knack Praneenararat](https://github.com/fiboknacky)
