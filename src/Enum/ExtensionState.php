<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

use MyCLabs\Enum\Enum;

/**
 * Defines package State enum
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 *
 * @method static ExtensionState ABANDONED()
 * @method static ExtensionState ACTIVE()
 * @method static ExtensionState UNKNOWN()
 */
class ExtensionState extends Enum
{

    /**
     * This mean package is abandoned
     */
    private const ABANDONED = 2;

    /**
     * This mean package still receives updated
     */
    private const ACTIVE = 1;

    /**
     * This means that package has unknown state (missing some information)
     */
    private const UNKNOWN = 0;
}