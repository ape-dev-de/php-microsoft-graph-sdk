<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PatternedRecurrence resources
 *
 * Available select fields:
 * - pattern
 * - range
 */
class PatternedRecurrenceQueryOptions extends QueryOptions
{
    public const FIELD_PATTERN = 'pattern';
    public const FIELD_RANGE = 'range';

    /**
     * Select specific PatternedRecurrence properties
     * 
     * @param array<string> $select Use PatternedRecurrenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
