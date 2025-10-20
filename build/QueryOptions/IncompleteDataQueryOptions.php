<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IncompleteData resources
 *
 * Available select fields:
 * - missingDataBeforeDateTime
 * - wasThrottled
 */
class IncompleteDataQueryOptions extends QueryOptions
{
    public const FIELD_MISSING_DATA_BEFORE_DATE_TIME = 'missingDataBeforeDateTime';
    public const FIELD_WAS_THROTTLED = 'wasThrottled';

    /**
     * Select specific IncompleteData properties
     * 
     * @param array<string> $select Use IncompleteDataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
