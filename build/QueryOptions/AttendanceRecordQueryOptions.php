<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttendanceRecord resources
 *
 * Available select fields:
 */
class AttendanceRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttendanceRecord
     */

    /**
     * Select specific AttendanceRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
