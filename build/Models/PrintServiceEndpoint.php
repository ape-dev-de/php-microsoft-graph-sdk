<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintServiceEndpoint
 */
class PrintServiceEndpoint
{
    public function __construct(
        /** A human-readable display name for the endpoint. */
        public ?string $displayName = null,
        /** The URI that can be used to access the service. */
        public ?string $uri = null
    ) {}
}
