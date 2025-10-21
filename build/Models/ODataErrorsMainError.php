<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ODataErrorsMainError
 */
class ODataErrorsMainError
{
    /**
     */
    private ?string $code;

    /**
     */
    private ?string $message;

    /**
     */
    private ?string $target;

    /**
     */
    private array $details = [];

    /**
     */
    private ?string $innerError;


    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
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

}
