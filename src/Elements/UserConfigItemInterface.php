<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

/**
 * Defines config item that can be configurable by user from admin
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface UserConfigItemInterface
{

    /**
     * Configuration item name
     */
    public function getName(): string;

    /**
     * Gets title
     */
    public function getTitle(): string;

    /**
     * Gets description
     */
    public function getDescription(): ?string;

    /**
     * Gets default value
     */
    public function getDefaultValue(): mixed;

    /**
     * Gets short description how to display on form
     */
    public function getFormType(): ?string;

    /**
     * Gets value type of this config item (how it should be processed?)
     */
    public function getValueType(): ?string;
}