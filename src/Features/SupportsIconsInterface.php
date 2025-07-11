<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\IconInterface;

/**
 * Identifies that extension can have icons
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsIconsInterface
{
    /**
     * Gets icons
     *
     * @return iterable<IconInterface>
     */
    public function getIcons(): iterable;
}
