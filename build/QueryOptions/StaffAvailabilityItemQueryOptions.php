<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StaffAvailabilityItem resources
 *
 * Available select fields:
 * - availabilityItems
 * - staffId
 */
class StaffAvailabilityItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for StaffAvailabilityItem
     */
    public const FIELD_AVAILABILITY_ITEMS = 'availabilityItems';
    public const FIELD_STAFF_ID = 'staffId';

    /**
     * Select specific StaffAvailabilityItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
