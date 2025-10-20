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
    public const FIELD_BREAK_ID = 'breakId';
    public const FIELD_END = 'end';
    public const FIELD_NOTES = 'notes';
    public const FIELD_START = 'start';

    /**
     * Select specific TimeCardBreak properties
     * 
     * @param array<string> $select Use TimeCardBreakQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
