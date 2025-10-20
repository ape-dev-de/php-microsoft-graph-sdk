<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TokenLifetimePolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TokenLifetimePolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TokenLifetimePolicyCollectionResponse properties
     * 
     * @param array<string> $select Use TokenLifetimePolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
