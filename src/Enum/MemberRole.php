<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

use MyCLabs\Enum\Enum;

/**
 * Member role enum
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 *
 * @method static MemberRole UNKNOWN()
 * @method static MemberRole DEVELOPER()
 * @method static MemberRole DESIGNER()
 * @method static MemberRole MANAGER()
 * @method static MemberRole TESTER()
 * @method static MemberRole DOCUMENTATION_WRITER()
 * @method static MemberRole TRANSLATOR()
 */
class MemberRole extends Enum
{

    /**
     * Team member has unknown role
     */
    private const UNKNOWN = 0;

    /**
     * Team member has developer role
     */
    private const DEVELOPER = 1;

    /**
     * Team member is designer
     */
    private const DESIGNER = 2;

    /**
     * Team member is manager
     */
    private const MANAGER = 3;

    /**
     * Team member is tester
     */
    private const TESTER = 4;

    /**
     * Team member is documentation writer
     */
    private const DOCUMENTATION_WRITER = 5;

    /**
     * Team member is translator
     */
    private const TRANSLATOR = 6;
}