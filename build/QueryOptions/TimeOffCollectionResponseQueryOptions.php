<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOffCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TimeOffCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TimeOffCollectionResponse properties
     * 
     * @param array<string> $select Use TimeOffCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
