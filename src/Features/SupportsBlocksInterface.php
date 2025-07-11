<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\BlockInterface;

/**
 * If extension supports blocks must implement this interface
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsBlocksInterface
{
    /**
     * Gets blocks data
     *
     * @return iterable<BlockInterface>
     */
    public function getBlocks(): iterable;
}
