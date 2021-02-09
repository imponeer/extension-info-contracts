<?php

namespace Imponeer\Contracts\ExtensionInfo\Factory;

use Imponeer\Contracts\ExtensionInfo\ExtensionInfoInterface;

/**
 * Interface for factory that supports creating extension info from path data
 *
 * @package Imponeer\Contracts\ExtensionInfo\Factory
 */
interface FromPathFactoryInterface
{

    /**
     * Creates from path
     *
     * @param string $path
     *
     * @return ExtensionInfoInterface
     */
    public function createFromPath(string $path): ExtensionInfoInterface;

}