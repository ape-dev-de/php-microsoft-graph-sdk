<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationSchedule resources
 *
 * Available select fields:
 * - expiration
 * - interval
 * - state
 */
class SynchronizationScheduleQueryOptions extends QueryOptions
{
    public const FIELD_EXPIRATION = 'expiration';
    public const FIELD_INTERVAL = 'interval';
    public const FIELD_STATE = 'state';

    /**
     * Select specific SynchronizationSchedule properties
     * 
     * @param array<string> $select Use SynchronizationScheduleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
