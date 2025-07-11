<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

/**
 * Defines related package
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface RelatedPackageInterface
{

    /**
     * Gets related package name
     */
    public function getPackageName(): string;

    /**
     * Gets version constraint in composer style
     */
    public function getVersionConstraint(): string;

    /**
     * If there is reason for it, get's it
     */
    public function getReason(): string;

}