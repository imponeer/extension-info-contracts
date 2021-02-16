<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

/**
 * Does extension supports migrations? Then this will describe such functionality!
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsMigrationsInterface
{

    /**
     * Gets paths where migration paths are available
     *
     * @return iterable|string[]
     */
    public function getMigrationsPaths(): iterable;

    /**
     * Gets name of provider who deals with extensions migrations (f.e. phinx, phoenix, yii-migrations...)
     *
     * @return string
     */
    public function getMigrationsProvider(): string;

}