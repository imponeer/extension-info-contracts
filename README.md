[![License](https://img.shields.io/github/license/imponeer/extension-info-contracts.svg)](LICENSE) [![GitHub release](https://img.shields.io/github/release/imponeer/extension-info-contracts.svg)](https://github.com/imponeer/extension-info-contracts/releases) [![PHP](https://img.shields.io/packagist/php-v/imponeer/extension-info-contracts.svg)](http://php.net) [![Packagist](https://img.shields.io/packagist/dm/imponeer/extension-info-contracts.svg)](https://packagist.org/packages/imponeer/extension-info-contracts)

# Extensions Info Contracts

A contract library that standardizes how extension information is retrieved across different installation methods.

Many extensions (especially for CMS platforms) can be installed through multiple methods—via [Composer](https://getcomposer.org) or by manually copying files to specific directories. This diversity creates challenges when trying to gather consistent information about installed extensions. This library provides standardized contracts to solve that problem, making it easier to create unified extension information readers regardless of the installation method.

## Installation

We recommend installing this package via [Composer](https://getcomposer.org):

```bash
composer require imponeer/extension-info-contracts
```

Alternatively, you can manually include the files from the `src/` directory.

## Usage

The following libraries implement these contracts:

* [ImpressCMS/extensions-formats](https://github.com/ImpressCMS/extensions-formats) - Extension reader for [ImpressCMS](https://impresscms.org) themes and modules

## Development

The following Composer commands are available for development:

**Check code style:**
```bash
composer phpcs
```
Runs PHP_CodeSniffer to check code style according to defined standards.

**Fix code style issues:**
```bash
composer phpcbf
```
Automatically fixes code style issues using PHP_CodeSniffer.

**Static analysis:**
```bash
composer phpstan
```
Runs PHPStan for static code analysis using the configuration in `phpstan.neon`.

## API Documentation

Autogenerated API documentation is available in the [project wiki](https://github.com/imponeer/extension-info-contracts/wiki).

## Contributing

Contributions are welcome! To add functionality or fix bugs:

1. Fork the repository
2. Make your changes
3. Create a pull request

For bug reports or questions, please use the [issues tab](https://github.com/imponeer/extension-info-contracts/issues).
