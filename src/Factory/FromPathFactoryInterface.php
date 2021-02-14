<?php

namespace Imponeer\Contracts\ExtensionInfo\Factory;

use Imponeer\Contracts\ExtensionInfo\Exceptions\UnsupportedExtensionException;
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
     *
     * @throws UnsupportedExtensionException
     */
    public function createFromPath(string $path): ExtensionInfoInterface;

    /**
     * Checks if info factory supports such path
     *
     * @param string $path Path to check if this info reader supports such path
     *
     * @return bool
     */
    public function supportsPath(string $path): bool;
}