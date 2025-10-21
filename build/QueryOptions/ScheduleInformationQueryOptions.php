<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScheduleInformation resources
 *
 * Available select fields:
 * - availabilityView
 * - error
 * - scheduleId
 * - scheduleItems
 * - workingHours
 */
class ScheduleInformationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScheduleInformation
     */
    public const FIELD_AVAILABILITY_VIEW = 'availabilityView';
    public const FIELD_ERROR = 'error';
    public const FIELD_SCHEDULE_ID = 'scheduleId';
    public const FIELD_SCHEDULE_ITEMS = 'scheduleItems';
    public const FIELD_WORKING_HOURS = 'workingHours';

    /**
     * Select specific ScheduleInformation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
