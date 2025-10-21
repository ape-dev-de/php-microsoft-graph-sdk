<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeviceAzureADAccount
 */
class WindowsDeviceAzureADAccount
{
    public function __construct(
        /** Not yet documented */
        public ?string $password = null,
        /** Not yet documented */
        public ?string $userPrincipalName = null
    ) {}
}
