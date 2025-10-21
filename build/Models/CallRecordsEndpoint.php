<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsEndpoint
 */
class CallRecordsEndpoint
{
    public function __construct(
        /** User-agent reported by this endpoint. */
        public ?string $userAgent = null
    ) {}
}
