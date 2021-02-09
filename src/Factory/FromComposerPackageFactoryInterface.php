<?php


namespace Imponeer\Contracts\ExtensionInfo\Factory;

use Composer\Package\Package;
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
     */
    public function createFromComposerPackage(Package $package): ExtensionInfoInterface;

}