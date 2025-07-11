<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

/**
 * Describes hooks
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface HookInterface
{
    /**
     * Gets event name when hook should be executed
     */
    public function getEventName(): string;

    /**
     * Returns action that should be executed for this hook
     */
    public function getAction(): callable;
}
