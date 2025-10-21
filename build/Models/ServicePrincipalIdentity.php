<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipalIdentity
 */
class ServicePrincipalIdentity
{
    public function __construct(
        /** The application identifier of the service principal. */
        public ?string $appId = null
    ) {}
}
