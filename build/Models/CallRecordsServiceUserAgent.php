<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsServiceUserAgent
 */
class CallRecordsServiceUserAgent
{
    public function __construct(
        /** Identifies the version of application software used by this endpoint. */
        public ?string $applicationVersion = null,
        /** User-agent header value reported by this endpoint. */
        public ?string $headerValue = null,
        /**  */
        public ?CallRecordsServiceRole $role = null
    ) {}
}
