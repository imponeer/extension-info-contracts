<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

/**
 * LinkType enum
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 *
 * @method static LinkType EMAIL()
 * @method static LinkType ISSUES_TRACKER()
 * @method static LinkType FORUM()
 * @method static LinkType HOMEPAGE()
 * @method static LinkType WIKI()
 * @method static LinkType IRC()
 * @method static LinkType SOURCE_CODE_PAGE()
 * @method static LinkType VERSION_CONTROL()
 * @method static LinkType DOCUMENTATION()
 * @method static LinkType RSS()
 * @method static LinkType WEB_CHAT()
 * @method static LinkType FUNDING_PAGE()
 */
class LinkType extends \MyCLabs\Enum\Enum
{

    /**
     * Link is email
     */
    private const EMAIL = 1;

    /**
     * Link points to issues tracker
     */
    private const ISSUES_TRACKER = 2;

    /**
     * Link points to forum
     */
    private const FORUM = 3;

    /**
     * Link points to homepage
     */
    private const HOMEPAGE = 4;

    /**
     * Link points to wiki site
     */
    private const WIKI = 5;

    /**
     * Link points to IRC chat
     */
    private const IRC = 6;

    /**
     * Link points to source code page
     */
    private const SOURCE_CODE_PAGE = 7;

    /**
     * Link points to version control data
     */
    private const VERSION_CONTROL = 8;

    /**
     * Links points to documentation
     */
    private const DOCUMENTATION = 9;

    /**
     * Link points to RSS
     */
    private const RSS = 10;

    /**
     * Link points to web chat
     */
    private const WEB_CHAT = 11;

    /**
     * Link points to funding page
     */
    private const FUNDING_PAGE = 12;

}