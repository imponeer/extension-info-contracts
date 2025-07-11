<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

/**
 * Defines a block
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface BlockInterface
{
    /**
     * Gets block name
     */
    public function getName(): string;

    /**
     * Gets block description
     */
    public function getDescription(): string;

    /**
     * Gets block template
     */
    public function getTemplate(): ?TemplateInterface;

    /**
     * Gets callback to show block
     */
    public function getShowCallback(): ?callable;

    /**
     * Gets callback to edit block
     */
    public function getEditCallback(): ?callable;

    /**
     * Gets block options
     */
    public function getOptions(): mixed;
}
