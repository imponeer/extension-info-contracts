<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

/**
 * Member role enum
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 */
enum MemberRole: int
{
    /**
     * Team member has unknown role
     */
    case UNKNOWN = 0;

    /**
     * Team member has developer role
     */
    case DEVELOPER = 1;

    /**
     * Team member is designer
     */
    case DESIGNER = 2;

    /**
     * Team member is manager
     */
    case MANAGER = 3;

    /**
     * Team member is tester
     */
    case TESTER = 4;

    /**
     * Team member is documentation writer
     */
    case DOCUMENTATION_WRITER = 5;

    /**
     * Team member is translator
     */
    case TRANSLATOR = 6;
}
