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
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Text displayed for user
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Gets description for category
     *
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * Gets paths from where this notification category subscription should be visible
     *
     * @return iterable|InlineLinkInterface[]
     */
    public function getSubscriptionPaths(): iterable;

}