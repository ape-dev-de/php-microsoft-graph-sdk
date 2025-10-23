<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentResponses
 */
class ProcessContentResponses
{
    /** The unique identifier that matches the requestId provided in the corresponding processContentBatchRequest. */
    public ?string $requestId = null;

    /**  */
    public ?ProcessContentResponse $results = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['requestId'])) {
            $this->requestId = $data['requestId'];
        }
        if (isset($data['results'])) {
            $this->results = $data['results'];
        }
    }
}
