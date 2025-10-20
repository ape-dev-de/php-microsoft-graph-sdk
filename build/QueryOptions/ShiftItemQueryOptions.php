<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ShiftItem resources
 *
 * Available select fields:
 * - activities
 * - displayName
 * - notes
 */
class ShiftItemQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITIES = 'activities';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_NOTES = 'notes';

    /**
     * Select specific ShiftItem properties
     * 
     * @param array<string> $select Use ShiftItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
