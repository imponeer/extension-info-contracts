<?php


namespace Imponeer\Contracts\ExtensionInfo\Factory;

use Imponeer\Contracts\ExtensionInfo\ExtensionInfoInterface;

/**
 * Interface for factory that supports creating extension info from array data
 *
 * @package Imponeer\Contracts\ExtensionInfo\Factory
 */
interface FromArrayInterface
{

    /**
     * Creates Extension info element from array data
     *
     * @param array $data Data from where to create extension info
     *
     * @return ExtensionInfoInterface
     */
    public function createFromArray(array $data): ExtensionInfoInterface;

}