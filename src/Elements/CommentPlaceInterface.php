<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

use Imponeer\Contracts\ExtensionInfo\Features\SupportsHooksInterface;

/**
 * Defines a place for comment
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface CommentPlaceInterface extends SupportsHooksInterface
{

    /**
     * Get name of place
     */
    public function getName(): string;

    /**
     * Link info when detecting a place
     */
    public function getLink(): InlineLinkInterface;

}