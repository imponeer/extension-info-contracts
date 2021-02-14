<?php

namespace Imponeer\Contracts\ExtensionInfo\Exceptions;

use Exception;
use Throwable;

/**
 * Exception that is thrown when factory doesn't supports such exception but asked to create one
 *
 * @package Imponeer\Contracts\ExtensionInfo\Exceptions
 */
class UnsupportedExtensionException extends Exception
{

    /**
     * UnsupportedExtensionException constructor.
     *
     * @param string $name Extension name
     * @param int $code Error code
     * @param Throwable|null $previous Previous exception
     */
    public function __construct($name, $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($name . ' extension for this factory is not supported', $code, $previous);
    }

}