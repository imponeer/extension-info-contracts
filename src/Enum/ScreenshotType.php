<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

/**
 * Defines screenshot type
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 *
 * @method static ScreenshotType USER_SIDE()
 * @method static ScreenshotType ADMIN_SIDE()
 */
class ScreenshotType extends \MyCLabs\Enum\Enum
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