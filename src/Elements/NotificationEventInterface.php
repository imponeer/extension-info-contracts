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
     */
    public function getName(): string;

    /**
     * Gets notification category name for what this event only applies
     */
    public function getCategory(): string;

    /**
     * Gets title to be shown for user notification selection
     */
    public function getSelectionTitle(): string;

    /**
     * gets title when notification send
     */
    public function getSendTitle(): string|callable;

    /**
     * Gets description when notification is send
     */
    public function getSendDescription(): string|callable;

    /**
     * Gets extra data for this event
     *
     * @return array<string, mixed>
     */
    public function getData(): array;

}