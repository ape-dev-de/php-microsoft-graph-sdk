<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookOperationError
 */
class WorkbookOperationError
{
    /**
     * The error code.
     */
    private ?string $code;

    /**
     */
    private ?string $innerError;

    /**
     * The error message.
     */
    private ?string $message;


    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getInnerError(): ?string
    {
        return $this->innerError;
    }

    public function setInnerError(?string $innerError): self
    {
        $this->innerError = $innerError;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

}
