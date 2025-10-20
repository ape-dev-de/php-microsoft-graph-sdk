<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOffReasonCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TimeOffReasonCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TimeOffReasonCollectionResponse properties
     * 
     * @param array<string> $select Use TimeOffReasonCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
