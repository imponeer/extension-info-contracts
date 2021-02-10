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
     *
     * @return FileAttributes
     */
    public function getFile(): FileAttributes;

    /**
     * Gets icon category
     *
     * @return string
     */
    public function getCategory(): string;
}