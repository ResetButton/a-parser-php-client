<?php

namespace ResetButton\AparserPhpClient\Exceptions;

class AparserApiInvalidArgumentException extends AparserApiException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 422);
    }
}
