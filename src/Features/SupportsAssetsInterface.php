<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use League\Flysystem\FileAttributes;

/**
 * Add this interface when extension can have assets
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsAssetsInterface
{

    /**
     * Get files attributes collection for assets from package
     *
     * @return iterable|FileAttributes[]
     */
    public function getAssets(): iterable;

}