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
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Gets params for route link
     *
     * @return array
     */
    public function getParams(): array;
}