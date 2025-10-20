<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarSharingMessageActionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CalendarSharingMessageActionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CalendarSharingMessageActionCollectionResponse properties
     * 
     * @param array<string> $select Use CalendarSharingMessageActionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
