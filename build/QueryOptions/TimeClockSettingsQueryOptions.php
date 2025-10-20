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
    public const FIELD_APPROVED_LOCATION = 'approvedLocation';

    /**
     * Select specific TimeClockSettings properties
     * 
     * @param array<string> $select Use TimeClockSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
