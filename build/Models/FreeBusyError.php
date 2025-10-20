<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FreeBusyError
 */
class FreeBusyError
{
    /**
     * Describes the error.
     */
    private ?string $message;

    /**
     * The response code from querying for the availability of the user, distribution list, or resource.
     */
    private ?string $responseCode;

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    public function setResponseCode(?string $responseCode): self
    {
        $this->responseCode = $responseCode;
        return $this;
    }

}
