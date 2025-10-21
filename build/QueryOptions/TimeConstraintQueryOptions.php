<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeConstraint resources
 *
 * Available select fields:
 * - activityDomain
 * - timeSlots
 */
class TimeConstraintQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeConstraint
     */
    public const FIELD_ACTIVITY_DOMAIN = 'activityDomain';
    public const FIELD_TIME_SLOTS = 'timeSlots';

    /**
     * Select specific TimeConstraint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
