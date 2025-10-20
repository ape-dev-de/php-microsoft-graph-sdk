<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EntitlementManagementSchedule resources
 *
 * Available select fields:
 * - expiration
 * - recurrence
 * - startDateTime
 */
class EntitlementManagementScheduleQueryOptions extends QueryOptions
{
    public const FIELD_EXPIRATION = 'expiration';
    public const FIELD_RECURRENCE = 'recurrence';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific EntitlementManagementSchedule properties
     * 
     * @param array<string> $select Use EntitlementManagementScheduleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
