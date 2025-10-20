<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessScheduleInstance resources
 *
 * Available select fields:
 * - endDateTime
 * - startDateTime
 */
class PrivilegedAccessScheduleInstanceQueryOptions extends QueryOptions
{
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific PrivilegedAccessScheduleInstance properties
     * 
     * @param array<string> $select Use PrivilegedAccessScheduleInstanceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
