<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SingleServicePrincipal
 */
class SingleServicePrincipal
{
    public function __construct(
        /** Description of this service principal. */
        public ?string $description = null,
        /** ID of the servicePrincipal. */
        public ?string $servicePrincipalId = null
    ) {}
}
