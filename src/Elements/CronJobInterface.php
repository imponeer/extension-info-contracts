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
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Is this cron job by default enabled?
     *
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * Gets cron expression when it will need to run another time
     *
     * @return CronExpression
     */
    public function getExpression(): CronExpression;

    /**
     * Gets action to be executed for this cron
     *
     * @return callable
     */
    public function getAction(): callable;

}