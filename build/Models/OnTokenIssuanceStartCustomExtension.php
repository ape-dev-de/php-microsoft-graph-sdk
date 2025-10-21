<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartCustomExtension
 */
class OnTokenIssuanceStartCustomExtension
{
    public function __construct(
        /** @var string[] Collection of claims to be returned by the API called by this custom authentication extension. Used to populate claims mapping experience in Microsoft Entra admin center. Optional. */
        public array $claimsForTokenConfiguration = []
    ) {}
}
