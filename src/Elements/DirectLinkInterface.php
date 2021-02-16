<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

/**
 * Defines link that has url as param
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface DirectLinkInterface extends InlineLinkInterface
{

    /**
     * Gets URL
     *
     * @return string
     */
    public function getUrl(): string;

}