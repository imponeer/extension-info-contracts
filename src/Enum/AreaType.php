<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

/**
 * Defines area type
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 */
enum AreaType: int
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