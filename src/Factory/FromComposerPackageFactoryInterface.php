<?php


namespace Imponeer\Contracts\ExtensionInfo\Factory;

use Composer\Package\Package;
use Imponeer\Contracts\ExtensionInfo\Exceptions\UnsupportedExtensionException;
use Imponeer\Contracts\ExtensionInfo\ExtensionInfoInterface;

/**
 * Interface for factory that supports creating extension info from Composer package
 *
 * @package Imponeer\Contracts\ExtensionInfo\Factory
 */
interface FromComposerPackageFactoryInterface
{

    /**
     * Creates from composer package instance
     *
     * @param Package $package Composer package instance
     *
     * @return ExtensionInfoInterface
     *
     * @throws UnsupportedExtensionException
     */
    public function createFromComposerPackage(Package $package): ExtensionInfoInterface;

    /**
     * Checks if info factory supports such package
     *
     * @param Package $package Composer package to be checked if is supported
     *
     * @return bool
     */
    public function supportsPackage(Package $package): bool;
}