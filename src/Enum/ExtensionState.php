<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

/**
 * Defines package State enum
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 */
enum ExtensionState: int
{

    /**
     * This mean package is abandoned
     */
    case ABANDONED = 2;

    /**
     * This mean package still receives updated
     */
    case ACTIVE = 1;

    /**
     * This means that package has unknown state (missing some information)
     */
    case UNKNOWN = 0;
}