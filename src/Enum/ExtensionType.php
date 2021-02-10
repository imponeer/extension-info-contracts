<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

/**
 * Defines extension type enum
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 *
 * @method static ExtensionType UNKNOWN()
 * @method static ExtensionType MODULE()
 * @method static ExtensionType THEME()
 * @method static ExtensionType TRANSLATION()
 * @method static ExtensionType LIBRARY()
 */
class ExtensionType extends \MyCLabs\Enum\Enum
{

    /**
     * This means that package type can't be determined
     */
    private const UNKNOWN = 0;

    /**
     * This means package is module
     */
    private const MODULE = 1;

    /**
     * This means package is a theme
     */
    private const THEME = 2;

    /**
     * This means package is translation
     */
    private const TRANSLATION = 3;

    /**
     * This means package is some library
     */
    private const LIBRARY = 4;
}