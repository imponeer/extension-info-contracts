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
     */
    public function getUrl(): string;

    /**
     * Gets link type
     */
    public function getType(): LinkType;

}