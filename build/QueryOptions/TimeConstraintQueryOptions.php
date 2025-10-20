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
    public const FIELD_ACTIVITY_DOMAIN = 'activityDomain';
    public const FIELD_TIME_SLOTS = 'timeSlots';

    /**
     * Select specific TimeConstraint properties
     * 
     * @param array<string> $select Use TimeConstraintQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
