<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentResponses
 */
class ProcessContentResponses
{
    /**
     * The unique identifier that matches the requestId provided in the corresponding processContentBatchRequest.
     */
    private ?string $requestId;

    /**
     */
    private ?string $results;


    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function setRequestId(?string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    public function getResults(): ?string
    {
        return $this->results;
    }

    public function setResults(?string $results): self
    {
        $this->results = $results;
        return $this;
    }

}
