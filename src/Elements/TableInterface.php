<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

/**
 * Describes database table
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface TableInterface
{

    /**
     * Gets name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * If false, for each site instance another table should be created, otherwise - single table between sites
     *
     * @return bool
     */
    public function isShared(): bool;
}