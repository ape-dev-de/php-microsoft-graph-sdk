<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentBatchRequest
 */
class ProcessContentBatchRequest
{
    /**  */
    public ?ProcessContentRequest $contentToProcess = null;

    /** A unique identifier provided by the client to correlate this specific request item within the batch. */
    public ?string $requestId = null;

    /** The unique identifier (Object ID or UPN) of the user in whose context the content should be processed. */
    public ?string $userId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['contentToProcess'])) {
            $this->contentToProcess = is_array($data['contentToProcess']) ? new ProcessContentRequest($data['contentToProcess']) : $data['contentToProcess'];
        }
        if (isset($data['requestId'])) {
            $this->requestId = $data['requestId'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
    }
}
