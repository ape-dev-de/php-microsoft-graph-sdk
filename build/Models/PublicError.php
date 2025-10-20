<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicError
 */
class PublicError
{
    /**
     * Represents the error code.
     */
    private ?string $code;

    /**
     * Details of the error.
     */
    private array $details = [];

    /**
     * Details of the inner error.
     */
    private ?string $innerError;

    /**
     * A non-localized message for the developer.
     */
    private ?string $message;

    /**
     * The target of the error.
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

    public function getDetails(): array
    {
        return $this->details;
    }

    public function setDetails(array $details): self
    {
        $this->details = $details;
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
