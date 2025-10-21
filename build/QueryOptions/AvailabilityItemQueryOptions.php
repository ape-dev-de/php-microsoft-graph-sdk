<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AvailabilityItem resources
 *
 * Available select fields:
 * - endDateTime
 * - serviceId
 * - startDateTime
 * - status
 */
class AvailabilityItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AvailabilityItem
     */
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_SERVICE_ID = 'serviceId';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific AvailabilityItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
