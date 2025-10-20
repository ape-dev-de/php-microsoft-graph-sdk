<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ShiftPreferences resources
 *
 * Available select fields:
 * - availability
 */
class ShiftPreferencesQueryOptions extends QueryOptions
{
    public const FIELD_AVAILABILITY = 'availability';

    /**
     * Select specific ShiftPreferences properties
     * 
     * @param array<string> $select Use ShiftPreferencesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
