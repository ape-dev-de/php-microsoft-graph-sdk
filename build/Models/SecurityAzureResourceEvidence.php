<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAzureResourceEvidence
 */
class SecurityAzureResourceEvidence
{
    public function __construct(
        /** The unique identifier for the Azure resource. */
        public ?string $resourceId = null,
        /** The name of the resource. */
        public ?string $resourceName = null,
        /** The type of the resource. */
        public ?string $resourceType = null
    ) {}
}
