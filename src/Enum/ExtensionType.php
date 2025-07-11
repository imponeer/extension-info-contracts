<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

/**
 * Defines extension type enum
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 */
enum ExtensionType: int
{
    /**
     * This means that package type can't be determined
     */
    case UNKNOWN = 0;

    /**
     * This means package is module
     */
    case MODULE = 1;

    /**
     * This means package is a theme
     */
    case THEME = 2;

    /**
     * This means package is translation
     */
    case TRANSLATION = 3;

    /**
     * This means package is some library
     */
    case LIBRARY = 4;
}
