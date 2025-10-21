<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCloudLogonRequestEvidence
 */
class SecurityCloudLogonRequestEvidence
{
    public function __construct(
        /** The unique identifier for the sign-in request. */
        public ?string $requestId = null
    ) {}
}
