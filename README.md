# Zerotoprod\SpapiLwaSdk

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/spapi-lwa-sdk)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/spapi-lwa-sdk/test.yml?label=test)](https://github.com/zero-to-prod/spapi-lwa-sdk/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/spapi-lwa-sdk/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/spapi-lwa-sdk/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/spapi-lwa-sdk?color=blue)](https://packagist.org/packages/zero-to-prod/spapi-lwa-sdk/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/spapi-lwa-sdk.svg?color=purple)](https://packagist.org/packages/zero-to-prod/spapi-lwa-sdk/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/spapi-lwa-sdk?color=f28d1a)](https://packagist.org/packages/zero-to-prod/spapi-lwa-sdk)
[![License](https://img.shields.io/packagist/l/zero-to-prod/spapi-lwa-sdk?color=pink)](https://github.com/zero-to-prod/spapi-lwa-sdk/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/spapi-lwa-sdk.svg)](https://wakatime.com/badge/github/zero-to-prod/spapi-lwa-sdk)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/spapi-lwa-sdk?branch=main)](https://hitsofcode.com/github/zero-to-prod/spapi-lwa-sdk/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Documentation Publishing](#documentation-publishing)
    - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [Usage](#usage)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

A Software Development Kit for connecting to Amazons Selling Partner API with Login With Amazon (LWA).

## Requirements

- PHP 7.1 or higher.

## Installation

Install `Zerotoprod\SpapiLwaSdk` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/spapi-lwa-sdk
```

This will add the package to your project's dependencies and create an autoloader entry for it.

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/spapi-lwa-sdk)
vendor/bin/zero-to-prod-spapi-lwa-sdk

# Publish to custom directory
vendor/bin/zero-to-prod-spapi-lwa-sdk /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-spapi-lwa-sdk"
        ],
        "post-update-cmd": [
            "zero-to-prod-spapi-lwa-sdk"
        ]
    }
}
```

## Usage



## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/spapi-lwa-sdk/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
