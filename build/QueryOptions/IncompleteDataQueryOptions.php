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
    /**
     * Available select fields for IncompleteData
     */
    public const FIELD_MISSING_DATA_BEFORE_DATE_TIME = 'missingDataBeforeDateTime';
    public const FIELD_WAS_THROTTLED = 'wasThrottled';

    /**
     * Select specific IncompleteData properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
