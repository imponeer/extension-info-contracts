<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

use MyCLabs\Enum\Enum;

/**
 * Defines screenshot type
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 *
 * @method static ScreenshotType USER_SIDE()
 * @method static ScreenshotType ADMIN_SIDE()
 */
class ScreenshotType extends Enum
{

    /**
     * Screenshot is for user side
     */
    private const USER_SIDE = 0;

    /**
     * Screenshot is for admin side
     */
    private const ADMIN_SIDE = 1;

}