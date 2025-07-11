<?php

namespace Imponeer\Contracts\ExtensionInfo;

use DateTime;
use Imponeer\Contracts\ExtensionInfo\Elements\LinkInterface;
use Imponeer\Contracts\ExtensionInfo\Elements\MemberInterface;
use Imponeer\Contracts\ExtensionInfo\Elements\RelatedPackageInterface;
use Imponeer\Contracts\ExtensionInfo\Enum\ExtensionState;
use Imponeer\Contracts\ExtensionInfo\Enum\ExtensionType;
use League\Flysystem\Filesystem;

/**
 * Provides information about extension
 *
 * @package Imponeer\Contracts\ExtensionInfo
 */
interface ExtensionInfoInterface
{
    /**
     * Gets extension type
     */
    public function getType(): ExtensionType;

    /**
     * Gets name of CMS or anything other that this extension is made for
     */
    public function getWhatFor(): string;

    /**
     * Gets extension name
     */
    public function getName(): string;

    /**
     * Gets path where this extension is located
     */
    public function getPath(): string;

    /**
     * Get SPDX license name or "proprietary" for commercial
     *
     * @return string[]
     */
    public function getLicense(): array;

    /**
     * Gets extension description
     */
    public function getDescription(): string;

    /**
     * Gets license version
     */
    public function getVersion(): string;

    /**
     * Gets release date
     */
    public function getReleaseDate(): ?DateTime;

    /**
     * Gets links to external resources
     *
     * @return LinkInterface[]
     */
    public function getLinks(): array;

    /**
     * State of the extension
     */
    public function getState(): ExtensionState;

    /**
     * Gets Filesystem to current instance of extension
     */
    public function getFiles(): ?Filesystem;

    /**
     * Gets team members of this extension
     *
     * @return MemberInterface[]
     */
    public function getTeamMembers(): array;

    /**
     * Gets required packages
     *
     * @return iterable<RelatedPackageInterface>
     */
    public function getRequiredPackages(): iterable;

    /**
     * Gets suggested packages
     *
     * @return iterable<RelatedPackageInterface>
     */
    public function getSuggestedPackages(): iterable;
}
