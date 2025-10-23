<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Exceptions;

use Exception;

class GraphException extends Exception
{
    private ?object $error = null;

    public function __construct(string $message, int $code = 0, ?object $error = null)
    {
        parent::__construct($message, $code);
        $this->error = $error;
    }

    public function getError(): ?object
    {
        return $this->error;
    }
}
