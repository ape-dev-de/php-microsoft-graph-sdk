<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarPermissionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CalendarPermissionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CalendarPermissionCollectionResponse properties
     * 
     * @param array<string> $select Use CalendarPermissionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
