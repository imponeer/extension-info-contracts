<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\HookInterface;

/**
 * If extension supports any hooks method this interface should be used for description
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsHooksInterface
{

    /**
     * Returns collection of supported hooks
     *
     * @return iterable|HookInterface[]
     */
    public function getHooks(): iterable;

}