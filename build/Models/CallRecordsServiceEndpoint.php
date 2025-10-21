<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsServiceEndpoint
 */
class CallRecordsServiceEndpoint
{
    public function __construct(
        /** User-agent reported by this endpoint. */
        public ?string $userAgent = null
    ) {}
}
