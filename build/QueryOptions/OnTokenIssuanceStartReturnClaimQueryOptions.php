<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnTokenIssuanceStartReturnClaim resources
 *
 * Available select fields:
 * - claimIdInApiResponse
 */
class OnTokenIssuanceStartReturnClaimQueryOptions extends QueryOptions
{
    public const FIELD_CLAIM_ID_IN_API_RESPONSE = 'claimIdInApiResponse';

    /**
     * Select specific OnTokenIssuanceStartReturnClaim properties
     * 
     * @param array<string> $select Use OnTokenIssuanceStartReturnClaimQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
