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
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Returns menu classes for this item
     *
     * @return string[]
     */
    public function getClass(): array;

    /**
     * Gets link for menu item
     *
     * @return InlineLinkInterface
     */
    public function getLink(): InlineLinkInterface;

    /**
     * Gets area type
     *
     * @return AreaType
     */
    public function getAreaType(): AreaType;

    /**
     * If any, menu item will require user to have specific roles to be able to shown
     *
     * @return string[]
     */
    public function needsRoles(): array;
}