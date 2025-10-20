<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResultInfo
 */
class ResultInfo
{
    /**
     * The result code.
     */
    private ?float $code;

    /**
     * The message.
     */
    private ?string $message;

    /**
     * The result subcode.
     */
    private ?string $subcode;

    public function getCode(): ?float
    {
        return $this->code;
    }

    public function setCode(?float $code): self
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

    public function getSubcode(): ?string
    {
        return $this->subcode;
    }

    public function setSubcode(?string $subcode): self
    {
        $this->subcode = $subcode;
        return $this;
    }

}
