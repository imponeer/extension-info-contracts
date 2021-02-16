<?php


namespace Imponeer\Contracts\ExtensionInfo\Elements;

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
}