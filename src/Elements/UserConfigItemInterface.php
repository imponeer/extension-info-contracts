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
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * Gets default value
     *
     * @return mixed
     */
    public function getDefaultValue();

    /**
     * Gets short description how to display on form
     *
     * @return string|null
     */
    public function getFormType(): ?string;

    /**
     * Gets value type of this config item (how it should be processed?)
     *
     * @return string
     */
    public function getValueType(): ?string;
}