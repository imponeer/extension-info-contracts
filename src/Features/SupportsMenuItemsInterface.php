<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\InlineLinkInterface;

/**
 * If extension provides menu items, use this interface
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsMenuItemsInterface
{

    /**
     * Gets menu items
     *
     * @return iterable|InlineLinkInterface[]
     */
    public function getMenuItems(): iterable;

}