<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AllowedValue resources
 *
 * Available select fields:
 * - isActive
 */
class AllowedValueQueryOptions extends QueryOptions
{
    public const FIELD_IS_ACTIVE = 'isActive';

    /**
     * Select specific AllowedValue properties
     * 
     * @param array<string> $select Use AllowedValueQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
