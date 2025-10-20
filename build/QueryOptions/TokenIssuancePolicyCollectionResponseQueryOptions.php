<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TokenIssuancePolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TokenIssuancePolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TokenIssuancePolicyCollectionResponse properties
     * 
     * @param array<string> $select Use TokenIssuancePolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
