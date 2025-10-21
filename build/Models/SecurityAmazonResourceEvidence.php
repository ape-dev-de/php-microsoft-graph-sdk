<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAmazonResourceEvidence
 */
class SecurityAmazonResourceEvidence
{
    public function __construct(
        /** The unique identifier for the Amazon account. */
        public ?string $amazonAccountId = null,
        /** The Amazon resource identifier (ARN) for the cloud resource. */
        public ?string $amazonResourceId = null,
        /** The name of the resource. */
        public ?string $resourceName = null,
        /** The type of the resource. */
        public ?string $resourceType = null
    ) {}
}
