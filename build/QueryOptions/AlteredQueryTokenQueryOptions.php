<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AlteredQueryToken resources
 *
 * Available select fields:
 * - length
 * - offset
 * - suggestion
 */
class AlteredQueryTokenQueryOptions extends QueryOptions
{
    public const FIELD_LENGTH = 'length';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_SUGGESTION = 'suggestion';

    /**
     * Select specific AlteredQueryToken properties
     * 
     * @param array<string> $select Use AlteredQueryTokenQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
