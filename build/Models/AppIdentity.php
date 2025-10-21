<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppIdentity
 */
class AppIdentity
{
    public function __construct(
        /** Refers to the unique ID representing application in Microsoft Entra ID. */
        public ?string $appId = null,
        /** Refers to the application name displayed in the Microsoft Entra admin center. */
        public ?string $displayName = null,
        /** Refers to the unique ID for the service principal in Microsoft Entra ID. */
        public ?string $servicePrincipalId = null,
        /** Refers to the Service Principal Name is the Application name in the tenant. */
        public ?string $servicePrincipalName = null
    ) {}
}
