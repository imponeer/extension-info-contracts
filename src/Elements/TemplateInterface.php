<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

use League\Flysystem\FileAttributes;

/**
 * Describes template
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface TemplateInterface
{

    /**
     * Get reference to template file
     *
     * @return FileAttributes
     */
    public function getFile(): FileAttributes;

    /**
     * Gets template description
     *
     * @return string
     */
    public function getDescription(): string;
}