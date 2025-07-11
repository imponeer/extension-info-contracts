<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\CronJobInterface;

/**
 * If extension can have cron jobs this interface must be implemented too
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsCronJobsInterface
{

    /**
     * Gets cron jobs list
     *
     * @return iterable<CronJobInterface>
     */
    public function getCronJobs(): iterable;

}