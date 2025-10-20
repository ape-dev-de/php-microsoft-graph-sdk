<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnTokenIssuanceStartReturnClaimCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnTokenIssuanceStartReturnClaimCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnTokenIssuanceStartReturnClaimCollectionResponse properties
     * 
     * @param array<string> $select Use OnTokenIssuanceStartReturnClaimCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
