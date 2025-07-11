<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

/**
 * Defines screenshot type
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 */
enum ScreenshotType: int
{

    /**
     * Screenshot is for user side
     */
    case USER_SIDE = 0;

    /**
     * Screenshot is for admin side
     */
    case ADMIN_SIDE = 1;

}