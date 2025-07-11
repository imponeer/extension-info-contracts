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
     */
    public function getFile(): FileAttributes;

    /**
     * Gets template description
     */
    public function getDescription(): string;
}