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
     * GEts event name when hook should be executed
     *
     * @return string
     */
    public function getEventName(): string;

    /**
     * Returns action that should be executed for this hook
     *
     * @return callable
     */
    public function getAction(): callable;
}