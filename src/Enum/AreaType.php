<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

use MyCLabs\Enum\Enum;

/**
 * Defines area type
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 *
 * @method static AreaType USER_SIDE()
 * @method static AreaType ADMIN_SIDE()
 */
class AreaType extends Enum
{

    /**
     * Screenshot is for user side
     */
    protected const USER_SIDE = 0;

    /**
     * Screenshot is for admin side
     */
    protected const ADMIN_SIDE = 1;

}