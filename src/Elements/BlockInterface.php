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
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Gets block description
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Gets block template
     *
     * @return TemplateInterface|null
     */
    public function getTemplate(): ?TemplateInterface;

    /**
     * Gets callback to show block
     *
     * @return callable|null
     */
    public function getShowCallback(): ?callable;

    /**
     * Gets callback to edit block
     *
     * @return callable|null
     */
    public function getEditCallback(): ?callable;

    /**
     * Gets block options
     *
     * @return mixed
     */
    public function getOptions();
}