<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OptionalClaimCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OptionalClaimCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OptionalClaimCollectionResponse properties
     * 
     * @param array<string> $select Use OptionalClaimCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
