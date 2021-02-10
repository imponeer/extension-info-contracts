<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\RelatedPackageInterface;

/**
 * If extension supports conflicts with packages
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsConflictedPackages
{

    /**
     * Gets packages with whom extension conflicts
     *
     * @return iterable|RelatedPackageInterface[]
     */
    public function getConflictedPackages(): iterable;

}