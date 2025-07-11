<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

use Imponeer\Contracts\ExtensionInfo\Enum\AreaType;

/**
 * Defines menu item
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface MenuItemInterface
{
    /**
     * Gets menu item title
     */
    public function getTitle(): string;

    /**
     * Returns menu classes for this item
     */
    public function getClass(): array;

    /**
     * Gets link for menu item
     */
    public function getLink(): InlineLinkInterface;

    /**
     * Gets area type
     */
    public function getAreaType(): AreaType;

    /**
     * If any, menu item will require user to have specific roles to be able to shown
     */
    public function needsRoles(): array;
}
