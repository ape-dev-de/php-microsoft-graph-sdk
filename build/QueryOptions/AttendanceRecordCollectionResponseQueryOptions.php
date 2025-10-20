<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttendanceRecordCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AttendanceRecordCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AttendanceRecordCollectionResponse properties
     * 
     * @param array<string> $select Use AttendanceRecordCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
