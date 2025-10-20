<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostTrackerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityHostTrackerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityHostTrackerCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityHostTrackerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
