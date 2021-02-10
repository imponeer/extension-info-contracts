<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

use Imponeer\Contracts\ExtensionInfo\Enum\LinkType;

/**
 * Describes link to related content
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface LinkInterface
{

    /**
     * Gets URL where link is pointing
     *
     * @return string
     */
    public function getUrl(): string;

    /**
     * Gets link type
     *
     * @return LinkType
     */
    public function getType(): LinkType;

}