<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingAttendanceReportCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MeetingAttendanceReportCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MeetingAttendanceReportCollectionResponse properties
     * 
     * @param array<string> $select Use MeetingAttendanceReportCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
