<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use Imponeer\Contracts\ExtensionInfo\Elements\CommentPlaceInterface;

/**
 * If extension has some pages with comments this will describe such functionality
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsCommentsInterface
{
    /**
     * Gets places where comments can be
     *
     * @return iterable<CommentPlaceInterface>
     */
    public function getCommentsPlaces(): iterable;
}
