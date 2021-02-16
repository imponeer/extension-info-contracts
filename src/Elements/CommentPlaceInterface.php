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
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Link info when detecting a place
     *
     * @return InlineLinkInterface
     */
    public function getLink(): InlineLinkInterface;

}