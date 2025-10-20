<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClassifcationErrorBase
 */
class ClassifcationErrorBase
{
    /**
     * A service-defined error code string.
     */
    private ?string $code;

    /**
     * Contains more specific, potentially internal error details.
     */
    private ?string $innerError;

    /**
     * A human-readable representation of the error.
     */
    private ?string $message;

    /**
     * The target of the error (for example, the specific property or item causing the issue).
     */
    private ?string $target;

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

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;
        return $this;
    }

}
