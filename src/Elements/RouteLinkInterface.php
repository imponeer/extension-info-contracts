<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

/**
 * Defines link to route
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface RouteLinkInterface extends InlineLinkInterface
{
    /**
     * Route name
     */
    public function getName(): string;

    /**
     * Gets params for route link
     */
    public function getParams(): array;
}
