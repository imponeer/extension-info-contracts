<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

/**
 * Use this interface when package can have screenshots
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsScreenshotsInterface
{

    public function getScreenshots(): array;
}