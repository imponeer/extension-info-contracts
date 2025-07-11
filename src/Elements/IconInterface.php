<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

use League\Flysystem\FileAttributes;

/**
 * Describes icon item
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface IconInterface
{

    /**
     * Gets path to icon
     */
    public function getFile(): FileAttributes;

    /**
     * Gets icon category
     */
    public function getCategory(): string;
}