<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScoredEmailAddressCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ScoredEmailAddressCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ScoredEmailAddressCollectionResponse properties
     * 
     * @param array<string> $select Use ScoredEmailAddressCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
