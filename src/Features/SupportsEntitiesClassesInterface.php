<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use ReflectionClass;

/**
 * If tables are automatically created from entities classes or models, this method should return reference to such
 * classes descriptions
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsEntitiesClassesInterface
{
    /**
     * If tables are automatically created from entities classes or models, this method should return reference to such
     * classes descriptions
     *
     * @return iterable<string>
     */
    public function getEntitiesClasses(): iterable;
}
