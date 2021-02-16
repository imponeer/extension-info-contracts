<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\UserConfigItemInterface;

/**
 * If extension supports extensible configurations this interface can be used
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsUserConfigItemsInterface
{

    /**
     * Gets user config items
     *
     * @return iterable|UserConfigItemInterface[]
     */
    public function getUserConfigItems(): iterable;

}