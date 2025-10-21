<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureAdTokenAuthentication
 */
class AzureAdTokenAuthentication
{
    public function __construct(
        /** The appID of the Microsoft Entra application to use to authenticate an app with a custom extension. */
        public ?string $resourceId = null
    ) {}
}
