<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InsightValueDouble resources
 *
 * Available select fields:
 * - value
 */
class InsightValueDoubleQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific InsightValueDouble properties
     * 
     * @param array<string> $select Use InsightValueDoubleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
