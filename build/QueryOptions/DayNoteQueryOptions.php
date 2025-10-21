<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DayNote resources
 *
 * Available select fields:
 * - dayNoteDate
 * - draftDayNote
 * - sharedDayNote
 */
class DayNoteQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DayNote
     */
    public const FIELD_DAY_NOTE_DATE = 'dayNoteDate';
    public const FIELD_DRAFT_DAY_NOTE = 'draftDayNote';
    public const FIELD_SHARED_DAY_NOTE = 'sharedDayNote';

    /**
     * Select specific DayNote properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
