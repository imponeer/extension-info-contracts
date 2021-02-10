<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

use Imponeer\Contracts\ExtensionInfo\Enum\PackageRelationType;

/**
 * Defines related package
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface RelatedPackageInterface
{

    /**
     * Gets related package name
     *
     * @return string
     */
    public function getPackageName(): string;

    /**
     * Gets version constraint in composer style
     *
     * @return string
     */
    public function getVersionConstraint(): string;

    /**
     * If there is reason for it, get's it
     *
     * @return string
     */
    public function getReason(): string;

}