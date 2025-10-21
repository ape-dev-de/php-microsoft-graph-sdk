<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentBatchRequest
 */
class ProcessContentBatchRequest
{
    public function __construct(
        /**  */
        public ?string $contentToProcess = null,
        /** A unique identifier provided by the client to correlate this specific request item within the batch. */
        public ?string $requestId = null,
        /** The unique identifier (Object ID or UPN) of the user in whose context the content should be processed. */
        public ?string $userId = null
    ) {}
}
