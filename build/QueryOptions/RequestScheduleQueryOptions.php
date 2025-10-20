<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RequestSchedule resources
 *
 * Available select fields:
 * - expiration
 * - recurrence
 * - startDateTime
 */
class RequestScheduleQueryOptions extends QueryOptions
{
    public const FIELD_EXPIRATION = 'expiration';
    public const FIELD_RECURRENCE = 'recurrence';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific RequestSchedule properties
     * 
     * @param array<string> $select Use RequestScheduleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
