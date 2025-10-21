<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ShiftPreferences resources
 *
 * Available select fields:
 */
class ShiftPreferencesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ShiftPreferences
     */

    /**
     * Select specific ShiftPreferences properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
