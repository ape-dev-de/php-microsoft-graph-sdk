<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DefaultColumnValue resources
 *
 * Available select fields:
 * - formula
 * - value
 */
class DefaultColumnValueQueryOptions extends QueryOptions
{
    public const FIELD_FORMULA = 'formula';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DefaultColumnValue properties
     * 
     * @param array<string> $select Use DefaultColumnValueQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
