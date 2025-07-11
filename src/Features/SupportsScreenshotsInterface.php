<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\ScreenshotInterface;

/**
 * Use this interface when package can have screenshots
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsScreenshotsInterface
{
    /**
     * Gets screenshots
     *
     * @return ScreenshotInterface[]
     */
    public function getScreenshots(): array;
}
