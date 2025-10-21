<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeCardBreak resources
 *
 * Available select fields:
 * - breakId
 * - end
 * - notes
 * - start
 */
class TimeCardBreakQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TimeCardBreak
     */
    public const FIELD_BREAK_ID = 'breakId';
    public const FIELD_END = 'end';
    public const FIELD_NOTES = 'notes';
    public const FIELD_START = 'start';

    /**
     * Select specific TimeCardBreak properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
