<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityResource
 */
class SecurityResource
{
    public function __construct(
        /** Name of the resource that is related to current alert. Required. */
        public ?string $resource = null,
        /** Represents type of security resources related to an alert. Possible values are: attacked, related. */
        public ?string $resourceType = null
    ) {}
}
