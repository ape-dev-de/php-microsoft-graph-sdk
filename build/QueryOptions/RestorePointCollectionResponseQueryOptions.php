<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestorePointCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RestorePointCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RestorePointCollectionResponse properties
     * 
     * @param array<string> $select Use RestorePointCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
