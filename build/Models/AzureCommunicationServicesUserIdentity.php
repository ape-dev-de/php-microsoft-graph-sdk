<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureCommunicationServicesUserIdentity
 */
class AzureCommunicationServicesUserIdentity
{
    public function __construct(
        /** The Azure Communication Services resource ID associated with the user. */
        public ?string $azureCommunicationServicesResourceId = null
    ) {}
}
