<?php

namespace Imponeer\Contracts\ExtensionInfo\Features;

use League\Flysystem\FileAttributes;

/**
 * If extension uses SQL files, this interface will define them
 *
 * @package Imponeer\Contracts\ExtensionInfo\Features
 */
interface SupportsSQLFilesInterface
{
    /**
     * If there is installation SQL file returns reference
     *
     * @return FileAttributes|null
     */
    public function getInstallSQLFile(): ?FileAttributes;

    /**
     * If there is for uninstall SQL file returns reference
     *
     * @return FileAttributes|null
     */
    public function getUninstallSQLFile(): ?FileAttributes;

    /**
     * If there is for updating SQL file returns reference
     *
     * @return FileAttributes|null
     */
    public function getUpdateSQLFile(): ?FileAttributes;
}
