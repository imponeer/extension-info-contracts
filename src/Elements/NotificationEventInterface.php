<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

/**
 * Describes event that triggers notification
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface NotificationEventInterface
{

    /**
     * Gets notifications event internal name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Gets notification category name for what this event only applies
     *
     * @return string
     */
    public function getCategory(): string;

    /**
     * Gets title to be shown for user notification selection
     *
     * @return string
     */
    public function getSelectionTitle(): string;

    /**
     * gets title when notification send
     *
     * @return string|callable
     */
    public function getSendTitle();

    /**
     * Gets description when notification is send
     *
     * @return string|callable
     */
    public function getSendDescription();

    /**
     * Gets extra data for this event
     *
     * @return array
     */
    public function getData(): array;

}