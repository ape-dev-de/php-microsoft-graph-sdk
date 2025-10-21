<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeClockSettings resources
 *
 * Available select fields:
 * - approvedLocation
 */
class TimeClockSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeClockSettings
     */
    public const FIELD_APPROVED_LOCATION = 'approvedLocation';

    /**
     * Select specific TimeClockSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
