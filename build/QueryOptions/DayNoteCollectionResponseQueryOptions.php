<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DayNoteCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DayNoteCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DayNoteCollectionResponse properties
     * 
     * @param array<string> $select Use DayNoteCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
