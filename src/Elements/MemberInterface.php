<?php

namespace Imponeer\Contracts\ExtensionInfo\Elements;

use Imponeer\Contracts\ExtensionInfo\Enum\MemberRole;

/**
 * Defines team member that was included in package development
 *
 * @package Imponeer\Contracts\ExtensionInfo\Elements
 */
interface MemberInterface
{
    /**
     * Gets member name
     */
    public function getName(): string;

    /**
     * Gets links to external resources
     */
    public function getLinks(): array;

    /**
     * Gets member roles
     */
    public function getRoles(): array;
}
