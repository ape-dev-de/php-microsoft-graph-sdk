<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ToneInfo resources
 *
 * Available select fields:
 * - sequenceId
 * - tone
 */
class ToneInfoQueryOptions extends QueryOptions
{
    public const FIELD_SEQUENCE_ID = 'sequenceId';
    public const FIELD_TONE = 'tone';

    /**
     * Select specific ToneInfo properties
     * 
     * @param array<string> $select Use ToneInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
