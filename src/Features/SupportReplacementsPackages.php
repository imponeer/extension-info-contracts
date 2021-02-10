<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\RelatedPackageInterface;

/**
 * If extension can replace other package
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportReplacementsPackages
{

    /**
     * Gets packages list that this extension replaces
     *
     * @return iterable|RelatedPackageInterface[]
     */
    public function getReplaces(): iterable;

}