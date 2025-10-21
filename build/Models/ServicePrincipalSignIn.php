<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipalSignIn
 */
class ServicePrincipalSignIn
{
    public function __construct(
        /** appId of the service principal that is signing in. */
        public ?string $servicePrincipalId = null
    ) {}
}
