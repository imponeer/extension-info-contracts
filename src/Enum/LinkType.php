<?php

namespace Imponeer\Contracts\ExtensionInfo\Enum;

/**
 * LinkType enum
 *
 * @package Imponeer\Contracts\ExtensionInfo\Enum
 */
enum LinkType: int
{
    /**
     * Link is email
     */
    case EMAIL = 1;

    /**
     * Link points to issues tracker
     */
    case ISSUES_TRACKER = 2;

    /**
     * Link points to forum
     */
    case FORUM = 3;

    /**
     * Link points to homepage
     */
    case HOMEPAGE = 4;

    /**
     * Link points to wiki site
     */
    case WIKI = 5;

    /**
     * Link points to IRC chat
     */
    case IRC = 6;

    /**
     * Link points to source code page
     */
    case SOURCE_CODE_PAGE = 7;

    /**
     * Link points to version control data
     */
    case VERSION_CONTROL = 8;

    /**
     * Links points to documentation
     */
    case DOCUMENTATION = 9;

    /**
     * Link points to RSS
     */
    case RSS = 10;

    /**
     * Link points to web chat
     */
    case WEB_CHAT = 11;

    /**
     * Link points to funding page
     */
    case FUNDING_PAGE = 12;
}
