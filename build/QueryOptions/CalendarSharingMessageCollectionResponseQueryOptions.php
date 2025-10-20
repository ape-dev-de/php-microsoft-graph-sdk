<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarSharingMessageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CalendarSharingMessageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CalendarSharingMessageCollectionResponse properties
     * 
     * @param array<string> $select Use CalendarSharingMessageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
