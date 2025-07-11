<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\NotificationCategoryInterface;
use Imponeer\Contracts\ExtensionInfo\Elements\NotificationEventInterface;

/**
 * If extension supports/provides some notifications, this interface will help to describe such functionality
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsNotificationsInterface
{
    /**
     * Gets notifications categories
     */
    public function getNotificationsCategories(): iterable;

    /**
     * Gets info about events that triggers notifications
     */
    public function getNotificationsEvents(): iterable;
}
