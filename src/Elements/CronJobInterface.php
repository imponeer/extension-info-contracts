<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

use Cron\CronExpression;

/**
 * Defines a cron job
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface CronJobInterface
{

    /**
     * Gets name
     */
    public function getName(): string;

    /**
     * Is this cron job by default enabled?
     */
    public function isEnabled(): bool;

    /**
     * Gets cron expression when it will need to run another time
     */
    public function getExpression(): CronExpression;

    /**
     * Gets action to be executed for this cron
     */
    public function getAction(): callable;

}