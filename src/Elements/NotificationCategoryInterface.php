<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

/**
 * Defines notification category
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface NotificationCategoryInterface
{

    /**
     * Internal name for notification category
     */
    public function getName(): string;

    /**
     * Text displayed for user
     */
    public function getTitle(): string;

    /**
     * Gets description for category
     */
    public function getDescription(): ?string;

    /**
     * Gets paths from where this notification category subscription should be visible
     */
    public function getSubscriptionPaths(): iterable;

}