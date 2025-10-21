<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartReturnClaim
 */
class OnTokenIssuanceStartReturnClaim
{
    public function __construct(
        /** The identifier of the claim returned by an API that is to be add to a token being issued. */
        public ?string $claimIdInApiResponse = null
    ) {}
}
