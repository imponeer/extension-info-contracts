<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\TableInterface;

/**
 * Define this if has extension can have tables
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsTablesInterface
{
    /**
     * Gets tables names that are managed by this extension
     *
     * @return iterable<TableInterface>
     */
    public function getTables(): iterable;
}
