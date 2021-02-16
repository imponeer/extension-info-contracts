<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

/**
 * Defines if extension supports searching data
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsSearch
{
    /**
     * Gets callable for building search query
     *
     * @return callable|null
     */
    public function getSearchBuild(): ?callable;

    /**
     * Gets callable for search data
     *
     * @return callable|null
     */
    public function getSearchExecute(): ?callable;

}