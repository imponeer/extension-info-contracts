<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\TemplateInterface;

/**
 * If extension supports templates this should return list of them
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsTemplatesInterface
{
    /**
     * Returns templates info
     *
     * @return iterable<TemplateInterface>
     */
    public function getTemplates(): iterable;
}
