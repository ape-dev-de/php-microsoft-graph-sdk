<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeCardBreakCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TimeCardBreakCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TimeCardBreakCollectionResponse properties
     * 
     * @param array<string> $select Use TimeCardBreakCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
