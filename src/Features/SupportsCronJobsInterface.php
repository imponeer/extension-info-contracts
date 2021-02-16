<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

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
     * @return iterable
     */
    public function getCronJobs(): iterable;

}