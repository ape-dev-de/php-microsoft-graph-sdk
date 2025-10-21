<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InsightValueInt resources
 *
 * Available select fields:
 * - value
 */
class InsightValueIntQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InsightValueInt
     */
    public const FIELD_VALUE = 'value';

    /**
     * Select specific InsightValueInt properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
