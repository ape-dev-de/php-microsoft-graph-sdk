<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectionInfo
 */
class ConnectionInfo
{
    public function __construct(
        /** The endpoint that is used by Entitlement Management to communicate with the access package resource. */
        public ?string $url = null
    ) {}
}
