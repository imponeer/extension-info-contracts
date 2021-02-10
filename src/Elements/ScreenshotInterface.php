<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

use Imponeer\Contracts\ExtensionInfo\Enum\ScreenshotType;

/**
 * Defines screenshot item
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface ScreenshotInterface
{

    /**
     * Get screenshot URL
     *
     * @return string
     */
    public function getUrl(): string;

    /**
     * Gets screenshot type
     *
     * @return ScreenshotType
     */
    public function getType(): ScreenshotType;
}