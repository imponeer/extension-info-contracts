<?php

namespace Imponeer\Contracts\ExtensionInfo;

/**
 * Provides information about extension
 *
 * @package Imponeer\Contracts\ExtensionInfo
 */
interface ExtensionInfoInterface
{

    /**
     * Gets extension type
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Gets extension name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Gets path where this extension is located
     *
     * @return string
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
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Gets license version
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * Gets release date
     *
     * @return \DateTime|null
     */
    public function getReleaseDate(): ?\DateTime;

}