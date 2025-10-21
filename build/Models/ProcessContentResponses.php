<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentResponses
 */
class ProcessContentResponses
{
    public function __construct(
        /** The unique identifier that matches the requestId provided in the corresponding processContentBatchRequest. */
        public ?string $requestId = null,
        /**  */
        public ?ProcessContentResponse $results = null
    ) {}
}
